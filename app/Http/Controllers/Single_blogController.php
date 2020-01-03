<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Single_blogController extends Controller
{
    public function index()
    {
        return view('frontView.single_blog');
    }
}
