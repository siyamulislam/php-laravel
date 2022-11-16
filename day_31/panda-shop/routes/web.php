<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',                     [HomeController:: class,'home'])            ->name('home');
Route::get('/home',                 [HomeController:: class,'home'])            ->name('home');
Route::get('/brand',                 [HomeController:: class,'brand'])          ->name('brand');
Route::get('/category',              [HomeController:: class,'category'])       ->name('category');
Route::get('/product-detail/{id}',  [HomeController::class, 'detail'])          ->name('product-detail');
