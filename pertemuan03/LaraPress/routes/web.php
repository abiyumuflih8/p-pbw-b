<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');   // halaman Home
});

Route::get('/tentang-kami', function () {
    return view('about');     // halaman Tentang Kami
});

Route::get('/kontak', function () {
    return view('contact');   // halaman Kontak
});