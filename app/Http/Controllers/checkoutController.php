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
use DateTime;
use Carbon\Carbon;
class checkoutController extends Controller
{
    //


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }



    public function index()
    {

        $data = Auth::user();
        $id = $data->id;
        $value = DB::select('SELECT * from users inner join customer_info ON customer_id= users.id
        inner join customer_address ON customer_address.customer_id = users.id
        inner join contact_info ON contact_info.customer_id = users.id where users.id = '.$id.'');
         $query = DB::select('SELECT * FROM cart
         INNER JOIN product ON product.product_id = cart.product_id
         WHERE customer_id = '.$data->id.' AND checkout =false');
         $raw =DB::selecT('SELECT SUM ( (quantity) * (price)) as total
         FROM cart INNER JOIN product ON product.product_id = cart.product_id
           WHERE customer_id = '.$data->id.' AND checkout =false');
             $value1 = [
                 
                '1' => $query,
                '2' =>$raw
            ];

           
        
        return view('frontpage/checkout', compact(['value','value1']));
        
    }


    function update(Request $request,$id)

    {
       //dd($request->all());
       $fname = $request->input("fname");
       $mname = $request->input("mname");
       $lname = $request->input("lname");
       $phone = $request->input("phone");
       $tel = $request->input("tel");
       $house = $request->input("house");
       $zone = $request->input("zone");
       $street = $request->input("street");
       $brngy = $request->input("brngy");
       $coordinate = $request->input("coordinate");
       $city = $request->input("city");
       $land = $request->input("land");
       $email = $request->input("email");

       DB::update('UPDATE customer_info SET
           middlename = \''.$mname.'\',
           firstname = \''.$fname.'\',
           lastname = \''.$lname.'\'
           WHERE customer_info.customer_id = '.$id.'
           ');
       DB::update('UPDATE customer_address SET
           house_number = \''.$house.'\',
           purok_zone=\''.$zone.'\',
           street =\''.$street.'\',
           barangay=\''.$brngy.'\',
           city=\''.$city.'\',
           coordinate=\''.$coordinate.'\',
           landmark=\''.$land.'\'
           WHERE customer_address.customer_id = '.$id.'
           ');
       DB::update('UPDATE contact_info SET
           phone = \''.$phone.'\'
           WHERE contact_info.customer_id = '.$id.'
       ');
       DB::update('UPDATE users SET email = \''.$email.'\'
           WHERE users.id = '.$id.'');
       
      
           Alert::success('Success', 'Record Updated');
           return back();

    }

        public function checkOutItem(){
            $userData = Auth::user();
            // dd($userData);
            $id = $userData->id;
            $query = DB::select('UPDATE cart SET checkout_date = current_timestamp WHERE customer_id = '.$id.'');
            // dd($query);
            return response()->json($query); 
        }

      public function placeorder(Request $request){

        // dd($request->all());
        $data = Auth::user();
        $userID = $data->id;
        $pm =  $request->input('payment1');
        $instruction =  $request->input('instruction');

        // dd($pm);
        $date = now()->timestamp;
        $cartData = DB::select('SELECT * FROM cart WHERE customer_id = '.$userID.'');
        $value = DB::select('SELECT * from users inner join customer_info ON customer_id= users.id
        inner join customer_address ON customer_address.customer_id = users.id
        inner join contact_info ON contact_info.customer_id = users.id where users.id = '.$userID.'');
            if($cartData > 0){
                foreach ($cartData as $items){
                  //dd($items);
                    DB::select('INSERT INTO order_inventory(product_id,qty,date_ordered,cart_id,customer_id,payment_method,instruction, order_status)
                      VALUES('.$items->product_id.', '.$items->quantity.', \''.$items->checkout_date.'\', '.$items->cart_id.', '.$items->customer_id.',\''.$pm.'\',\''.$instruction.'\','."'garnishing'".') ');

                }
                $upDate = DB::select('DELETE FROM cart WHERE customer_id = '.$userID.'');
            }     
       return view('frontpage/placedorder', compact('value'));
    }

}
        