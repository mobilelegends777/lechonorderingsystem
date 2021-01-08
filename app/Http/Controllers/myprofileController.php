<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myprofileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {



       $data = [
            "utype" => "notlogin"
        ];
        return view('frontpage/myprofile', compact('data'));
    }


}
