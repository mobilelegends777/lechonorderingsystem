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

    
    public function index()
    {
       
        $data = Auth::user(); 
        $value = [
            '0' => $data
        ];
        //$data = User::find('$value["userid"]');
        // dd($value);
        return view('userpage/myprofile', compact('value'));
       
    }


    public function show($id){

       //$data=Login::all();
        $value = Session::get('user'); 
        $users = DB::select('SELECT * from users where id = ?',[$id]);
        $data = Session::put('user', $users);
        $value = Session::get('user'); 
        return view('userpage/myprofile',['users'=>$users])->with(compact('value'));


        
    }


    function update(Request $request,$id)

     {
        //dd($request->all());
        $full_name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $address1 = $request->input('address1');
        $house = $request->input('house');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $land = $request->input('land');
        $email = $request->input('email');

        DB::update('update users set name = ?,phone=?,address=?,address1=?,house_no=?,city=?,zip_code=?,land_mark=?,email=? where id = ?',[$full_name,$phone,$address,$address1,$house,$city,$zip,$land,$email,$id]);
       
       
        
       
        echo "<script>alert('Record Updated Successfully');
        
        window.location.href='/userpage/myprofile/$id';
        </script>";
        
    }



}


