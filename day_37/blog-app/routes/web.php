<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/',[HomeController::class,'index'])->name('home.index');
    Route::get('/home',[HomeController::class,'index'])->name('home.index');
    Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
    Route::post('/category/store', [CategoryController:: class,"store"])   ->name('category.store');

    Route::get('/category/manage',[CategoryController::class,'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');

    Route::get('/blog/add',[BlogController::class,'index'])->name('blog.add');
    Route::post('/blog/store', [BlogController:: class,"store"])   ->name('blog.store');

    Route::get('/blog/manage',[BlogController::class,'manage'])->name('blog.manage');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    Route::get('/blog/detail/{id}', [BlogController::class, 'detail'])->name('blog.detail');
});
