<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\pegawai;
use App\Models\jadwal_dokter;
use App\Models\vw_jadwal_dokter;
use App\Models\vw_dokter;
use App\Models\m_poli;
use App\User;

class PegawaiController extends Controller
{
    // Data Jabatan
    public function index_pegawai()
    {

        // get data
        $DataPegawai = pegawai::orderBy("role", "asc")->get();
        $DataPoli = m_poli::orderBy("nama_poli", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('admin.dataPegawai.index', compact('DataPegawai', 'DataPoli'));
 
    }

    public function create_pegawai(Request $request)
    {

        // $DataJabatan = m_pegawai::create([
        //     'id_jab' => $id_jab,
        //     'jabatan' => $request->jabatan,
        // ]);

        $prefix = 'PG';
        $get_last_kode = pegawai::orderBy('id_pegawai','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_pegawai, strlen($prefix), 2)+1 : 1;
        $digit = 2;
        $id_pegawai = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        // $this->validate($request);
        $DataPegawai = new pegawai;
        $DataPegawai->id_pegawai = $id_pegawai;
        $DataPegawai->kode_user = Str::random(8);
        $DataPegawai->role = request('role');
        $DataPegawai->id_jab = 1;
        $DataPegawai->nip = request('nip');
        $DataPegawai->nama_pegawai = request('nama_pegawai');
        $DataPegawai->tanggal_lahir = request('tanggal_lahir');
        $DataPegawai->jenis_kelamin = request('jenis_kelamin');
        $DataPegawai->alamat = request('alamat');
        if(request('role') == '2'){
            $DataPegawai->id_poli = request('id_poli');
        } else {
            $DataPegawai->id_poli = null;
        }   
        $DataPegawai->created_at = now();
        $DataPegawai->save();

        $DataUser = new User;
        $DataUser->kode_user = $DataPegawai->kode_user;
        $DataUser->role = $DataPegawai->role;
        $DataUser->nama = $DataPegawai->nama_pegawai;
        $DataUser->email = request('email');
        $DataUser->password = bcrypt('123456');
        $DataUser->remember_token = Str::random(60);
        $DataUser->created_at = now();
        $DataUser->save();

        // dd($DataJabatan);

        return redirect('/dataPegawai')->with('message', 'Data Berhasil diinput!');
    }   

    public function delete_pegawai($kode_user)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        pegawai::where('kode_user' ,$kode_user)->delete();
        User::where('kode_user' ,$kode_user)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataPegawai')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Dokter
    public function index_dokter()
    {

        // get data
        $DataDokter = vw_dokter::orderBy("id_pegawai", "asc")->get();
        $DataPoli = m_poli::orderBy("nama_poli", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('admin.dataDokter.index', compact('DataDokter', 'DataPoli'));
 
    }

    public function create_dokter(Request $request)
    {

        // $DataJabatan = m_pegawai::create([
        //     'id_jab' => $id_jab,
        //     'jabatan' => $request->jabatan,
        // ]);

        $prefix = 'PG';
        $get_last_kode = pegawai::orderBy('id_pegawai','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_pegawai, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $id_pegawai = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        // $this->validate($request);
        $DataPegawai = new pegawai;
        $DataPegawai->id_pegawai = $id_pegawai;
        $DataPegawai->kode_user = Str::random(8);
        $DataPegawai->role = 2;
        $DataPegawai->id_jab = 1;
        $DataPegawai->nip = request('nip');
        $DataPegawai->nama_pegawai = request('nama_pegawai');
        $DataPegawai->tanggal_lahir = request('tanggal_lahir');
        $DataPegawai->jenis_kelamin = request('jenis_kelamin');
        $DataPegawai->alamat = request('alamat');
        $DataPegawai->id_poli = request('id_poli');
        $DataPegawai->created_at = now();
        $DataPegawai->save();

        $DataUser = new User;
        $DataUser->kode_user = $DataPegawai->kode_user;
        $DataUser->role = $DataPegawai->role;
        $DataUser->nama = $DataPegawai->nama_pegawai;
        $DataUser->email = request('email');
        $DataUser->password = bcrypt('123456');
        $DataUser->remember_token = Str::random(60);
        $DataUser->created_at = now();
        $DataUser->save();

        // dd($DataJabatan);

        return redirect('/dataDokter')->with('message', 'Data Berhasil diinput!');
    }   

    public function delete_dokter($kode_user)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        pegawai::where('kode_user' ,$kode_user)->delete();
        User::where('kode_user' ,$kode_user)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataDokter')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Jadwal Dokter
    public function index_jadwal_dokter()
    {

        // get data
        $DataDokter = vw_dokter::get();
        $DataJadwalDokter = vw_jadwal_dokter::get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('admin.dataJadwalDokter.index', compact('DataJadwalDokter','DataDokter'));
 
    }

    public function create_jadwal_dokter(Request $request)
    {


        // $this->validate($request);
        $DataJadwalDokter = new jadwal_dokter;
        $DataJadwalDokter->id_pegawai = request('id_pegawai');
        $DataJadwalDokter->hari = request('hari');
        $DataJadwalDokter->jam_mulai = request('jam_mulai');
        $DataJadwalDokter->jam_selesai = request('jam_selesai');
        $DataJadwalDokter->created_at = now();
        $DataJadwalDokter->save();
        // dd($DataJabatan);

        return redirect('/dataJadwalDokter')->with('message', 'Data Berhasil diinput!');
    }   

    public function delete_jadwal_dokter($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        jadwal_dokter::where('id', $id)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataJadwalDokter')->with('message_delete', 'Data Berhasil dihapus!');
    }
}
