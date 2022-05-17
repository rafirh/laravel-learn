<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSession(Request $request) {
		if($request->session()->has('name')){
			echo $request->session()->get('name');
		}else{
			echo 'No data in this session.';
		}
	}
	public function addSession(Request $request) {
		$request->session()->put('name','Rafi Rahman');
		echo "Data added to this session.";
	}
	public function deleteSession(Request $request) {
		$request->session()->forget('name');
		echo "Data deleted from session.";
	}
}
