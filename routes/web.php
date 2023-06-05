<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'all_users'])->name('users');

Route::resource('address', App\Http\Controllers\AddressController::class);

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/tow', [BookingController::class, 'getTowServiceBookings'])->name('bookings.tow');
Route::get('/bookings/mechanic', [BookingController::class, 'getMechanicServiceBookings'])->name('bookings.mechanic');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::patch('/bookings/{booking}/update-status', [BookingController::class, 'updateStatus'])->name('bookings.update-status');
