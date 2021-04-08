<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index']);
Route::post('user', [UserController::class, 'store'])->name('save_user');
Route::get('user', [UserController::class, 'store']);
Route::get('edit-user/{id}', [UserController::class, 'edit']);
Route::get('delete-user/{id}', [UserController::class, 'delete']);
