<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardadmin (){
        $totalPaidPrice = Registration::where('payment_status','Paid')->sum('total_price');

        $totalPaidOrders = Registration::where('payment_status', 'paid')->count();

        $totalUnPaidOrders = Registration::where('payment_status', 'unpaid')->count();

        return view('admin.dashboard', compact('totalPaidPrice','totalPaidOrders','totalUnPaidOrders'));
    }
}
