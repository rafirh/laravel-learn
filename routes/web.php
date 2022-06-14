<?php

use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'getOne']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/getSession',[SessionController::class, 'getSession']);
Route::get('/addSession',[SessionController::class, 'addSession']);
Route::get('/removeSession',[SessionController::class, 'deleteSession']);

Route::get('/addCookie',[CookieController::class, 'setCookie']);
Route::get('/getCookie',[CookieController::class, 'getCookie']);
