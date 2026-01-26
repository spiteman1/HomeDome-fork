<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;



Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/product/{id}/review', [ProductController::class, 'storeReview'])->name('product.review');
Route::get('/Basket', [BasketController::class, 'listProducts'])->name('Basket');
Route::post('updateQuantity/{bid}', [BasketController::class, 'updateQuantity'])->name('updateQuantity.updateQuantity');
Route::post('addProduct/{pid}', [BasketController::class, 'addProduct'])->name('addProduct.addProduct');
Route::post('removeProduct/{bid}', [BasketController::class, 'removeProduct'])->name('removeProduct.removeProduct');
Route::post('/checkout', [OrderController::class, 'checkout'])->name('checkout');
Route::post('/register', [AuthController::class, 'register'])->name('register-submit');



Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/About-Us', function () {
    return view('About-Us');
})->name('About-Us');

Route::get('/Contact-us', function () {
    return view('Contact-us');
})->name('Contact-us');

Route::get('/register', function () {
    return view('register');
});

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');



