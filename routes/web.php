<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); // showing the login

Route::post('/login', [AuthController::class, 'login'])->name('login-submit'); // form submission

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // logout

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register-submit');
