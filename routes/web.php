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
Route::get('clientside/detail/{id_buku}', [App\Http\Controllers\ClientsideController::class, 'detail']);


Route::get('serverside/master', [App\Http\Controllers\BukuController::class, 'index']);
Route::get('serverside/add', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('serverside/edit/{id_buku}', [App\Http\Controllers\BukuController::class, 'edit']);

Route::post('serverside/master', [App\Http\Controllers\BukuController::class, 'store']);