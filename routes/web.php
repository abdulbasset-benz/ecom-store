<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product-details', function () {
    return view('products.details');
});

Route::get('/products', function () {
    return view('products.index');
});

Route::get('/cart-index', function () {
    return view('cart.index');
});