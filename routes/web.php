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

Route::get('/', function () {
    return view('home', [
        "title" => "HOME"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "ABOUT",
        "name" => "Rafi Rahman",
        "email" => "rafirahamnn18@gmail.com",
        "photo" => "photo.jpg"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "CONTACT"
    ]);
});

Route::get('/post', function () {
    return view('post',[
        "title" => "POST"
    ]);
});
