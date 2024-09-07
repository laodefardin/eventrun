<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\Registration;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class RegistrationController extends Controller
{
    public function store(Request $request, $eventId)
    {   
        $event = Events::findOrFail($eventId);

        $request->merge([
            'event_id' => $eventId,
            'payment_status' => 'unpaid',
            'total_price' => $event->price,
        ]);

        $order = Registration::create($request->all());

        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production'); // Ubah ke true untuk produksi
        Config::$isSanitized = true;
        Config::$is3ds = true;
        Config::$overrideNotifUrl = config('app.url').'/api/midtrans-callback';

        $order_id = $order->id;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id,
                'gross_amount' => $order->total_price,
            ],
            'item_details' => [
                [
                    'id' => $order_id,
                    'price' => $order->total_price, // Harga per item
                    'quantity' => 1, // Jumlah item
                    'name' => $event->name, // Nama produk yang ditampilkan
                ],
            ],
            'customer_details' => [
                'first_name' => $request->participant_name,
                'email' => $request->email,
                'phone' => $request->phone_number,
            ],
        ];

        try {
            $snapToken = Snap::getSnapToken($params);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to generate payment token.'], 500);
        }

        return view('registrations.checkout', compact('snapToken', 'order'));
    }

    public function callback(Request $request)
    {
         $serverKey = config('midtrans.server_key');
         $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
         if ( $hashed == $request->signature_key)
         {
            if(($request->transaction_status == 'capture' && $request->payment_type == 'credit-card' && $request->fraud_status == 'accept') or $request->transaction_status == 'settlement'){
                $order = Registration::find($request->order_id);
                $order->update(['payment_status' => 'Paid']);
            } 
         }
    }

    public function invoice($id){
        $order = Registration::find($id);
        return view('registrations.invoice',compact('order'));
    }
}
