<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Auth;

use App\Models\pegawai;
use App\Models\m_pasien;
use App\Models\m_poli;
use App\Models\registrasi_pasien;

class PetugasPendaftaranController extends Controller
{
    // Data Jabatan
    public function index_pasien()
    {

        $dokter = request('id_poli');
        // var_dump($dokter);

        // get data
        $DataPasien = m_pasien::orderBy("created_at", "desc")->get();
        $DataPoli = m_poli::orderBy("nama_poli", "asc")->get();
        $DataDokter = pegawai::where([["role", 2],["id_poli", $dokter]])->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('petugas.petugasPendaftaran.dataPasien.index', compact('DataPasien', 'DataPoli','DataDokter'));
 
    }

    public function create_pasien(Request $request)
    {

        // $DataJabatan = m_pegawai::create([
        //     'id_jab' => $id_jab,
        //     'jabatan' => $request->jabatan,
        // ]);

        $prefix = 'PS';
        $get_last_kode = m_pasien::orderBy('id_pasien','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_pasien, strlen($prefix), 2)+1 : 1;
        $digit = 2;
        $id_pasien = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;


        // $this->validate($request);
        $DataPasien = new m_pasien;
        $DataPasien->id_pasien = $id_pasien;
        $DataPasien->no_rekam_medis = Str::random(8);
        $DataPasien->nama_pasien = request('nama_pasien');
        // $DataPasien->id_jab = 1;
        $DataPasien->alamat = request('alamat');
        $DataPasien->tanggal_lahir = request('tanggal_lahir');
        $DataPasien->jenis_kelamin = request('jenis_kelamin');
        $DataPasien->no_telp = request('no_telp');
        // if(request('role') == '2'){
        //     $DataPegawai->id_poli = request('id_poli');
        // } else {
        //     $DataPegawai->id_poli = null;
        // }   
        $DataPasien->created_at = now();
        $DataPasien->save();

        $prefix = 'RG';
        $get_last_kode = registrasi_pasien::orderBy('id_registrasi','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_registrasi, strlen($prefix), 2)+1 : 1;
        $digit = 2;
        $id_registrasi = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        $DataRegistrasiPasien = new registrasi_pasien;
        $DataRegistrasiPasien->id_pasien = $DataPasien->id_pasien;
        $DataRegistrasiPasien->id_registrasi = $id_registrasi;
        $DataRegistrasiPasien->kode_user = Auth::user()->kode_user;
        $DataRegistrasiPasien->id_poli = request('id_poli');
        $DataRegistrasiPasien->tanggal_registrasi = now();
        $DataRegistrasiPasien->jam_registrasi = now();
        $DataRegistrasiPasien->keluhan = request('keluhan');
        $DataRegistrasiPasien->biaya_registrasi = request('biaya_registrasi');
        $DataRegistrasiPasien->created_at = now();
        $DataRegistrasiPasien->save();

        // dd($DataJabatan);

        return redirect('/RegistrasiPasien')->with('message', 'Data Berhasil diinput!');
    }   

    public function delete_pasien($id_pasien)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_pasien::where('id_pasien' ,$id_pasien)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/RegistrasiPasien')->with('message_delete', 'Data Berhasil dihapus!');
    }
}
