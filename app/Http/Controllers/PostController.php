<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post){
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            "posts" => $post->latest()->filter()->get()
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
