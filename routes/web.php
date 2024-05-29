<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('index');  // Nama file blade untuk halaman index
})->name('index');

Route::get('/about', function () {
    return view('about');  // Nama file blade untuk halaman about
})->name('about');

Route::get('/contact', function () {
    return view('contact');  // Nama file blade untuk halaman contact
})->name('contact');


Route::resource('reservations', ReservationController::class);
Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
