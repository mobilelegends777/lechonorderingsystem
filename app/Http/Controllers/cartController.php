<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use DB;
class cartController extends Controller

{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        $data = Auth::user(); 
        $query = DB::select('SELECT * FROM cart
        INNER JOIN product ON product.product_id = cart.product_id
        WHERE customer_id = '.$data->id.'');
        $value = [
            '0' => $data,
            '1' => $query
        ];
        // dd($value[1]);
        return view('frontpage/cartpage', compact('value'));
        
    }
    public function addCart(Request $request){
        $carted = $request->carted;
        $data = Auth::user(); 
        // dd($data);
        $query = DB::insert('INSERT INTO cart (product_id,customer_id)values('.$carted.','.$data->id.')');
        return response()->json($query);
    }
    public function viewCart(){
        $data = Auth::user(); 
        $query = DB::select('SELECT * FROM cart
         INNER JOIN product ON product.product_id = cart.product_id
         WHERE customer_id = '.$data->id.'');
        
        return response()->json($query);
    }

    public function deleteItemCart(Request $request) {
        $data = Auth::user();
        $query = DB::select('DELETE FROM cart WHERE cart_id = '.$request->item_cart_id.' ');
        return $request->item_cart_id;
    }
    // public function updateCart(Request $request) {
    //     $data = Auth::user();
    //     $query = DB::select('UPDATE cart SET quantity = '.$request->qty.' WHERE cart_id = '.$request->cart-id.' ');
    // }
}
