<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(){
    	return view('layout.login');
    }
    public function postlogin(Request $request){
    	if (Auth::attempt($request->only('nama_user','password'))){
    		return redirect('/admin/pengaduan');
    	}
    	return redirect('/masuk')->with('msg', 'Username atau Password yang diinput salah.');
    }
    public function logout(){
    	Auth::logout();
    	return redirect ('/masuk');
    }
}
