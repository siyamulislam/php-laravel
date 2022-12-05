<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;



Route::get('/',                 [FrontController::class, 'home'])->                 name('home');
Route::get('/home',             [FrontController::class, 'home'])->                 name('home');
Route::get('/product-details',  [FrontController::class, 'productDetails'])->       name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',    [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::post('/new-category', [CategoryController::class, 'newCategory'])->name('new-category');
});
