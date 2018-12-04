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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','databaseController@load');

Route::get('/updatemasterproduk','databaseController@store');
Route::get('/updatemastertransaction','dbcontrollermastertransaction@store');
Route::get('/updatedetailtransaksi','dbcontrollerdetailtransaction@store');

Route::get('/showmasterproduct','databaseController@showmasterproduct');
Route::get('/showmastertransaction','dbcontrollermastertransaction@showmastertransaction');
Route::get('/showtransactiondetails','dbcontrollerdetailtransaction@showtransactiondetail');



