<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Alert;

class myorderController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {


        $data = Auth::user();  
        $query = DB::select('SELECT name,images,price,product.product_id, max(pickup_datetime) as pickup_datetime FROM checkout_inventory INNER JOIN product ON product.product_id = checkout_inventory.product_id
        WHERE customer_id = '.$data->id.' AND order_status ='."'3'".' GROUP BY name, images, price, customer_id, product.product_id' );
        
        $query2 = DB::select('SELECT * FROM checkout_inventory
        INNER JOIN product ON product.product_id = checkout_inventory.product_id
        WHERE customer_id = '.$data->id.' AND order_status ='."'1'".'');

        $total=DB::select('SELECT SUM ( (qty) * (price)) as total
         FROM checkout_inventory INNER JOIN product ON product.product_id = checkout_inventory.product_id
           WHERE customer_id = '.$data->id.' AND order_status = '."'1'".'');
        $specOrder = DB::select("SELECT * FROM order_inventory INNER JOIN product ON product.product_id = order_inventory.product_id WHERE customer_id = ".$data->id." AND order_status = '".'1'."' ");


            $value = [
                '0' => $data,
                '1' => $query,
                '2' => $query2,
                '3' => $total
            ];
            

       
         // dd($value);

        return view('userpage/myorder', compact('value','data'))->with('order',$specOrder);
    }

     public function updateorder(){

             $data = Auth::user();
             $id = $data->id;
             DB::update('UPDATE checkout_inventory SET pickup_datetime = current_timestamp, delivered = current_timestamp, recieved = current_timestamp, order_status = '."'3'".' WHERE customer_id = '.$id.' AND order_status = '."'1'".'');
    

            Alert::success('Success', 'Order Received');
             return back();


    }

    public function specialOrder(Request $request){
        // dd($request->all());
        $userData = Auth::user();
        $userAdd = DB::select('SELECT * FROM customer_address WHERE customer_id = '.$userData->id.'');
        $prodData = DB::select('SELECT name, price, images FROM product WHERE product_id = '."$request->id".'');
        $check_trans = DB::select("SELECT * FROM order_inventory WHERE customer_id = ".$userData->id." ");

        // dd($prodData);
        $addresses = [
            '1' => [ 
                    '1' => $userAdd,
                    '2' => $prodData,
                    '3' => $check_trans
                ],
        ];
        // dd($addresses);
        return response()->json($addresses); 
    }

    public function orderProd(Request $req)
    {
        // dd($req->all());
        $userData = Auth::user();
        $dDate = $req->deliv_date;
        // dd($userData);
        DB::insert('INSERT INTO order_inventory(product_id,pref_weight,date_ordered,pickup_date,qty,order_type,order_status,delivery_address,customer_id)VALUES('.$req->prod_id.','.$req->pref_weight.',current_timestamp,\''.$dDate.'\','.$req->special_qty.',\''.$req->orderType.'\',1,\''.$req->myAddress.'\','.$userData->id.')');

        return back();

    }

}
