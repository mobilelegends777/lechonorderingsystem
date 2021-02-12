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
        WHERE customer_id = '.$data->id.'');

            $value = [
                '0' => $data,
                '1' => $query
            ];
            
        // dd($query);
        return view('userpage/myorder', compact('value','data'));
    }




}
