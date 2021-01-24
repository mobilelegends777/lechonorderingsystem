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
        inner join customer_address ON address_id ="'.$id.'"
        inner join contact_info ON contact_id ="'.$id.'"where id = ?',[$id]);

        //dd($id);
        return view('userpage/myprofile', compact('value'));
       
    }


    // public function show($id){

    //    //$data=Login::all();
    //     $value = Session::get('user'); 
    //     $users = DB::select('SELECT * from users inner join customer_info ON customer_id
    //     inner join customer_address ON address_id
    //     inner join contact_info ON contact_id where id = ?',[$id]);
    //      $value1 = [
    //         '0' => $users
    //     ];
    //     $data = Session::put('user', $value1);
        
    //     $value = Session::get('user'); 
    //     return view('userpage/myprofile',['users'=>$users])->with(compact('value'));


        
    // }


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

        DB::update('update users,customer_info,customer_address,contact_info set name = ?,phone=?,address=?,address1=?,house_no=?,city=?,zip_code=?,land_mark=?,email=? where id = ?',[$full_name,$phone,$address,$address1,$house,$city,$zip,$land,$email,$id]);
       
       
        
       
        echo "<script>alert('Record Updated Successfully');
        
        window.location.href='/userpage/myprofile';
        </script>";
        
    }



}


