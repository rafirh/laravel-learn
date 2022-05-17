<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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



Route::get('/', [AboutController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'getOne']);
Route::get('/contact', [ContactController::class, 'index']);
