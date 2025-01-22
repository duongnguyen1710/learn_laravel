<?php

use App\Http\Controllers\HocController;
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