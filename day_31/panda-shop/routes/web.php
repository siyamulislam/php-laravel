<?php

use App\Http\Controllers\FullNameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',                      [HomeController:: class,'home'])            ->name('home');
Route::get('/home',                  [HomeController:: class,'home'])            ->name('home');
Route::get('/brand',                 [HomeController:: class,'brand'])          ->name('brand');
Route::get('/category',              [HomeController:: class,'category'])       ->name('category');
Route::get('/full-name',             [HomeController:: class,'fullName'])       ->name('full-name');
Route::get('/get-full-name',         [FullNameController:: class,'fullName'])    ->name('get-full-name');
Route::get('/product-detail/{id}',   [HomeController::class, 'productDetail'])  ->name('product-detail');
Route::get('/brand-product/{id}',    [HomeController::class, 'brandProduct'])    ->name('brand-product');
