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



        // $data = Session::get('user');
        $data = Auth::user();
        
        $value = [
            "0" => $data
        ];

        if($value == null)
        {
        	$value = [
        		"utype" => "notLogin"
        	];

        	return view('frontpage/shop-details', compact('value'));
        }
        else 
        {
        	return view('frontpage/shop-details', compact('value'));
        }
        
        
        
}
}