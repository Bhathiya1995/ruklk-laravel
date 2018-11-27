<?php

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

Route::get('/', 'PageController@index');

Route::resource('user','UserController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('product','ProductController');

Route::get('/products/searchproduct', 'ProductController@searchproducts');
Route::get('/products/searchproduct/{id}', 'ProductController@showproduct');



Route::get('/admin/{id}', 'AdminController@viewadminpage');
Route::get('/admin/{id}/approve', 'AdminController@approve');
Route::get('/admin/{id}/approveproduct/{productid}', 'AdminController@approveproduct');
Route::get('/admin/{id}/rejectproduct/{productid}', 'AdminController@rejectproduct');
Route::get('/admin/{id}/approveads', 'AdminController@approveads');
Route::get('/admin/{id}/approvedadvertisment/{adid}', 'AdminController@approvedadvertisment');
Route::get('/admin/{id}/rejectadvertisment/{adid}', 'AdminController@rejectadvertisment');

Route::get('/ads', 'AdvertismentController@index');
Route::post('/ads/adAds', 'AdvertismentController@store');

Route::get('/event', 'EventController@index');
Route::post('/event/addEvent', 'EventController@store');


Route::get('/organization/{id}', 'OrganizationController@vieworganizationpage');

Route::get('/chat', function (){
    return view('chat.chat');
});

Route::get('/conversation/{id}', 'MessageController@getMessageFor');
Route::post('/conversation/send', 'MessageController@send');
