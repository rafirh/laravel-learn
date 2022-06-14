<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(User $user){
        return view('authors', [
            'title' => 'Author',
            "active" => "authors",
            'authors' => $user->latest()->get()
        ]);
    }
}
