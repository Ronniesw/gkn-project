<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/bisnis', function () {
    return view('bisnis');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/projek', function () {
    return view('projek');
});

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/kontak', function () {
    return view('kontak');
});
