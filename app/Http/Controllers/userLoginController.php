<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class userLoginController extends Controller
{

    
    public function index(){
        $data = [
            "utype" => "notlogin"
        ];
        return view('index', compact('data'));

    }
    public function login(Request $request){

       
        

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
            
            $user= user::where('email', $request->email)->first();
            $data = [
                "userid" => $user->id,
                "name" => $user->name,
                "utype" => $user->utype
            ];
           
            if($user->utype=='User')

            {   
                
            

                return view('index', compact('data'));

            }

                return redirect()->route('u-login');


        }

        redirect()->back();

    }

}
