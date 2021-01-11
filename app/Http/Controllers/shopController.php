<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use Session;
use App\User;
use Auth;
use App\Login;


class shopController extends Controller
{
    public function index()
    {
        $value = Session::get('user');
      	
      	if($value == null)
      	{
      		$value = [
      			"utype" => "notLogin"
      		];

  			return view('frontpage/shop', compact('value'));
      	}
      	else 
      	{
      		$value = Session::get('user');

        	return view('frontpage/shop', compact('value'));
      	}
       
 	}   
    
}
