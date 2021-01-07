<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin-login', function(){

        return view('adminpages/adminLogin');

});



//Start of user login
Route::get('/u-login', function(){

    return view('auth/userLogin');

});

Route::post('u-login', [ 'as' => 'u-login', 'uses' => 'LoginController@do']); //user login alias
//End of user login


 Route::get('/', function () {
   return view('index'); 
});



Auth::routes();



// Route::get('/', 'userLoginController@login');
Route::get('/adminpages/admindashboard', 'adminBoardController@index')->name('admindashboard');
Route::get('/frontpage/shop', 'shopController@index')->name('shop');
Route::get('/frontpage/contact', 'contactController@index')->name('contact');
Route::get('/frontpage/shop-details', 'shopdetailsController@index')->name('shop-details');
Route::get('/frontpage/cartpage', 'cartController@index')->name('cartpage');
Route::get('/frontpage/myprofile', 'myprofileController@index')->name('myprofile');

Route::post('/custom', [

'uses' => 'userLoginController@login',
'as' =>'login.custom'


]);

// Route::group(['middleware' => 'auth'], function(){

//     Route::get('/', function(){

//         return view('index');

//     })->name('index');

//     Route::get('/u-login', function(){

//         return view('auth/userLogin');

//     })->name('u-login');


// });