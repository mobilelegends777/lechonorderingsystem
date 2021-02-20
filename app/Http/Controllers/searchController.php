<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AuthenticatesUsers;
use Session;
use App\User;
use Auth;
use App\Login;
use DB;



class searchController extends Controller
{

    
    public function searchData(Request $request) {

        $item = ucfirst($request['query']);
        $data = Auth::user();
		    $category = DB::select("SELECT * FROM category");
      		if($data != null){
      			$id = $data->id;
      			$query = DB::select("SELECT p.*, coalesce((
      				select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id),'0') 
      				as order_exist FROM  product p");
            $query2 = DB::select("SELECT p.*, coalesce((
      				select (select '1') from cart c where c.product_id = p.product_id and customer_id = $id limit 1),'0') 
      				as order_exist FROM  product p
                  WHERE p.name like '%".$item."%' ");
      		}else{
      			$query = DB::select("SELECT * FROM product");
            $query2 = DB::select("SELECT p.*, coalesce((
      				select (select '1') from cart c where c.product_id = p.product_id limit 1),'0') 
      				as order_exist FROM  product p
                  WHERE p.name like '%".$item."%' ");
      		}
      	$value = [
      			  "0" => $data,
      			  "1" => $query2,
		          "2" => $category,
              "3" => $query,
              "4" => $item
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

	        return view('frontpage/shop')->with('value',$value);

      	}
    }

    public function searchProduct(Request $request) {

        $item = ucfirst($request->item);
        // dd($query);
        if(strlen($item) == 1){
            $query = DB::select("SELECT * FROM product
         WHERE name like '".$item."%' ORDER BY name ASC");
        
        } else {
        $query = DB::select("SELECT * FROM product
         WHERE name like '%".$item."%' ORDER BY name ASC");
        

        }
        if(count($query) > 0) {
            return response()->json($query);
         }else {
             return false;
         }
        // dd($item);
        

    }


}



?>