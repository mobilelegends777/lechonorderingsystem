<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;

class lechonController extends Controller
{
    	public function index()
    {

        $data = Auth::user(); 
        $value = [
            '0' => $data
        ];
<<<<<<< HEAD
        return view('frontpage/special-order', compact('value'));
=======
        if($value[0] == null){
            $value = [
                '0' => 'Input Address',
                'usertype' => 'notLogin'
            ];
            return view('frontpage/special-order', compact('value'));
        }
        else{
        return view('frontpage/special-order', compact('value'));
        }   
>>>>>>> 7679aaded7abdf6915a3f4d2f24e071122c0ade5
    }
}
