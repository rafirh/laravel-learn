<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function setCookie(Request $request){
        $minutes = 5;
        $response = new Response('Hello Rafi');
        $response->withCookie(cookie('name','Rafi Rahman', $minutes));
        return $response;
    }
    public function getCookie(Request $request){
        $value = $request->cookie('name');
        return $value;
    }
}
