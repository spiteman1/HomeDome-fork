<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\BasketController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('show/{rid}', [ProductController::class, 'show']);
Route::get('/basket', [BasketController::class, 'listProducts'])->name('listBasketProducts'); 
Route::post('updateQuantity/{bid}', [BasketController::class, 'updateQuantity'])->name('updateQuantity.updateQuantity'); 
Route::post('addProduct/{pid}', [BasketController::class, 'addProduct'])->name('addProduct.addProduct'); 
Route::post('removeProduct/{bid}', [BasketController::class, 'removeProduct'])->name('removeProduct.removeProduct'); 
