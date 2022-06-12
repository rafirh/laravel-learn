<?php

use App\Models\User;
use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\CookieController;
use App\Http\Controllers\SessionController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'getOne']);
Route::get('/contact', [ContactController::class, 'index']);

Route::get('/categories', function(Category $category){
    return view('categories', [
        'title' => 'Categories List',
        "active" => "categories",
        'categories' => $category->latest()->get()
    ]);
});
Route::get('/authors', function(User $user){
    return view('authors', [
        'title' => 'Author',
        "active" => "authors",
        'authors' => $user->latest()->get()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);

Route::get('/getSession',[SessionController::class, 'getSession']);
Route::get('/addSession',[SessionController::class, 'addSession']);
Route::get('/removeSession',[SessionController::class, 'deleteSession']);

Route::get('/addCookie',[CookieController::class, 'setCookie']);
Route::get('/getCookie',[CookieController::class, 'getCookie']);
