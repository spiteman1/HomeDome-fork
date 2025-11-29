<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Product;
use App\Http\Controllers\CategoryController;
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

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');
