<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use DB;

class lechonController extends Controller
{
	public function index()
    {

        $data = Auth::user(); 
        if($data != null){
            $id = $data->id;
            $userInfo = DB::select('SELECT * FROM customer_info  ci
                        INNER JOIN customer_address ca ON ca.customer_id = ci.customer_id
                        WHERE ci.customer_id = '.$id.' ');
        }else{
            $userInfo = "Not Logged In";
        }
        // dd($userInfo);
        $product = DB::select('SELECT * FROM product WHERE category_type = 10');
        $value = [
            '0' => $data,
            '1' => $userInfo
        ];
        // dd($product);
        if($value[0] == null){
            $value = [
                '0' => 'Input Address',
                'usertype' => 'notLogin'
            ];
            return view('frontpage/special-order', compact('value'))->with('product',$product);
        }
        else{

        return view('frontpage/special-order', compact('value'))->with('product',$product);

        }   

    }
}
