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


Route::get('/u-login', function(){

    return view('auth/userLogin');

});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminpages/admindashboard', 'adminBoardController@index')->name('admindashboard');
Route::get('/frontpage/shop', 'shopController@index')->name('shop');
Route::get('/frontpage/contact', 'contactController@index')->name('contact');
Route::get('/frontpage/shop-details', 'shopdetailsController@index')->name('shop-details');
