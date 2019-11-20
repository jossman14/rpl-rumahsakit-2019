<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\m_jabatan;
use App\Models\m_obat;
use App\Models\m_pasien;
use App\Models\m_poli;
use App\Models\m_ruang;

class MasterController extends Controller
{

    // Data Jabatan
    public function index_jabatan()
    {

        // get data
        $DataJabatan = m_jabatan::orderBy("id_jab", "asc")->get();
 
    	// mengirim data jabatan ke view index
    	// return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataJabatan.index', compact('DataJabatan'));
 
    }

    public function create_jabatan(Request $request)
    {

        // $DataJabatan = m_jabatan::create([
        //     'id_jab' => $id_jab,
        //     'jabatan' => $request->jabatan,
        // ]);

        $prefix = 'JB';
        $get_last_kode = m_jabatan::orderBy('id_jab','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_jab, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $id_jab = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        $this->validate($request, m_jabatan::$rules);
        $DataJabatan = new m_jabatan;
        $DataJabatan->id_jab = $id_jab;
        $DataJabatan->jabatan = request('jabatan');
        $DataJabatan->save();

        // dd($DataJabatan);

        return redirect('/dataJabatan')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_jabatan($id_jab)
    {
        $DataJabatanEdit = m_jabatan::where('id_jab', $id_jab)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin.dataJabatan.edit', compact('DataJabatanEdit'));
    }

    public function update_jabatan(Request $request)
    {

        $this->validate($request, m_jabatan::$rules);

        m_jabatan::where('id_jab', $request->id_jab)->update([
            'jabatan' => $request->jabatan,
            'updated_at' => now()
        ]);

        return redirect('/dataJabatan')->with('message', 'Data Berhasil diubah!');
    }

    public function delete_jabatan($id_jab)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_jabatan::where('id_jab',$id_jab)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataJabatan')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Obat
    public function index_obat()
    {

        // get data
        $DataObat = m_obat::orderBy("id_obat", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataObat.index', compact('DataObat'));
 
    }

    public function create_obat(Request $request)
    {

        $prefix = 'OB';
        $get_last_kode = m_obat::orderBy('id_obat','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_obat, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $id_obat = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        $this->validate($request, m_obat::$rules);
        $DataObat = new m_obat;
        $DataObat->id_obat = $id_obat;
        $DataObat->nama_obat = request('nama_obat');
        $DataObat->harga_obat = request('harga_obat');
        $DataObat->status_obat = request('status_obat');
        $DataObat->save();

        // dd($DataJabatan);

        return redirect('/dataObat')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_obat($id_obat)
    {
        $DataObatEdit = m_obat::where('id_obat', $id_obat)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin.dataObat.edit', compact('DataObatEdit'));
    }

    public function update_obat(Request $request)
    {

        $this->validate($request, m_obat::$rules);

        m_obat::where('id_obat', $request->id_obat)->update([
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'status_obat' => $request->status_obat,
            'updated_at' => now()
        ]);

        return redirect('/dataObat')->with('message', 'Data Berhasil diubah!');
    }

    public function delete_obat($id_obat)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_obat::where('id_obat',$id_obat)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataObat')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Kamar
    public function index_kamar()
    {

        // get data
        $DataKamar = m_ruang::orderBy("id_ruang", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataKamar.index', compact('DataKamar'));
 
    }

    public function create_kamar(Request $request)
    {

        $prefix = 'RG';
        $get_last_kode = m_ruang::orderBy('id_ruang','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_ruang, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $id_ruang = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        // $this->validate($request, m_ruang::$rules);
        $DataRuang = new m_ruang;
        $DataRuang->id_ruang = $id_ruang;
        $DataRuang->tipe_kamar = request('tipe_kamar');
        $DataRuang->kamar = request('nama').' '.request('no');
        $DataRuang->status = 0;
        $DataRuang->save();

        // dd($DataJabatan);

        return redirect('/dataKamar')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_kamar($id_ruang)
    {
        $DataKamarEdit = m_ruang::where('id_ruang', $id_ruang)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin.dataKamar.edit', compact('DataKamarEdit'));
    }

    public function update_kamar(Request $request)
    {

        // $this->validate($request, m_ruang::$rules);

        m_ruang::where('id_ruang', $request->id_ruang)->update([
            'tipe_kamar' => $request->tipe_kamar,
            'kamar' => $request->kamar,
            'updated_at' => now()
        ]);

        return redirect('/dataKamar')->with('message', 'Data Berhasil diubah!');
    }

    public function delete_kamar($id_ruang)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_ruang::where('id_ruang', $id_ruang)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataKamar')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Poli
    public function index_poli()
    {

        // get data
        $DataPoli = m_poli::orderBy("id_poli", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataPoli.index', compact('DataPoli'));
 
    }

    public function create_poli(Request $request)
    {

        $prefix = 'PO';
        $get_last_kode = m_poli::orderBy('id_poli','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->id_poli, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $id_poli = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        $this->validate($request, m_poli::$rules);
        $DataPoli = new m_poli;
        $DataPoli->id_poli = $id_poli;
        $DataPoli->nama_poli = request('nama_poli');
        $DataPoli->save();

        // dd($DataJabatan);

        return redirect('/dataPoli')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_poli($id_poli)
    {
        $DataPoliEdit = m_poli::where('id_poli', $id_poli)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin.dataPoli.edit', compact('DataPoliEdit'));
    }

    public function update_poli(Request $request)
    {

        $this->validate($request, m_poli::$rules);

        m_poli::where('id_poli', $request->id_poli)->update([
            'nama_poli' => $request->nama_poli,
            'updated_at' => now()
        ]);

        return redirect('/dataPoli')->with('message', 'Data Berhasil diubah!');
    }

    public function delete_poli($id_poli)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_poli::where('id_poli',$id_poli)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataPoli')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Poli
    public function index_pasien()
    {

        // get data
        $DataPasien = m_pasien::orderBy("created_at", "desc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataPasien.index', compact('DataPasien'));
 
    }
}
