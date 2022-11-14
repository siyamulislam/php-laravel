<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/home',     [HomeController::class,'home']);



//Route::get('/',         [HomeController:: class,'home'])        ;
//Route::get('/about',    [HomeController:: class,'about'])   ;
//Route::get('/contact',  [HomeController:: class,'contact'])    ;

Route::get('/',             [HomeController:: class,'home'])            ->name('home');
Route::get('/about',        [HomeController:: class,'about'])           ->name('about');
Route::get('/contact',      [HomeController:: class,'contact'])         ->name('contact');
Route::get('/calculator',   [HomeController:: class,'calculator'])      ->name('calculator');
Route::get('/series',       [HomeController:: class,'series'])          ->name('series');
