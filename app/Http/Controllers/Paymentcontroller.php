<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    public function index()
    {
        return view('site.pages.payment');
    }
}
