<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\hotelController as ControllersHotelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('pages/home');
});
Route::get('/hotels', [HotelController::class, 'hotels'])->name('hotels');


Route::get('/payement',[HotelController::class, 'payement'])->name('payement');


Route::resource('hotels', App\Http\Controllers\hotelController::class);
Route::get('/hotels/search-hotels', [App\Http\Controllers\hotelController::class, 'show'])->name('search-hotels');
Route::resource('chambres', App\Http\Controllers\ChambreController::class);

Route::resource('reservations', App\Http\Controllers\ReservationController::class);

Route::resource('clients', App\Http\Controllers\ClientController::class);

Route::resource('paiements', App\Http\Controllers\PaiementController::class)->only('store');

Route::resource('avis', App\Http\Controllers\AvisController::class)->only('store');






Route::get('/dashboard', function () {
    return view('pages.home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get(
        '/reservation/{hotelname}',
        [ControllersHotelController::class, 'reservation']
    )->name('reservation');

});

require __DIR__.'/auth.php';
