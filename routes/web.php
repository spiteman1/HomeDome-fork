<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FilterController;

Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/add/{id}', [WishlistController::class, 'add'])->name('wishlist.add');
    Route::post('/wishlist/remove/{id}', [WishlistController::class, 'remove'])->name('wishlist.remove');
});



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

Route::get('/force-password-change', [AuthController::class, 'showForcePasswordChange'])
    ->middleware('auth');

Route::post('/force-password-change', [AuthController::class, 'forcePasswordChange'])
    ->middleware('auth');

Route::get('/admin/create', [AuthController::class, 'showCreateAdmin'])
    ->middleware(['auth']);

Route::post('/admin/create', [AuthController::class, 'createAdmin'])
    ->middleware(['auth']);

Route::get('/admin/change-password', [AuthController::class, 'showAdminChangePassword'])
    ->middleware(['auth'])
    ->name('admin.change-password');

Route::post('/admin/change-password', [AuthController::class, 'adminChangePassword'])
    ->middleware(['auth'])
    ->name('admin.change-password.post');

Route::get('/customer/change-password', [AuthController::class, 'showCustomerChangePassword'])
    ->middleware(['auth'])
    ->name('customer.change-password');

Route::post('/customer/change-password', [AuthController::class, 'customerChangePassword'])
    ->middleware(['auth'])
    ->name('customer.change-password.post');


Route::get('/About-Us', function () {
    return view('About-Us');
})->name('About-Us');

Route::get('/Contact-us', function () {
    return view('Contact-us');
})->name('Contact-us');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/filter', [FilterController::class, 'filter'])->name('filter');
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/customers', [AdminController::class, 'customersIndex']);
    Route::post('/admin/customers', [AdminController::class, 'customersStore']);
    Route::post('/admin/customers/{id}/update', [AdminController::class, 'customersUpdate']);
    Route::post('/admin/customers/{id}/delete', [AdminController::class, 'customersDelete']);
});
