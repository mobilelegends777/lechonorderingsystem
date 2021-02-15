<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
use App\Login;
use AuthenticatesUsers;
use DB;
use Alert;
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
        $query = DB::select('SELECT *,quantity * price as total FROM cart 
        INNER JOIN product using (product_id)
        WHERE customer_id = '.$data->id.' AND checkout = false');
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
        $query = DB::insert('INSERT INTO cart (product_id,customer_id,checkout)values('.$carted.','.$data->id.',false)');
        
        return response()->json($query);
    }
    public function viewCart(){
        $data = Auth::user(); 
        $query = DB::select('SELECT *,quantity * price as total FROM cart 
        INNER JOIN product using (product_id)
        WHERE customer_id = '.$data->id.' AND checkout = false');
       
        return response()->json($query);
    }

    public function deleteItemCart(Request $request) {
        $data = Auth::user();
        $query = DB::select('DELETE FROM cart WHERE cart_id = '.$request->item_cart_id.' AND customer_id = '.$data->id.' ');
        return $request->item_cart_id;
    }
    public function updateCartSideNav(Request $request){
        $data = Auth::user();
        $userID = $data->id;
        // dd($request->all());
        $id = $request->id;
        $qty = $request->qty;
        if($id > 0){
            $len = count($id);
            for($x = 0;$x < $len;$x++){
                $query = DB::select('UPDATE cart SET quantity = '.$qty[$x].', checkout_date = current_timestamp WHERE cart_id = '.$id[$x].' AND customer_id = '.$userID.' ');
            }
        }
        $sumQry = DB::select('SELECT sum(quantity * price) as total FROM cart 
                    INNER JOIN product using (product_id)
                    WHERE customer_id = '.$userID.'');
        $msg = "Update Successful!!!";

        $values = [
            '1' => $sumQry,
            '2' => $msg
        ];
        return response()->json($values); 
    }
    public function updateCart(Request $request) {
        // dd($request->all());
        $data = Auth::user();
        $userID = $data->id;
        $qty =  $request->qty;
        $cartID = $request->cartID;
        if($cartID > 0){
            $len = count($cartID);
            for($i = 0;$i<$len;$i++){
                $query = DB::select('UPDATE cart SET quantity = '.$qty[$i].', checkout_date = current_timestamp WHERE cart_id = '.$cartID[$i].' AND customer_id = '.$userID.' ');
            }
        }
        return redirect()->back();
    }
    
    
}
