<?php

namespace App\Http\Controllers;

class HandlerController extends Controller
{
    public function success()
    {
        $title = "success";
        return view('components.success', compact(['title']));
    }
}
