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

Route::get('/', 'TaskController@index');

Route::get('task/new', function(){
	return view('new_task');
});

Route::post('task/create', 'TaskController@create');

Route::get('task/delete/{id}', 'TaskController@delete');

Route::post('task/upgrade/{id}', 'TaskController@upgrade');
