<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::match(array('get','post'),'/',array('as'=>'login','uses'=>'userController@show_login_page'));
Route::match(array('get','post'),'/login',array('as'=>'login_processLogin','uses'=>'userController@process_login_page'));
?>
