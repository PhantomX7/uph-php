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
//
Route::get('/calculator', function () {
    return view('calculator');
});

Route::resource('/','HelloController');
Route::get('/access','SessionController@accessSessionData');
Route::get('/store','SessionController@storeSessionData');
Route::get('/delete','SessionController@deleteSessionData');
Route::get('/newgame','SessionController@newGame');
Route::get('/game','SessionController@game');
Route::post('/game','SessionController@postGame');

