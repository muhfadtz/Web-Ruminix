<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Halaman login (landing page)
Route::get('/', function () {
    if (!Auth::check()) {
        return view('login'); 
    }
    return redirect('/home'); 
})->name('login');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
// Signup
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'register'])->name('signup');

// Google OAuth
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');

// Logout
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Route yang butuh login
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ProductController::class, 'index'])->name('home');
    Route::get('/profile', function () {
        return view('profile');
    });
    Route::get('/cart', function () {
        return view('cart');
    });
    Route::get('/product-detail', function () {
        return view('detail');
    });
});
