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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::any('admin/login', 'Admin\LoginController@login');
Route::get('admin/code', 'Admin\LoginController@code');
Route::get('password', 'PasswordController@index');
Route::group(['middleware'=>['web', 'admin.login'], 'prefix'=>'admin', 'namespace'=>'Admin'],function() {
	Route::get('/', function() {
         return view('welcome'); 
	});
	Route::get('index','IndexController@index');
	
	
	Route::get('info', 'IndexController@info');
	Route::get('logout', 'LoginController@logout');
	Route::any('resetpass','LoginController@resetpass');
	Route::resource('category','CategoryController');
});