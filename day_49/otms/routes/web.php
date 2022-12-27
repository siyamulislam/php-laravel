<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseSubCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;

Route::as('front.')->group(function (){
    Route::get('/',                 [FrontController::class,'home'])->name('home');
    Route::get('/home',             [FrontController::class,'home'])->name('home');
    Route::get('/about',            [FrontController::class,'about'])->name('about');
    Route::get('/contact',          [FrontController::class,'contact'])->name('contact');
    Route::get('/course-category/{id}',   [FrontController::class,'courseCategory'])->name('course-category');
    Route::get('/course/{slug}',   [FrontController::class,'courseDetails'])->name('course.details');
});

