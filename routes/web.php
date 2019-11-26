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

	// Jadwal Dokter
	Route::get('/dataJadwalDokter','PegawaiController@index_jadwal_dokter');
	Route::post('/dataJadwalDokter/create','PegawaiController@create_jadwal_dokter');
	Route::get('/dataJadwalDokter/edit/{id_pegawai}','PegawaiController@edit_jadwal_dokter');
	Route::post('/dataJadwalDokter/update/{id_pegawai}','PegawaiController@update_jadwal_dokter');
	Route::get('/dataJadwalDokter/delete/{id_pegawai}','PegawaiController@delete_jadwal_dokter');

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

	// Kamar
	Route::get('/dataKamar','MasterController@index_kamar');
	Route::post('/dataKamar/create','MasterController@create_kamar');
	Route::get('/dataKamar/edit/{id_kamar}','MasterController@edit_kamar');
	Route::post('/dataKamar/update/{id_kamar}','MasterController@update_kamar');
	Route::get('/dataKamar/delete/{id_kamar}','MasterController@delete_kamar');

	// Poli
	Route::get('/dataPoli','MasterController@index_poli');
	Route::post('/dataPoli/create','MasterController@create_poli');
	Route::get('/dataPoli/edit/{id_poli}','MasterController@edit_poli');
	Route::post('/dataPoli/update/{id_poli}','MasterController@update_poli');
	Route::get('/dataPoli/delete/{id_poli}','MasterController@delete_poli');

});

Route::group(['middleware' => ['auth', 'checkRole:2']], function(){

	// Pemeriksaan
	Route::get('/pemeriksaanPasien','DokterController@index_pemeriksaan');
	Route::post('/pemeriksaanPasien/create','DokterController@create_pemeriksaan');
	Route::get('/pemeriksaanPasien/pemeriksaan/{id_pemeriksaan}','DokterController@buat_pemeriksaan');
	Route::get('/pemeriksaanPasien/editPemeriksaan/{id_pemeriksaan}','DokterController@ubah_pemeriksaan');
	Route::get('/pemeriksaanPasien/rujukan/{id_pemeriksaan}','DokterController@buat_rujukan');
	Route::post('/pemeriksaanPasien/update/{id_pemeriksaan}','DokterController@update_pemeriksaan');
	Route::get('/pemeriksaanPasien/delete/{id_pemeriksaan}','DokterController@delete_pemeriksaan');
	// Route::post('/pemeriksaanPasien/update/{id_pemeriksaan}','DokterController@update_pemeriksaan');
	// Route::get('/pemeriksaanPasien/delete/{id_pemeriksaan}','DokterController@delete_pemeriksaan');

	// Pemeriksaan Penunjang
	Route::get('/pemeriksaanPenunjang','DokterController@index_pemeriksaan_penunjang');
	Route::post('/pemeriksaanPenunjang/create','DokterController@create_pemeriksaan_penunjang');
	Route::get('/pemeriksaanPenunjang/edit/{id_pemeriksaan}','DokterController@edit_pemeriksaan_penunjang');
	// Route::post('/pemeriksaanPenunjang/update/{id_pemeriksaan}','DokterController@update_pemeriksaan_penunjang');
	// Route::get('/pemeriksaanPenunjang/delete/{id_pemeriksaan}','DokterController@delete_pemeriksaan_penunjang');

});

Route::group(['middleware' => ['auth', 'checkRole:6']], function(){

	// Pasien
	Route::get('/RegistrasiPasien','PetugasPendaftaranController@index_pasien');
	Route::get('/RegistrasiPasienLama','PetugasPendaftaranController@index_pasien_lama');
	Route::post('/RegistrasiPasien/create','PetugasPendaftaranController@create_pasien');
	Route::post('/RegistrasiPasienLama/create','PetugasPendaftaranController@create_pasien_lama');
	Route::get('/RegistrasiPasien/edit/{id_pasien}','PetugasPendaftaranController@edit_pasien');
	Route::post('/RegistrasiPasien/update/{id_pasien}','PetugasPendaftaranController@update_pasien');
	Route::get('/RegistrasiPasien/delete/{id_pasien}','PetugasPendaftaranController@delete_pasien');

	// Jadwal Dokter
	Route::get('/JadwalDokter','PetugasPendaftaranController@index_jadwal_dokter');
	Route::get('/JadwalDokter/view','PetugasPendaftaranController@view_jadwal_dokter');

});

Route::group(['middleware' => ['auth', 'checkRole:7']], function(){

	// Informasi Rawat Inap
	Route::get('/perawatanRawatInap','PetugasPerawatanController@index_rawat');
	Route::post('/perawatanRawatInap/create','PetugasPerawatanController@create_rawat');
	Route::get('/perawatanRawatInap/edit/{id_rawat_inap}','PetugasPerawatanController@edit_rawat');
	Route::post('/perawatanRawatInap/update/{id_rawat_inap}','PetugasPerawatanController@update_rawat');
	Route::get('/perawatanRawatInap/delete/{id_rawat_inap}','PetugasPerawatanController@delete_rawat');

	// Data Rawat Inap
	Route::get('/dataRawatInap','PetugasPerawatanController@index_rawat_inap');
	Route::post('/dataRawatInap/create','PetugasPerawatanController@create_rawat_inap');
	Route::get('/dataRawatInap/edit/{id_rawat_inap}','PetugasPerawatanController@edit_rawat_inap');
	Route::post('/dataRawatInap/update/{id_rawat_inap}','PetugasPerawatanController@update_rawat_inap');
	Route::get('/dataRawatInap/perawatanSelesai/{id_rawat_inap}/{id_ruang}','PetugasPerawatanController@delete_rawat_inap');
	Route::get('/dataRawatInap/monitoringPasien/{id_rekam_medis}','PetugasPerawatanController@monitoring_rawat_inap');
	Route::get('/dataRawatInap/monitoringPasien/create','PetugasPerawatanController@tambah_monitoring_rawat_inap');

	// Informasi Ruangan
	Route::get('/ketersediaanRuangan','PetugasPerawatanController@index_ruangan');
	Route::post('/ketersediaanRuangan/create','PetugasPerawatanController@create_ruangan');
	Route::get('/ketersediaanRuangan/edit/{id_ruang}','PetugasPerawatanController@edit_ruangan');
	Route::post('/ketersediaanRuangan/update/{id_ruang}','PetugasPerawatanController@update_ruangan');
	Route::get('/ketersediaanRuangan/delete/{id_ruang}','PetugasPerawatanController@delete_ruangan');

});

Route::group(['middleware' => ['auth', 'checkRole:1,6']], function(){

	// Pasien Admin
	Route::get('/dataPasien','MasterController@index_pasien');
	Route::post('/dataPasien/create','MasterController@create_pasien');
	Route::get('/dataPasien/edit/{id_pasien}','MasterController@edit_pasien');
	Route::post('/dataPasien/update/{id_pasien}','MasterController@update_pasien');
	Route::get('/dataPasien/delete/{id_pasien}','MasterController@delete_pasien');

	// Pasien
	Route::get('/dataPasienPendaftaran','PetugasPendaftaranController@index_data_pasien');
	Route::get('/dataPasienPendaftaran/edit/{id_pasien}','PetugasPendaftaranController@edit_data_pasien');
	Route::post('/dataPasienPendaftaran/update/{id_pasien}','PetugasPendaftaranController@update_data_pasien');
	Route::get('/dataPasienPendaftaran/cetak/{id_pasien}','PetugasPendaftaranController@cetak_data_pasien');

	// Tujuan Poliklinik
	Route::get('/dataTujuanPoliklinik','PetugasPendaftaranController@index_data_tujuan');
	Route::get('/dataTujuanPoliklinik/edit/{id_pasien}','PetugasPendaftaranController@edit_data_tujuan');
	Route::post('/dataTujuanPoliklinik/update/{id_pasien}','PetugasPendaftaranController@update_data_tujuan');

});

Route::group(['middleware' => ['auth', 'checkRole:1,2,3,4,5,6,7,8']], function(){

	// Dashboard
	Route::get('/dashboard','DashboardController@index');

});

Auth::routes();
