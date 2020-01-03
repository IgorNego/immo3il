<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Single_product_detailsController extends Controller
{
    public function index()
    {
        return view('frontView.single_product_details');
    }
}
