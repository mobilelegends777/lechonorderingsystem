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
        $query = DB::select("SELECT * FROM product WHERE type = 'Combo' OR type = 'Lechon'");
        $value = [
            '0' => $data,
            '1' => $query
        ];
        // dd($value);
        return view('frontpage.front-page')->with('value', $value);
    }
}
