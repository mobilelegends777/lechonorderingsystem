<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;

class contactController extends Controller
{
    public function index()
    {
       
        $data = Auth::user(); 
        $value = [
            '0' => $data
        ];
    
        return view('frontpage/contact', compact('value'));

       
    }
}
