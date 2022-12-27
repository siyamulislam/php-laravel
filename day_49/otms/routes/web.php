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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get ('/dashboard',       [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('course-categories',CourseCategoryController::class);
    Route::resource('course-sub-categories',CourseSubCategoryController::class);
    Route::resource('courses',CourseController::class);

    Route::post('/get-sub-category-by-category-id',[CourseController::class,'getSubCategory'])->name('get-sub-category-by-category-id');
    Route::get('/approve-course/{id}',[CourseController::class,'approveCourse'])->name('courses.approve');

    Route::resource('users',UserController::class);

});
