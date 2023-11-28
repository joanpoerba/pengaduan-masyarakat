<?php

namespace App\Http\Controllers;

use App\Models\Aduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        $title = 'home';

        return view('home', compact(['title']));
    }

    public function tambahAduan(Request $request)
    {
        $aduan = $request->validate([
            'judulAduan' => 'required',
            'isiAduan' => 'required',
            'lokasiKejadian' => 'required',
        ]);

        $aduan['userId'] = Auth::user()->id;

        Aduan::create($aduan);

        return redirect()->intended('/success');
    }
}
