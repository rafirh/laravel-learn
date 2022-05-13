<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "POST",
            "posts" => Posts::all()
        ]);
    }
    public function getOne($slug){
        return view('post', [
            'title' => 'Single Post',
            'post' => Posts::find($slug)
        ]);
    }
}
