<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/product-details', function () {
    return view('products.details');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/cart-index', function () {
    return view('cart.index');
});