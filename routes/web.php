<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'getOne']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/getSession',[SessionController::class, 'getSession']);
Route::get('/addSession',[SessionController::class, 'addSession']);
Route::get('/removeSession',[SessionController::class, 'deleteSession']);

Route::get('/addCookie',[CookieController::class, 'setCookie']);
Route::get('/getCookie',[CookieController::class, 'getCookie']);

