<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/home', function () {
//    return view("home");
//});


Route::get('/', [\App\Http\Controllers\HomeController::class,'welcome']);
Route::get('/home', [\App\Http\Controllers\HomeController::class,'home']);
Route::get('/bitm', [\App\Http\Controllers\HomeController::class,'bitm']);
Route::get('/basis', [\App\Http\Controllers\HomeController::class,'basis']);
