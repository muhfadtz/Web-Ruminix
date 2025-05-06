<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Auth\RegisterController;


// Langsung arahkan ke view signup.blade.php
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/', function () {
    return view('home');
});