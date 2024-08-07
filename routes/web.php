<?php

use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home');
});
Route::get('/hotels', [HotelController::class , 'hotels'])->name('hotels');
