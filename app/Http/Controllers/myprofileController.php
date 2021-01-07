<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myprofileController extends Controller
{
    

    public function index()
    {
        return view('frontpage/myprofile');
    }


}
