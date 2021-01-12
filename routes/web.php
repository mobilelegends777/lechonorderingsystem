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

Route::post('/u-login', [ 'as' => 'u-login', 'uses' => 'userLoginController@do']);


Auth::routes();



Route::get('/', 'userLoginController@index');
Route::get('/adminpages/admindashboard', 'adminBoardController@index')->name('admindashboard');


Route::get('/frontpage/shop', 'shopController@index')->name('shop');
Route::get('/frontpage/appetizer', 'shopController@appetizerindex')->name('appetizer');
Route::get('/frontpage/newproduct', 'shopController@newproductindex')->name('newproduct');
Route::get('/frontpage/combomeal', 'shopController@combomealindex')->name('combomeal');
Route::get('/frontpage/dessert', 'shopController@dessertindex')->name('dessert');
Route::get('/frontpage/drinks', 'shopController@drinksindex')->name('drinks');





Route::get('/frontpage/contact', 'contactController@index')->name('contact');
Route::get('/frontpage/shop-details', 'shopdetailsController@index')->name('shop-details');
Route::get('/frontpage/cartpage', 'cartController@index')->name('cartpage');
Route::get('/userpage/myprofile', 'myprofileController@index')->name('myprofile');
Route::get('/userpage/myorder', 'myorderController@index')->name('myorder');


Route::post('/','userLoginController@login' )->name('test222');
// Route::post('/custom', [

// 'uses' => 'userLoginController@login',
// 'as' =>'login.custom'
// ]);

// Route::group(['middleware' => 'auth'], function(){

//     Route::get('/', function(){

//         return view('index');

//     })->name('index');

//     Route::get('/u-login', function(){

//         return view('auth/userLogin');

//     })->name('u-login');


// });