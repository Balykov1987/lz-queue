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

Route::get('/', [\App\Http\Controllers\PersonController::class, 'index']);

Route::get('/list', [\App\Http\Controllers\ListController::class, 'preview'])->name('list');

Route::get('/peoples', [\App\Http\Controllers\ListController::class, 'index'])->name('peoples.list');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
