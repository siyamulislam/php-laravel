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
    Route::get ('/dashboard',               [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get ('/category/add',            [CategoryController::class, 'add'])->name('category.add');
    Route::post('/category/store',          [CategoryController::class, 'store'])->name('category.store');
    Route::get ('/category/manage',         [CategoryController::class, 'manage'])->name('category.manage');
    Route::get ('/category/edit/{id}',      [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}',    [CategoryController::class, 'update'])->name('category.update');
    Route::get ('/category/delete/{id}',    [CategoryController::class, 'delete'])->name('category.delete');

    Route::get ('/category/details/{id}',   [CategoryController::class, 'details'])->name('category.details');
});
