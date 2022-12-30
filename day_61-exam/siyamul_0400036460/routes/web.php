<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/product-detail/{id}',[HomeController::class,'detail'])->name('product.website.detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/product/add',[ProductController::class, 'index'])->name('product.add');
    Route::post('/product/store',[ProductController::class, 'store'])->name('product.store');
    Route::get('/product/manage',[ProductController::class, 'manage'])->name('product.manage');
    Route::get('/product/detail/{id}',[ProductController::class, 'detail'])->name('product.detail');
    Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}',[ProductController::class, 'delete'])->name('product.delete');

    Route::get('/user/add',[UserController::class,'index'])->name('user.add');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    Route::get('/user/manage',[UserController::class,'manage'])->name('user.manage');
});
