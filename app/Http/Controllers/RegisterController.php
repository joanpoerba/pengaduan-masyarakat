<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        $title = "register";
        return view('auth.register', compact(['title']));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'nik' => 'required|max:16',
            'password' => 'required|max:255',
        ]);

        User::create($validatedData);

        return redirect()->intended('/');
    }
}
