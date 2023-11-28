<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use App\Models\User;

class AdminController extends Controller
{
    public function admin()
    {
        $data = [
            "dataAduan" => Aduan::all(),
            "dataUser" => User::all(),
            "title" => 'admin'
        ];

        return view('admin', compact(['data']));
    }
}
