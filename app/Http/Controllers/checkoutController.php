<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use DB;

class checkoutController extends Controller
{
    //


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $data = Auth::user();
        $id = $data->id;
        $value = DB::select('SELECT * from users inner join customer_info ON customer_id= "'.$id.'"
        inner join customer_address ON address_id ="'.$id.'"
        inner join contact_info ON contact_id ="'.$id.'"where id = ?',[$id]);
        // dd($value);
        return view('frontpage/checkout', compact('value'));
        
    }


}
