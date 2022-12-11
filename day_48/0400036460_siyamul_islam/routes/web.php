<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
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

Route::get('/',                         [FrontController::class, 'home'])->                 name('home');
Route::get('/home',                     [FrontController::class, 'home'])->                 name('home');
//Route::get('/products/{id}',      [FrontController::class, 'productDetails'])->             name('products');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get ('/dashboard',               [DashboardController::class, 'dashboard'])->name('dashboard');


    //    Category
    Route::get ('/category/add',            [CategoryController::class, 'add'])         ->name('category.add');
    Route::post('/category/store',          [CategoryController::class, 'store'])       ->name('category.store');
    Route::get ('/category/manage',         [CategoryController::class, 'manage'])      ->name('category.manage');
    Route::get ('/category/edit/{id}',      [CategoryController::class, 'edit'])        ->name('category.edit');
    Route::post('/category/update/{id}',    [CategoryController::class, 'update'])      ->name('category.update');
    Route::get ('/category/delete/{id}',    [CategoryController::class, 'delete'])      ->name('category.delete');

    //      Brands
    Route::get ('/brand/add',               [BrandController::class, 'add'])       ->name('brand.add');
    Route::post('/brand/store',             [BrandController::class, 'store'])     ->name('brand.store');
    Route::get ('/brand/manage',            [BrandController::class, 'manage'])    ->name('brand.manage');
    Route::get ('/brand/edit/{id}',         [BrandController::class, 'edit'])      ->name('brand.edit');
    Route::post('/brand/update/{id}',       [BrandController::class, 'update'])    ->name('brand.update');
    Route::get ('/brand/delete/{id}',       [BrandController::class, 'delete'])    ->name('brand.delete');

    //      Products
    Route::get ('/product/add',               [ProductController::class, 'add'])       ->name('product.add');
    Route::post('/product/store',             [ProductController::class, 'store'])     ->name('product.store');
    Route::get ('/product/manage',            [ProductController::class, 'manage'])    ->name('product.manage');
    Route::get ('/product/edit/{id}',         [ProductController::class, 'edit'])      ->name('product.edit');
    Route::post('/product/update/{id}',       [ProductController::class, 'update'])    ->name('product.update');
    Route::get ('/product/delete/{id}',       [ProductController::class, 'delete'])    ->name('product.delete');
//    Route::get ('/product/details/{id}',      [ProductController::class, 'details'])   ->name('product.details');
});
