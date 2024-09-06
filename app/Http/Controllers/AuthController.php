<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function proseslogoutadmin()
    {
        if (Auth::guard('user')->check()){
            Auth::guard('user')->logout();
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function prosesloginadmin(Request $request)
    {
        if (Auth::guard('user')->attempt(['name' => $request->username, 'password' => $request->password])){
            return redirect('/admin/dashboard');
        }else {
            return redirect('/login')->with(['warning' => 'Email / Password Salah']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
