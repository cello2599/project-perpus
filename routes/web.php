<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;
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
Route::get('clientside/detail/{data}', [App\Http\Controllers\ClientsideController::class, 'detail']);
Route::get('clientside/list', [App\Http\Controllers\ClientsideController::class, 'index']);
Route::get('clientside/list2', [App\Http\Controllers\ClientsideController::class, 'list2']);
Route::get('/contact', [App\Http\Controllers\ClientsideController::class, 'contact']);

Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('postlogin', [App\Http\Controllers\AuthController::class, 'postlogin']);
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

Route::get('serverside/master', [App\Http\Controllers\BukuController::class, 'index']);
Route::get('serverside/add', [App\Http\Controllers\BukuController::class, 'create']);
Route::post('serverside/master', [App\Http\Controllers\BukuController::class, 'store']);
Route::get('serverside/edit/{id_buku}', [App\Http\Controllers\BukuController::class, 'edit']);
Route::put('serverside/edit/store/{id_buku}', [App\Http\Controllers\BukuController::class, 'update']);
Route::delete('serverside/delete/{data}', [App\Http\Controllers\BukuController::class, 'delete']);

});
