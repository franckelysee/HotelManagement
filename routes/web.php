<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/home');
});
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');
Route::get(
    '/hotel-search',
    [HotelController::class, 'searchHotels']
)->name('hotel-search');
Route::get('/reservation',
    [HotelController::class, 'reservation'])->name('reservation');

Route::get('/payement',[HotelController::class, 'payement'])->name('payement');


Route::resource('hotels', App\Http\Controllers\hotelController::class);

Route::resource('chambres', App\Http\Controllers\ChambreController::class);

Route::resource('reservations', App\Http\Controllers\ReservationController::class);

Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::resource('paiements', App\Http\Controllers\PaiementController::class)->only('store');

Route::resource('avis', App\Http\Controllers\AvisController::class)->only('store');


Route::resource('hotels', App\Http\Controllers\hotelController::class);

Route::resource('chambres', App\Http\Controllers\ChambreController::class);

Route::resource('reservations', App\Http\Controllers\ReservationController::class);

Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::resource('paiements', App\Http\Controllers\PaiementController::class)->only('store');

Route::resource('avis', App\Http\Controllers\AvisController::class)->only('store');
