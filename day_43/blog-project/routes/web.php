<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;



Route::get('/',                 [FrontController::class, 'home'])->                 name('home');
Route::get('/home',                 [FrontController::class, 'home'])->                 name('home');
Route::get('/product-details',  [FrontController::class, 'productDetails'])->       name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
