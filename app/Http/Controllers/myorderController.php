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
        $query = DB::select('SELECT * FROM order_inventory
        INNER JOIN product ON product.product_id = order_inventory.product_id
        WHERE customer_id = '.$data->id.' AND order_status ='."'completed'".' ORDER BY date_ordered DESC LIMIT 10');

         $query2 = DB::select('SELECT * FROM order_inventory
          INNER JOIN product ON product.product_id = order_inventory.product_id
          WHERE customer_id = '.$data->id.'  ORDER BY date_ordered DESC LIMIT 10');
  

            $value = [
                '0' => $data,
                '1' => $query,
                '2' => $query2
            ];
            
            
        return view('userpage/myorder', compact('value','data'));
    }

    // public function updateorder(Request $request){

    //     $data = Auth::user();
    //         $id = $data->id;

    //         $raw = DB::update('UPDATE order_inventory SET pickup_datetime = current_timestamp, order_status = '."'completed'".' WHERE customer_id = '.$id.'');
    //         $query = DB::select('SELECT * FROM order_inventory
    //     INNER JOIN product ON product.product_id = order_inventory.product_id
    //     WHERE customer_id = '.$data->id.' AND order_status ='."'completed'".' ORDER BY date_ordered DESC LIMIT 10');

    //      $query2 = DB::select('SELECT * FROM order_inventory
    //       INNER JOIN product ON product.product_id = order_inventory.product_id
    //       WHERE customer_id = '.$data->id.'  ORDER BY date_ordered DESC LIMIT 10');
  

    //         $value = [
    //             '0' => $data,
    //             '1' => $query,
    //             '2' => $query2
    //         ];
            

    //         Alert::success('Success', 'Order Received');
    //         return view('userpage/myorder', compact('value','data'));


    // }




}
