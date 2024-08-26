<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\hotelController as ControllersHotelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages/home');
});
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');

Route::get('/reservation',
    [ControllersHotelController::class, 'reservation'])->name('reservation');

Route::get('/payement',[HotelController::class, 'payement'])->name('payement');


Route::resource('hotels', App\Http\Controllers\hotelController::class);
Route::get('/hotels/search-hotels', [App\Http\Controllers\hotelController::class, 'show'])->name('search-hotels');
Route::resource('chambres', App\Http\Controllers\ChambreController::class);

Route::resource('reservations', App\Http\Controllers\ReservationController::class);

Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::resource('paiements', App\Http\Controllers\PaiementController::class)->only('store');

Route::resource('avis', App\Http\Controllers\AvisController::class)->only('store');



