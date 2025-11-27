<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 

Route::get('/', function () {
    return view('welcome');
});

Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::get('p.search', function () {
    return view('home');
});

Route::get('show/{rid}', [ProductController::class, 'show']);
