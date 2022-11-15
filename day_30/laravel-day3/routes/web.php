<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',                     [HomeController:: class,'home'])            ->name('home');
Route::get('/about',                [HomeController:: class,'about'])           ->name('about');
Route::get('/contact',              [HomeController:: class,'contact'])         ->name('contact');
Route::get('/calculator',           [HomeController:: class,'calculator'])      ->name('calculator');
Route::get('/series',               [HomeController:: class,'series'])          ->name('series');
Route::get('/product-detail/{id}',  [HomeController::class, 'detail'])          ->name('product-detail');
