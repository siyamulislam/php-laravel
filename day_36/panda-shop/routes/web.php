<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',                 [HomeController::class,'index'])->name('home');

Route::get('/category/add',             [CategoryController::class,'index'])->name('category.add');
Route::post('/category/store',          [CategoryController:: class,"store"])   ->name('category.store');

Route::get('/category/manage',          [CategoryController::class,'manage'])->name('category.manage');
Route::get('/category/edit/{id}',       [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{id}',    [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{id}',     [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/brand/add',             [BrandController::class,'index'])->name('brand.add');
Route::post('/brand/store',          [BrandController:: class,"store"])   ->name('brand.store');

Route::get('/brand/manage',          [BrandController::class,'manage'])->name('brand.manage');
Route::get('/brand/edit/{id}',       [BrandController::class, 'edit'])->name('brand.edit');
Route::post('/brand/update/{id}',    [BrandController::class, 'update'])->name('brand.update');
Route::get('/brand/delete/{id}',     [BrandController::class, 'delete'])->name('brand.delete');

Route::get('/product/add',          [ProductController::class,'index'])->name('product.add');
Route::post('/product/store',       [ProductController:: class,"store"])   ->name('product.store');

Route::get('/product/manage',       [ProductController::class, 'manage'])->name('product.manage');
Route::get('/product/edit/{id}',    [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}',  [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product/detail/{id}',  [ProductController::class, 'detail'])->name('product.detail');


