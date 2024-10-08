<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EventsController::class, 'dashboard'])->name('dashboard');

Route::get('/home', [EventsController::class, 'home'])->name('home');
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
Route::get('/join/{slug}', [EventsController::class, 'show'])->name('events.show');
Route::get('/eventshow/{slug}', [EventsController::class, 'eventshow'])->name('events.eventshow');

// Route::post('/registrations/checkout-prosess/{slug}/{eventId}', [RegistrationController::class, 'store'])->name('registrations.store');
Route::post('/registrations/checkout-process/{eventId}', [RegistrationController::class, 'store'])->name('registrations.store');
Route::get('/registrations/invoice/{id}', [RegistrationController::class, 'invoice'])->name('registrations.invoice');


Route::middleware(['guest:user'])->group(function () {
    Route::get('/login', function () {
        return view('auth.loginadmin');
    })->name('login');
    Route::post('/prosesloginadmin', [AuthController::class, 'prosesloginadmin']);
});

Route::middleware(['auth:user'])->group(function () {
    Route::get('/proseslogoutadmin', [AuthController::class, 'proseslogoutadmin']);
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboardadmin'])->name('dashboard');

    // Menu Transaksi
    Route::get('/transactions', [TransactionsController::class, 'index']);

      // Menu Events
      Route::get('/event', [EventsController::class, 'adminindex']);
      Route::post('/event/store', [EventsController::class, 'store']);
      Route::post('/event/{id}/delete', [EventsController::class, 'delete']);
      Route::post('/event/edit', [EventsController::class, 'edit']);
      Route::post('/event/{id}/update', [EventsController::class, 'update']);

});
