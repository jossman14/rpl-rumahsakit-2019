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

	// User
	Route::get('/dataPegawai','PegawaiController@index_pegawai');
	Route::post('/dataPegawai/create','PegawaiController@create_pegawai');
	Route::get('/dataPegawai/edit/{id_pegawai}','PegawaiController@edit_pegawai');
	Route::post('/dataPegawai/update/{id_pegawai}','PegawaiController@update_pegawai');
	Route::get('/dataPegawai/delete/{id_pegawai}','PegawaiController@delete_pegawai');

	// Dokter
	Route::get('/dataDokter','PegawaiController@index_dokter');
	Route::post('/dataDokter/create','PegawaiController@create_dokter');
	Route::get('/dataDokter/edit/{id_pegawai}','PegawaiController@edit_dokter');
	Route::post('/dataDokter/update/{id_pegawai}','PegawaiController@update_dokter');
	Route::get('/dataDokter/delete/{id_pegawai}','PegawaiController@delete_dokter');

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

	// Pasien
	Route::get('/dataPasien','MasterController@index_pasien');
	Route::post('/dataPasien/create','MasterController@create_pasien');
	Route::get('/dataPasien/edit/{id_pasien}','MasterController@edit_pasien');
	Route::post('/dataPasien/update/{id_pasien}','MasterController@update_pasien');
	Route::get('/dataPasien/delete/{id_pasien}','MasterController@delete_pasien');

	// Poli
	Route::get('/dataPoli','MasterController@index_poli');
	Route::post('/dataPoli/create','MasterController@create_poli');
	Route::get('/dataPoli/edit/{id_poli}','MasterController@edit_poli');
	Route::post('/dataPoli/update/{id_poli}','MasterController@update_poli');
	Route::get('/dataPoli/delete/{id_poli}','MasterController@delete_poli');

});

Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4,5']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');

});

Auth::routes();
