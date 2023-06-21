<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login',[
            'title' =>'login',

        ]);
    }
    public function authenticate(Request $request)
    {
        $credantials = $request->validate([
            'email' =>'required|email:dns',
            'password' =>'required'   
        ]);
        if (Auth::attempt($credantials, $request->remember)) {
            $request->session()->regenerate();
        
        return redirect()->intended('/dashboard');
        }
        return back()->with('LoginEror');
    }

    public function dashboard(){
        return view('dashboard');
    }

}
