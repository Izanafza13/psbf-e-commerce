<?php

use Illuminate\Support\Facades\Route;

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');
