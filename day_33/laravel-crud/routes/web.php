<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',                      [HomeController:: class,'home'])            ->name('home');
Route::get('/add-product',           [ProductController:: class,'addProduct'])   ->name('add-product');
Route::post('/save-product',          [ProductController:: class,"saveProduct"])   ->name('save-product');
Route::get('/manage-product',         [ProductController:: class,'manageProduct'])   ->name('manage-product');
Route::get('/edit-product',           [ProductController:: class,'editProduct'])   ->name('edit-product');
Route::get('/edit-product/{id}',      [ProductController:: class,'editProduct'])   ->name('edit-product');
Route::post('/update-product/{id}',   [ProductController:: class,'updateProduct'])   ->name('update-product');
Route::get('/delete-product/{id}',   [ProductController:: class,'deleteProduct'])   ->name('delete-product');
