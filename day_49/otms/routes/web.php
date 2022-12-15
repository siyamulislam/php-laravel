<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseSubCategoryController;


Route::as('front.')->group(function (){
    Route::get('/',                 [FrontController::class,'home'])->name('home');
    Route::get('/home',             [FrontController::class,'home'])->name('home');
    Route::get('/about',            [FrontController::class,'about'])->name('about');
    Route::get('/contact',          [FrontController::class,'contact'])->name('contact');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get ('/dashboard',       [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('course-categories',CourseCategoryController::class);
    Route::resource('course-sub-categories',CourseSubCategoryController::class);
});
