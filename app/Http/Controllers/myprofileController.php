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
        $value = DB::select('SELECT * from users inner join customer_info ON customer_id = users.id 
        inner join customer_address ON customer_address.customer_id = users.id 
        inner join contact_info ON contact_info.customer_id = users.id where users.id = '.$id.'');
        
            return view('userpage/myprofile', compact('value'));
    }




    function update(Request $request,$id)

     {
        //dd($request->all());
        $fname = $request->input("fname");
        $mname = $request->input("mname");
        $lname = $request->input("lname");
        $phone = $request->input("phone");
        $tel = $request->input("tel");
        $house = $request->input("house");
        $zone = $request->input("zone");
        $street = $request->input("street");
        $brngy = $request->input("brngy");
        $coordinate = $request->input("coordinate");
        $city = $request->input("city");
        $land = $request->input("land");
        $email = $request->input("email");

        DB::update('UPDATE customer_info SET
            middlename = \''.$mname.'\',
            firstname = \''.$fname.'\',
            lastname = \''.$lname.'\'
            WHERE customer_info.customer_id = '.$id.'
            ');
        DB::update('UPDATE customer_address SET
            house_number = \''.$house.'\',
            purok_zone=\''.$zone.'\',
            street =\''.$street.'\',
            barangay=\''.$brngy.'\',
            city=\''.$city.'\',
            coordinate=\''.$coordinate.'\',
            landmark=\''.$land.'\'
            WHERE customer_address.customer_id = '.$id.'
            ');
        DB::update('UPDATE contact_info SET
            phone = \''.$phone.'\'
            WHERE contact_info.customer_id = '.$id.'
        ');
        DB::update('UPDATE users SET email = \''.$email.'\'
            WHERE users.id = '.$id.'');
        
        
       
        echo "<script>alert('Record Updated Successfully');
        
        window.location.href='/userpage/myprofile';
        </script>";
        
    }



}


