<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;

class myorderController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {

        $value = Session::get('user');

        return view('userpage/myorder', compact('value'));
    }




}
