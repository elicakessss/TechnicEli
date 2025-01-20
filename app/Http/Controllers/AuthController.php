<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    // Basta dito mga LogIn
    public function show_login(){
            return view('auth_login');
        }

    public function login(){
        $credentials = $request->only('username', 'password');
        $userExists = User::where('username', $credentials['username'])->exists(); //Conditional statements kung bobo yung user
        if (!$userExists) {
            return redirect()->back()->withErrors(['username' => 'User does not exist'])->withInput();
        }
        if (Auth::attempt($credentials)) {$user = Auth::user();
        return redirect()->back()->withErrors(['password' => 'Invalid password'])->withInput();}
    }


    public function show_register()
    {
        return view('auth_register');
    }

    // Create User
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        User::create([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect()->back()->withErrors(['password' => 'User Already Exists'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}

