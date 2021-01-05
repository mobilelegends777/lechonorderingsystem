<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopdetailsController extends Controller
{
    public function index()
    {
        return view('frontpage/shop-details');
    }
}
