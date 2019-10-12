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
	return view('login.login');
});

Route::get('/login', function () {
	return view('login.login');
});

// Route::get('/admin_1', function () {
// 	return view('admin_1.layouts.master');
// });

// Route::group(['middleware' => ['auth', 'checkRole:1']], function(){

// });

// Route::get('/dashboard','DashboardController@index');

Route::group(['middleware' => ['auth', 'checkRole:1,2']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');

});

Auth::routes();
