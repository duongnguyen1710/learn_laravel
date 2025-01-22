<?php

use App\Http\Controllers\HocController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/hello', function(){
    return 'Hello Duong';
});

Route::get('/hoc-route', function(){
    return view('hoc-route');
});

Route::get('/hoc-controller', [HocController::class, 'index']);

Route::get('hoc-view', function(){
    return view('hoc-view', ['name' => 'Nguyễn Đức Dương']);
});

Route::get('/hoc-blade', function(){
    return view('hoc-blade');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');