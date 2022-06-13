<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }
    public function store(Request $request, User $user){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users|max:255',
            'password' => 'required|min:6|max:255'
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user->create($validatedData);
        return redirect('/login', );
    }
}
