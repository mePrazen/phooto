<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $photos = \App\Models\photo::all();
        
        return view('site.pages.home')->with(['photos' => $photos ]);
    }
}
