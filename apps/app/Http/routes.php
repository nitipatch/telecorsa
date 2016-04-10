<?php
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::resource('/','Admins\TestController');

Route::get('login','Admins\TestController@loginForm');
Route::post('login/create','Admins\TestController@loginCreate');

Route::get('register','Admins\TestController@registerForm');
Route::post('register/create','Admins\TestController@registerCreate');

Route::get('logout','Admins\TestController@logout');

Route::get('account','Admins\TestController@account');

Route::get('connectus','Admins\TestController@connectus');
Route::get('contactus','Admins\TestController@contactus');

Route::post('changeAccountInfo','Admins\TestController@changeAccountInfo');

Route::get('news','Admins\TestController@news');
Route::get('video','Admins\TestController@video');