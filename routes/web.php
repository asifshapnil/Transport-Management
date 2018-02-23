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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','AuthController@getSignin');
Route::post('/','AuthController@postSignin');
Route::get('/signup','AuthController@getSignup');
Route::post('/signup','AuthController@postSignup');
Route::get('/logout','AuthController@getLogout');


Route::get('/profile/{username}','RouteController@showall');

Route::get('/addBusToThisRoute/{route_id}','RouteController@addBus');
Route::post('/addBusToThisRoute/{route_id}','RouteController@postBus');


Route::get('/addbuses','BusController@addBuses');
Route::post('/addbuses','BusController@postBuses');
Route::get('/addbuses/success','BusController@showall');
Route::get('/editbus/{bus_id}','BusController@edit');
Route::post('/editbus/{bus_id}','BusController@updateBuses');
Route::get('/singlebus/{bus_num}','BusController@singleBus');
Route::get('/deletebus/{bus_id}','BusController@deleteBus');





Route::get('/addroutes','RouteController@addRoutes');
Route::post('/addroutes','RouteController@postRoutes');

Route::get('/routes/success','RouteController@showallroute');
Route::get('/userRequest/{username}/{bus_id}/{user_id}/{bus_num}','RequestController@storeRequest');
Route::get('/userRequest/{username}/{bus_id}/{user_id}/{bus_num}/cancel','RequestController@cancelRequest');

Route::get('/admin/requests','AdminController@requests');
Route::get('/see/accepts','AdminController@allaccepts');

Route::get('/accepts/user/{user_id}/{username}/{bus_id}/{bus_num}','AdminController@acceptsrequests');
Route::get('/delete/request/user/{username}/{bus_num}','AdminController@deleterequests');
Route::get('/delete/accepted/user/{username}/{bus_num}','AdminController@deleteuser');
Route::get('/addBill','BillController@getBill');
Route::post('/addBill','BillController@postBill');
Route::get('/checkBill','BillController@checkBill');
Route::post('/checkBill','BillController@findBill');
Route::get('/editBill/{bus_id}/{date}','BillController@editBill');
Route::post('/editBill/{id}','BillController@updateBill');
