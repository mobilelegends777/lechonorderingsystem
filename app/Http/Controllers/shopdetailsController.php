<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopdetailsController extends Controller
{
    public function index()
    {



    	 $data = [
            "utype" => "notlogin"
        ];
        return view('frontpage/shop-details', compact('data'));
        
        
}
}