<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class userLoginController extends Controller
{

    

public function login(Request $request){

  
    

    if(Auth::attempt([

        'email' => $request->email,
        'password' => $request->password

    ]))

    {
        
        $user= user::where('email', $request->email)->first();
    
       
        
        
        if($user->utype=='User')

        {   
            
           

            return view('index', $user);

        }

            return redirect()->route('u-login');


    }

    redirect()->back();

}

}
