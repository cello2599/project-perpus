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

Route::get('/', [App\Http\Controllers\ClientsideController::class, 'show']);
Route::get('about', [App\Http\Controllers\ClientsideController::class, 'about']);


Route::get('admin', [App\Http\Controllers\BukuController::class, 'index']);
