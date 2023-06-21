<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{

    public function Register()
    {
        return view('register',[
            'title' =>'Register',
        ]);
    }
    
    public function store(Request $request)
    {
      $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',   
        'password' => 'required|min:5|max:255'
       ]);

       User::create($validateData);
       return redirect('/login');
    }
    

}
