<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Session;
use App\Login;
use AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class userLoginController extends Controller
{

    


    public function index(){

        // $value1 = Session::get('user');
        $data = Auth::user();
      
        $value = [
            '0' => $data
        ];
            
            if($value == null)
            {

            $value = [
                "utype" => "notLogin"
            ];
            return view('frontpage.front-page')->with('value', $value);
            }
            else 
            {   

                return view('frontpage.front-page')->with('value', $value);
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
      
            "0"=>$user
           
        ];
        
        $data = Session::put('user', $data1);   
        
        $value = Session::get('user');

        // dd(Auth::user());
       if($value[0]->utype=='User')

       {    

           return view('frontpage.front-page')->with('value', $value);

       }

        return redirect()->route('u-login')->with('value', $value); 

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
          "0"=>$finduser
        ];
        
        $data = Session::put('user', $data1);
        
        
        $value = Session::get('user'); 
  
        
       if($value[0]->utype=='User')

       {    

           return view('frontpage.front-page')->with('value', $value);

       }

       }else {

               $newUser = User::create([
                
                    'utype' => 'User', 
                    'name' => $user->name,                   
                    'email' => $user->email,
                   'google_id' => $user->id,
                    'password' => encrypt('123dummy')

                ]);

         $value1 = [
        
                    "0"=> $newUser
        
                ];
               
        $data = Session::put('user', $value1);
        
      
        $value = Session::get('user'); 
       
        Auth::login($newUser);

       if($value[0]->utype=='User')

       {    

           return view('frontpage.front-page')->with('value', $value);

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
        "0"=>$finduser
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
