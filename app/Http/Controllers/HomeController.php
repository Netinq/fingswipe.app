<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Score;

class HomeController extends Controller
{
    public function home()
    {
        $scores = Score::orderBy('score', 'DESC')->take(7)->get();
        return view('home', compact('scores'));
    }
}
