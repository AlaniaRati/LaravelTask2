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
Route::get('/', [App\Http\Controllers\CarsController::class, 'index']);
Route::get('index', [App\Http\Controllers\CarsController::class, 'index']);
Route::get('create', [App\Http\Controllers\CarsController::class, 'create']);
Route::post('store', [App\Http\Controllers\CarsController::class, 'store']);
Route::get('edit/{id}', [App\Http\Controllers\CarsController::class, 'edit']);
Route::post('update/{id}', [App\Http\Controllers\CarsController::class, 'update']);
Route::get('destroy/{id}', [App\Http\Controllers\CarsController::class, 'destroy']);
