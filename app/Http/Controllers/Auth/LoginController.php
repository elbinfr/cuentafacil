<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only'=>'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
           'username' => 'required|min:6',
           'password' => 'required|min:6'
        ]);


        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withInput();
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
