<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        $title = "login";
        return view('auth.login', compact(['title']));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        if (Auth::attempt(($credentials))) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()->with('loginError', 'nama atau password salah');
    }
}
