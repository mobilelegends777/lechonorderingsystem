<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Address;
use App\Customer;
use App\Contact;
use Auth;
use Session;
use Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
{
    // if (auth()->user()->role_id == 1) {

    //     return '/u-login';
    // }
    return Request::session()->get('url.intended') ?? '/';
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'utype' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
            Session::put('user', $data);
     $newUser = User::create([
        
            'utype' => $data['utype'],  
            'name' => $data['name'], 
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
     ]);
    Customer::create([
        'customer_id' => $newUser->id,
        'firstname' => $data['name'],
        'lastname' => $data['lastname'],
    ]);
    Address::create([
        'customer_id' => $newUser->id,
        'purok_zone' => $data['purok'],
      
    ]);
    Contact::create([
        'customer_id' => $newUser->id,
        'phone' => $data['contact'],
    ]);
        
    return $newUser;
            
    }
}
