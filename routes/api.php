<?php

use App\Http\Controllers\Api\ProductController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);
Route::get('/captcha', [\App\Http\Controllers\Api\CapchaController::class, 'generate']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
