<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('home');
});

Route::get('p.search', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
