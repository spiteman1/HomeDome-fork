<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 

Route::get('/', function () {
    return view('home');
});

Route::get('p.search', function () {
    return view('home');
});

Route::get('show/{rid}', [ProductController::class, 'show']);
