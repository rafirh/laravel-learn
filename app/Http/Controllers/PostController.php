<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index(Post $post){
        $title = '';
        if(request('category')){
            $title = ' in ' . Category::firstWhere('slug', request('category'))->name;
        }
        if(request('author')){
            $title = ' by ' . User::firstWhere('username', request('author'))->name;
        }
        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => "posts",
            "posts" => $post->latest()->filter(request(['search', 'category', 'author']))->get()
        ]);
    }
    public function getOne(Post $post){
        return view('post', [
            'title' => 'Single Post',
            "active" => "posts",
            'post' => $post
        ]);
    }
}
