<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/product-details/{id}',[FrontController::class,'productDetails'])->name('product-details');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    //    Dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
    Route::post('/update-product/{id}',[ProductController::class,'updateProduct'])->name('update-product');

});
