<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\BasketController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('show/{rid}', [ProductController::class, 'show']);
Route::get('/basket', [BasketController::class, 'listProducts'])->name('listBasketProducts'); 