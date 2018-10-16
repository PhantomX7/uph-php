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
Route::get('/', function(){
    return view('blank');
});

Route::get('/buttons', function(){
    return view('buttons');
});
Route::get('/flot', function(){
    return view('flot');
});
Route::get('/forms', function(){
    return view('forms');
});
Route::get('/grid', function(){
    return view('grid');
});
Route::get('/icons', function(){
    return view('icons');
});
Route::get('/index', function(){
    return view('index');
});
Route::get('/morris', function(){
    return view('morris');
});
Route::get('/notifications', function(){
    return view('notifications');
});
Route::get('/panels-wells', function(){
    return view('panels-wells');
});
Route::get('/tables', function(){
    return view('tables');
});
Route::get('/typography', function(){
    return view('typography');
});
Route::get('/login', function(){
    return view('login');
});