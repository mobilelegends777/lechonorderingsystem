<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartController extends Controller

{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {


         $data = [
            "utype" => "notlogin"
        ];
        return view('frontpage/cartpage', compact('data'));
        
    }
}
