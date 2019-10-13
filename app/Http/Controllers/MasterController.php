<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\m_jabatan;
use App\Models\m_obat;
use App\Models\m_pasien;
use App\Models\m_poli;

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

    // Data Jabatan
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
}
