<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;


class userLoginController extends Controller
{

    


    public function index(){
        $value = Session::get('user');
            if($value == null)
            {

            $value = [
                "utype" => "notLogin"
            ];

            return view('frontpage.front-page', compact('value'));
            }
            else 
            {


            return view('frontpage.front-page', compact('value'));
            }




    }
    public function login(Request $request){


        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
       
        $user= user::where('email', $request->email)->first();  

        $data1 = [
            "userid" => $user->id,
            "name" => $user->name,
            "utype" => $user->utype
        ];
        
        $data = Session::put('user', $data1);
        
        
        $value = Session::get('user'); 
       
     

       if($value['utype']=='User')

       {    

           return view('frontpage.front-page', compact('value'));

       }

        return redirect()->route('u-login', compact('value'));
        
    
       

    }

}


}
