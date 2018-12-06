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

Route::get('/blank', function () {
    return view('blank');
});
Route::get('/buttons', function () {
    return view('buttons');
});
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/flot', function () {
    return view('flot');
});
Route::get('/forms', function () {
    return view('forms');
});
Route::get('/grids', function () {
    return view('grids');
});
Route::get('/icons', function () {
    return view('icons');
});
Route::get('/morris', function () {
    return view('morris');
});
Route::get('/notifications', function () {
    return view('notifications');
});
Route::get('/panels', function () {
    return view('panels');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/tables', function () {
    return view('tables');
});
Route::get('/typography', function () {
    return view('typography');
});
Route::resource('/menu', 'MenuController');
Route::get('/masteremployee', [
    'uses'=> 'MasterEmployeeController@index',
    'as'=>'master.employee'
]);
Route::get('/masteremployee/create', [
    'uses'=> 'MasterEmployeeController@create',
    'as'=>'master.employee.create'
]);
Route::post('/masteremployee/store', [
    'uses'=> 'MasterEmployeeController@store',
    'as'=>'master.employee.store'
]);
Route::get('/masteremployee-edit/{id}', [
    'uses'=> 'MasterEmployeeController@edit',
    'as'=>'master.employee.edit'
]);
Route::post('/masteremployee-update/{id}', [
    'uses'=> 'MasterEmployeeController@update',
    'as'=>'master.employee.update'
]);
Route::get('/masteremployee-delete/{id}', [
    'uses'=> 'MasterEmployeeController@destroy',
    'as'=>'master.employee.delete'
]);
Route::get('/mastersalary', [
    'uses'=> 'MasterSalaryController@index',
    'as'=>'master.salary'
]);
Route::get('/mastersalary/create', [
    'uses'=> 'MasterSalaryController@create',
    'as'=>'master.salary.create'
]);
Route::post('/mastersalary/store', [
    'uses'=> 'MasterSalaryController@store',
    'as'=>'master.salary.store'
]);
Route::get('/mastersalary-edit/{id}', [
    'uses'=> 'MasterSalaryController@edit',
    'as'=>'master.salary.edit'
]);
Route::post('/mastersalary-update/{id}', [
    'uses'=> 'MasterSalaryController@update',
    'as'=>'master.salary.update'
]);
Route::get('/mastersalary-delete/{id}', [
    'uses'=> 'MasterSalaryController@destroy',
    'as'=>'master.salary.delete'
]);
Route::get('/history', [
    'uses'=> 'HistoryController@index',
    'as'=>'history'
]);
Route::get('/history/create', [
    'uses'=> 'HistoryController@create',
    'as'=>'history.create'
]);
Route::post('/history/store', [
    'uses'=> 'HistoryController@store',
    'as'=>'history.store'
]);
Route::get('/history-edit/{id}', [
    'uses'=> 'HistoryController@edit',
    'as'=>'history.edit'
]);
Route::post('/history-update/{id}', [
    'uses'=> 'HistoryController@update',
    'as'=>'history.update'
]);
Route::get('/history-delete/{id}', [
    'uses'=> 'HistoryController@destroy',
    'as'=>'history.delete'
]);
Route::get('/formtable', [
    'uses'=> 'MenuController@index',
    'as'=>'add.menu'
]);