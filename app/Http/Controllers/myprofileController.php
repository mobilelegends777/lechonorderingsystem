<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Session;
use App\Login;
use DB;
use App\Http\Controllers\Controller;
use AuthenticatesUsers;

class myprofileController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        
        $data = Auth::user();
        $id = $data->id;
        $value = DB::select('SELECT * from users inner join customer_info ON customer_id= "'.$id.'"
        inner join customer_address ON customer_address.customer_id ="'.$id.'"
        inner join contact_info ON contact_info.customer_id ="'.$id.'"where id = ?',[$id]);
        
            return view('userpage/myprofile', compact('value'));
    }




    function update(Request $request,$id)

     {
        //dd($request->all());
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $phone = $request->input('phone');
        $tel = $request->input('tel');
        $house = $request->input('house');
        $zone = $request->input('zone');
        $street = $request->input('street');
        $brngy = $request->input('brngy');
        $coordinate = $request->input('coordinate');
        $city = $request->input('city');
        $land = $request->input('land');
        $email = $request->input('email');

        DB::update('UPDATE users, customer_info, customer_address, contact_info SET customer_info.lastname = "'.$lname.'",
        customer_info.middlename ="'.$mname.'",
        customer_info.firstname ="'.$fname.'",
          customer_address.customer_id="'.$id.'",
          customer_address.house_number="'.$house.'",
          customer_address.purok_zone="'.$zone.'",
          customer_address.street ="'.$street.'",
          customer_address.barangay="'.$brngy.'",
          customer_address.city="'.$city.'",
          customer_address.coordinate="'.$coordinate.'",
          customer_address.landmark="'.$land.'",
          contact_info.customer_id="'.$id.'",
          contact_info.phone="'.$phone.'",
            users.email = "'.$email.'"
      WHERE users.id = customer_info.customer_id AND users.id = customer_address.customer_id AND users.id=contact_info.customer_id
      AND customer_info.customer_id = "'.$id.'" AND customer_info.customer_id ="'.$id.'" AND customer_address.customer_id= "'.$id.'" AND contact_info.contact_id ="'.$id.'"
      
      
      ');

      
        
        
        
       
        echo "<script>alert('Record Updated Successfully');
        
        window.location.href='/userpage/myprofile';
        </script>";
        
    }



}


