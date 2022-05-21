<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "POST",
            "posts" => Post::all()
        ]);
    }
    public function getOne($slug){
        return view('post', [
            'title' => 'Single Post',
            'post' => Post::find($slug)
        ]);
    }
}
