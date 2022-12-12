<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;


Route::as('front.')->group(function (){
    Route::get('/',                 [FrontController::class,'home'])->name('home');
    Route::get('/home',             [FrontController::class,'home'])->name('home');
    Route::get('/about',            [FrontController::class,'about'])->name('about');
    Route::get('/contact',          [FrontController::class,'contact'])->name('contact');
});

//Route::get('/',                 [FrontController::class,'home'])->name('front.home');
//Route::get('/home',             [FrontController::class,'home'])->name('front.home');
//Route::get('/about',             [FrontController::class,'about'])->name('front.about');
//Route::get('/contact',             [FrontController::class,'contact'])->name('front.contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
