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

  			return view('frontpage/shop', compact('value'));
      	}
      	else 
      	{
      			// $value = Session::get('user');
	        	return view('frontpage/shop', compact('value'));

      	}
       
	 } 
	 

	 public function appetizerindex(){


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

			return view('frontpage/appetizer', compact('value'));
		}
		else 
		{
			// $value = Session::get('user');

		  return view('frontpage/appetizer', compact('value'));
		}



	 }


	 public function newproductindex(){


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

			return view('frontpage/newproduct', compact('value'));
		}
		else 
		{
			// $value = Session::get('user');

		  return view('frontpage/newproduct', compact('value'));
		}



	 }

	 public function combomealindex(){


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

			return view('frontpage/combomeal', compact('value'));
		}
		else 
		{
			// $value = Session::get('user');

		  return view('frontpage/combomeal', compact('value'));
		}



	 }
	
	 

	 public function dessertindex(){


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

			return view('frontpage/dessert', compact('value'));
		}
		else 
		{
			// $value = Session::get('user');

		  return view('frontpage/dessert', compact('value'));
		}



	 }

	 public function drinksindex(){


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

			return view('frontpage/drinks', compact('value'));
		}
		else 
		{
			// $value = Session::get('user');

		  return view('frontpage/drinks', compact('value'));
		}



	 }
}
