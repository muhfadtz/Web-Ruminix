<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cart', function () {
    return view('cart');
});
use App\Http\Controllers\Auth\RegisterController;


// Langsung arahkan ke view signup.blade.php
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/product-detail', function () {
    return view('detail');
});