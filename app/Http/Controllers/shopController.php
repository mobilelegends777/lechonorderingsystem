<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use Session;
use App\User;
use Auth;
use App\Login;
use DB;


class shopController extends Controller
{
    public function index()
    {
        // $data = Session::get('user');
		$data = Auth::user();
		$category = DB::select("SELECT * FROM category");
		// dd($data->id);
		if($data != null){
			$id = $data->id;
			$query = DB::select("SELECT p.*, coalesce((
				select (select '1') from cart c where c.product_id = p.product_id and checkout = false and customer_id = $id),'0') 
				as order_exist FROM  product p");
		}else{
			$query = DB::select("SELECT * FROM product");
		}
      	$value = [
			  "0" => $data,
			  "1" => $query,
			  "2" => $category
      	];
      	if($value == null)
      	{
      		$value = [
				  "utype" => "notLogin"
      		];

  			return view('frontpage/shop')->with('value',$value);
      	}
      	else 
      	{
				//   $value = Session::get('user');
				// return response()->json($value);
				// dd($value[1][0]->order_exist);
				// dd($value);
	        	return view('frontpage/shop')->with('value',$value);

      	}
       
	 }
	public function filterProd(Request $request)
	{
		$user = Auth::user();
		// dd($user);
		$category = $request->category;
		if($user != null){
			$id = $user->id;
			if($category == 9){
				$query = DB::select("SELECT p.*, coalesce((
					select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
					as order_exist FROM  product p WHERE category_type != 8");
			}else {
				$query = DB::select("SELECT p.*, coalesce((
					select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
					as order_exist FROM  product p WHERE category_type = ".$category."");
			}
		}else{
			if($category == 9){
				$query = DB::select('SELECT * FROM product WHERE category_type != 8');
			}else {
				$query = DB::select('SELECT * FROM product WHERE category_type = '.$category.'');
			}
		}
		// $data = [
		// 	'data' => $query
		// ];
		// dd($query);
		return response()->json($query);
	}
	public function filterPrice(Request $request)
	{	
		$user = Auth::user();
		$min = $request->min;
		$max = $request->max;
		if($user != null){
			$id = $user->id;
			$query = DB::select("SELECT p.*, coalesce((
				select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
				as order_exist FROM  product p WHERE price BETWEEN $min AND $max");
		}else{
			$query = DB::select('SELECT * FROM product WHERE price BETWEEN '.$min.' AND '.$max.'');
		}
		// $data = [
		// 	'data' => $query
		// ];
		// dd($query);
		return response()->json($query);
	}
	public function sortItems(Request $request){
		// dd($request->all());
		$sort = $request->sort;
		$user = Auth::user();
		// dd($user);
		if($user != null){
			$id = $user->id;
				$query = DB::select("SELECT p.*, coalesce((
					select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
					as order_exist FROM  product p  ORDER BY p.price $sort");
		}else{
			
				$query = DB::select("SELECT * FROM product  ORDER BY price $sort");
		}
		return response()->json($query);
	}
	
	 
}
