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
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::post('/register', [
    'uses'=> 'AuthController@register',
    'as'=>'register.create'
]);
Route::post('/login', [
    'uses'=> 'AuthController@login',
    'as'=>'login'
]);
Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@admin',
        'as'=>'admin'
    ]);
    Route::get('/makeadmin/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@make_admin',
        'as'=>'make.admin'
    ]);
    Route::get('/not_admin/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@not_admin',
        'as'=>'not.admin'
    ]);
    Route::get('/masterproduct',[
        'middleware'=>'masterproduct',
        'uses'=> 'AuthController@masterproduct',
        'as'=>'masterproduct'
    ]);
    Route::get('/makemp/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@make_mp',
        'as'=>'make.mp'
    ]);
    Route::get('/not_mp/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@not_mp',
        'as'=>'not.mp'
    ]);
    Route::get('/mastertransaction',[
        'middleware'=>'mastertransaction',
        'uses'=> 'AuthController@mastertransaction',
        'as'=>'mastertransaction'
    ]);
    Route::get('/makemt/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@make_mt',
        'as'=>'make.mt'
    ]);
    Route::get('/not_mt/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@not_mt',
        'as'=>'not.mt'
    ]);
    Route::get('/transactiondetail',[
        'middleware'=>'transactiondetail',
        'uses'=> 'AuthController@transactiondetail',
        'as'=>'transactiondetail'
    ]);
    Route::get('/maketd/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@make_td',
        'as'=>'make.td'
    ]);
    Route::get('/not_td/{id}',[
        'middleware'=>'admin',
        'uses'=> 'AuthController@not_td',
        'as'=>'not.td'
    ]);
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


// Route::get('/login', [
//     'uses'=> 'FrontEndController@search',
//     'as'=>'results'
// ]);