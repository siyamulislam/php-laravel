<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
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
});
