<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoController extends Controller
{
    // home.blade.phpを表示
    public function showHome()
    {
        return view('home');
    }

    // submit.blade.phpを表示
    public function showSubmit()
    {
        return view('submit');
    }
}
