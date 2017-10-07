<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function login()
    {

    	return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
    	$data = $request->only('email','password');
    	if(\Auth::attempt($data)){

    		return view('users.welcome');

    		//return redirect()->route('home');
    	}
    	return back()->withInput();
    }

public function home()
    {
        return view('home');
    }

    public function logout()
    {
    	\Auth::logout();
    	return redirect()->route('login');
    }
}
