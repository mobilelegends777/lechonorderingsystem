<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;
use App\Customer;
use App\Contact;
use Auth;
use DB;
use Session;
use App\Login;
use AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Redirect;
use Illuminate\Support\MessageBag;
use Input;
use Alert;


class userLoginController extends Controller
{



    public function login(Request $request){


    if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
    {
       
        $user= Auth::user();
        if($user != null){
			$id = $user->id;
			$query = DB::select("SELECT p.*, coalesce((
				select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
				as order_exist FROM  product p WHERE type = 'Combo' OR type = 'Lechon'");
		}else{
			$query = DB::select("SELECT * FROM product WHERE type = 'Combo' OR type = 'Lechon'");
		}
      	$value = [
			  "0" => $user,
			  "1" => $query,
      	];
       if($value[0]->utype=='User')

       {    

           return view('frontpage.front-page')->with('value', $value); 
       }
    //    return redirect('u-login')->with('success', 'Login Successfully!');
        return redirect()->route('u-login')->with('value', $value); 
    }else {

        Alert::error('Login Failed', 'Please Try Again!');       

        return Redirect::back()->withInput(Input::except('password'));
    

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
                
                Customer::create([
                    'customer_id' => $newUser->id,
                    'firstname'=> $user->name, 
                    
                ]);
                Address::create([
                    'customer_id' => $newUser->id,
                    'purok_zone' => 'Iligan City',
                  
                ]);
                Contact::create([
                    'customer_id' => $newUser->id,
                    'phone' => '09*********',
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

                    
            Customer::create([
                'customer_id' => $newUser->id,
                'firstname'=> $user->name, 
                
            ]);
            Address::create([
                'customer_id' => $newUser->id,
                'purok_zone' => $user->address,
              
            ]);
            Contact::create([
                'customer_id' => $newUser->id,
                'phone' => $user->phone,
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
