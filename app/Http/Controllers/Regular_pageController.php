<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Regular_pageController extends Controller
{
    public function index()
    {
        return view('frontView.regular_page');
    }
}
