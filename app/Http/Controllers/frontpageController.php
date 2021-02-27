<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use App\Login;
use AuthenticatesUsers;

class frontpageController extends Controller
{
    public function index() {
        $data = Auth::user();
        // $query = DB::select("SELECT * FROM product WHERE type = 'Combo' OR type = 'Lechon'");
        if($data != null){
			$id = $data->id;
			$query = DB::select("SELECT p.*, coalesce((
				select (select '1') from cart c where c.product_id = p.product_id and checkout = false  and customer_id = $id),'0') 
				as order_exist FROM  product p where type = 'cart' limit 6");
		}else{
			$query = DB::select("SELECT * FROM product WHERE type = 'cart'  limit 6");
		}
      	$value = [
			  "0" => $data,
			  "1" => $query,
      	];
        // dd(session()->token());
        return view('frontpage/front-page')->with('value', $value);
    }
}
