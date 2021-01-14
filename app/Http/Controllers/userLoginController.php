<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class userLoginController extends Controller
{

    


    public function index(){
        $value = Session::get('user');
            //dd($value);

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


//Google Sign IN

public function redirectToProvider()
    {

        return Socialite::driver('google')->redirect();

    }

    /**
     * Obtain the user information from google.
     * 
     * @return Response
     */

     public function handleProviderCallback(){


   try{

       $user = Socialite::driver('google')->user();

      
        
        $finduser =User::where('google_id', $user->id)->first();



      if($finduser){
        Auth::login($finduser);

        $data1 = [
            "userid" => $finduser->id,
            "name" => $finduser->name,
            "utype" => $finduser->utype,
            "google_id" => $finduser->google_id
        ];
        
        $data = Session::put('user', $data1);
        
        
        $value = Session::get('user'); 
  
        
       if($value['utype']=='User')

       {    

           return view('frontpage.front-page', compact('value'));

       }

       }else {

               $newUser = User::create([
                
                    'utype' => 'User', 
                    'name' => $user->name,                   
                    'email' => $user->email,
                   'google_id' => $user->id,
                    'password' => encrypt('123dummy')

                ]);
               
        $data = Session::put('user', $newUser);
        
        
        $value = Session::get('user'); 
       
        Auth::login($newUser);

       if($value['utype']=='User')

       {    

           return view('frontpage.front-page', compact('value'));

       }

         }


   }catch (Exception $e) {

    dd($e->getMessage());

 }


        
     }


    



     
public function redirectToFacebook()
{

    return Socialite::driver('facebook')->redirect();

}

/**
 * Obtain the user information from google.
 * 
 * @return Response
 */

 public function handleFacebookCallback(){


try{

   $user = Socialite::driver('facebook')->user();

  
    
    $finduser =User::where('facebook_id', $user->id)->first();



  if($finduser){
    Auth::login($finduser);

    $data1 = [
        "userid" => $finduser->id,
        "name" => $finduser->name,
        "utype" => $finduser->utype,
        "facebook_id" => $finduser->facebook_id
    ];
    
    $data = Session::put('user', $data1);
    
    
    $value = Session::get('user'); 

    
   if($value['utype']=='User')

   {    

       return view('frontpage.front-page', compact('value'));

   }

   }else {

           $newUser = User::create([
            
                'utype' => 'User', 
                'name' => $user->name,                   
                'email' => $user->email,
               'facebook_id' => $user->id,
                'password' => encrypt('123dummy')

            ]);
           
    $data = Session::put('user', $newUser);
    
    
    $value = Session::get('user'); 
   
    Auth::login($newUser);

   if($value['utype']=='User')

   {    

       return view('frontpage.front-page', compact('value'));

   }

     }


}catch (Exception $e) {

dd($e->getMessage());

}


    
 }




    


}
