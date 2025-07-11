<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Route::get('/service', function () {
//     return view('service');
// })->name('service');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/service', [BookingController::class, 'create'])->name('service');
Route::post('/service', [BookingController::class, 'create'])->name('bookings.create.post');
Route::get('/service/{serviceId?}', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::get('/', [ProductController::class, 'index'])->name('home');