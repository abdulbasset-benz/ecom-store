<?php


use App\Http\Controllers\web\WebProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/products', [WebProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [WebProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}', [WebProductController::class, 'show'])->name('products.show');
