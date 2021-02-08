<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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


Auth::routes(['verify' => true]);



//User Login
// Route::get('/', 'userLoginController@index')->name('loginsuccess');

Route::get('/userpage/myprofile/', function (){

    return view('userpage/myprofile');

})->middleware('verified');


Route::get('/frontpage/checkout', function (){

    return view('frontpage/checkout');

})->middleware('verified');


Route::post('/','userLoginController@login' )->name('test222');


Route::get('/adminpages/admindashboard', 'adminBoardController@index')->name('admindashboard');


Route::get('/frontpage/shop', 'shopController@index')->name('shop');
Route::get('/frontpage/special-order', 'shopController@specialorder')->name('special');
Route::get('/frontpage/appetizer', 'shopController@appetizerindex')->name('appetizer');
Route::get('/frontpage/newproduct', 'shopController@newproductindex')->name('newproduct');
Route::get('/frontpage/combomeal', 'shopController@combomealindex')->name('combomeal');
Route::get('/frontpage/dessert', 'shopController@dessertindex')->name('dessert');
Route::get('/frontpage/drinks', 'shopController@drinksindex')->name('drinks');





Route::get('/frontpage/contact', 'contactController@index')->name('contact');
Route::get('/frontpage/shop-details', 'shopdetailsController@index')->name('shop-details');

Route::get('/frontpage/cartpage', 'cartController@index')->name('cartpage');


Route::get('/frontpage/checkout', 'checkoutController@index')->name('checkout');
Route::get('/userpage/checkout/{id}/success','myprofileController@update')->name('profupdated');
Route::get('/frontpage/checkout','checkoutController@viewCart');

Route::get('/','frontpageController@index');


//Profile
Route::get('/userpage/myprofile/', 'myprofileController@index')->name('myprofile');
// Route::get('/userpage/myprofile/{id}','myprofileController@show')->name('myprofile2');
Route::get('/userpage/myprofile/{id}/success','checkoutController@update')->name('profileupdated');





Route::get('/userpage/myorder', 'myorderController@index')->name('myorder');


//Google Login
Route::get('login/google', 'userLoginController@redirectToProvider');
Route::get('login/google/callback', 'userLoginController@handleProviderCallback');


//Facebook Login

Route::get('login/facebook', 'userLoginController@redirectToFacebook');
Route::get('login/facebook/callback', 'userLoginController@handleFacebookCallback');


Route::get('/frontpage/special-order','lechonController@index');

Route::post('/user-photo','myprofileController@uploadImage')->name('user-update-photo');

Route::post('/filter-foods','shopController@filterProd');
Route::post('/filter-price','shopController@filterPrice');

Route::post('/add-to-cart-item','cartController@addCart');
Route::post('/view-carted','cartController@viewCart');

Route::post('/delete-items-cart','cartController@deleteItemCart');
Route::post('/update-cart-items','cartController@updateCart')->name('cart-update');

Route::post('/display-error','userLoginController@login');
