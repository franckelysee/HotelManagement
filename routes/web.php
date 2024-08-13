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
