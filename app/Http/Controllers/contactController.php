<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
       

    	  $data = [
            "utype" => "notlogin"
        ];
        return view('frontpage/contact', compact('data'));

       
    }
}
