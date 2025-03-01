<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Container\Attributes\Auth;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProductController;

// Auth Routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('throttle:5,1')->group(function () {
    Route::apiResource('products', ProductController::class);

});