<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;

class shopdetailsController extends Controller
{
    public function index()
    {



        $value = Session::get('user');
        return view('frontpage/shop-details', compact('value'));
        
        
}
}