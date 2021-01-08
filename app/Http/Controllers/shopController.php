<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{
    public function index()
    {

    	 $data = [
            "utype" => "notlogin"
        ];
        return view('frontpage/shop', compact('data'));
        
    }
}
