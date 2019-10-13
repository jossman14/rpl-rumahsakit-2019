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

Route::group(['middleware' => ['auth', 'checkRole:1']], function(){

	// Jabatan
	Route::get('/dataJabatan','MasterController@index_jabatan');
	Route::post('/dataJabatan/create','MasterController@create_jabatan');
	Route::get('/dataJabatan/edit/{id_jab}','MasterController@edit_jabatan');
	Route::post('/dataJabatan/update/{id_jab}','MasterController@update_jabatan');
	Route::get('/dataJabatan/delete/{id_jab}','MasterController@delete_jabatan');

	// Obat
	Route::get('/dataObat','MasterController@index_obat');
	Route::post('/dataObat/create','MasterController@create_obat');
	Route::get('/dataObat/edit/{id_obat}','MasterController@edit_obat');
	Route::post('/dataObat/update/{id_obat}','MasterController@update_obat');
	Route::get('/dataObat/delete/{id_obat}','MasterController@delete_obat');

});

Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4,5']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');

});

Auth::routes();
