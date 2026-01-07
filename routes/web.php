<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/harga', function () {
    return view('harga');
})->name('harga');

Route::get('/masuk', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::post('/submit-booking', function () {
    return redirect()->back()->with('success', 'Silahkan ditunggu email konfirmasi untuk pembayaran.');
});