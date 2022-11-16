<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',                     [HomeController:: class,'home'])            ->name('home');
Route::get('/home',                 [HomeController:: class,'home'])            ->name('home');
Route::get('/product-detail/{id}',  [HomeController::class, 'detail'])          ->name('product-detail');
