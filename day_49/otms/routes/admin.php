<?php

use App\Http\Controllers\Admin\CourseCategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CourseSubCategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnrollController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get ('/dashboard',       [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('course-categories',CourseCategoryController::class);
    Route::resource('course-sub-categories',CourseSubCategoryController::class);
    Route::resource('courses',CourseController::class)->middleware('teacher');;

    Route::post('/get-sub-category-by-category-id',[CourseController::class,'getSubCategory'])->name('get-sub-category-by-category-id');
    Route::get('/approve-course/{id}',[CourseController::class,'approveCourse'])->name('courses.approve')->middleware('admin');

    Route::resource('users',UserController::class);
    Route::get('/manage-enrolls',[EnrollController::class,'manageEnroll'])->name('mange-enroll')->middleware('admin');
    Route::get('/approve-enroll/{id}',[EnrollController::class,'approveEnroll'])->name('enroll.approve')->middleware('admin');
    Route::get('/reject-enroll/{id}',[EnrollController::class,'rejectEnroll'])->name('enroll.reject')->middleware('admin');


});
