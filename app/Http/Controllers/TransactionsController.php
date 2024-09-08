<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class TransactionsController extends Controller
{
    public function index()
    {
        $query = Registration::query();
        $query->select('registrations.*', 'name');
        $query->join('events','registrations.event_id','=','events.id');
        $query->orderBy('registration_date');

        // $order = $query->paginate(3);
        $order = $query->get();
        

        return view('admin.transactions.index', compact('order'));
    }
}
