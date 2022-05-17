<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about', [
            'title' => 'ABOUT',
            'admin' => Admin::all()
        ]);
    }
}
