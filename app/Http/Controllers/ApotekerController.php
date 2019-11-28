<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use App\Models\m_obat;

class ApotekerController extends Controller
{
    // Data Obat
    public function index_obat()
    {

        // get data
        $DataObat = m_obat::orderBy("id_obat", "asc")->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('apoteker.dataObat.index', compact('DataObat'));
 
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
        $DataObat->tipe = request('tipe');
        $DataObat->harga_obat = request('harga_obat');
        $DataObat->status_obat = request('status_obat');
        $DataObat->save();

        // dd($DataJabatan);

        return redirect('/dataObatApoteker')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_obat($id_obat)
    {
        $DataObatEdit = m_obat::where('id_obat', $id_obat)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('apoteker.dataObat.edit', compact('DataObatEdit'));
    }

    public function update_obat(Request $request)
    {

        $this->validate($request, m_obat::$rules);

        m_obat::where('id_obat', $request->id_obat)->update([
            'nama_obat' => $request->nama_obat,
            'tipe' => $request->tipe,
            'harga_obat' => $request->harga_obat,
            'status_obat' => $request->status_obat,
            'updated_at' => now()
        ]);

        return redirect('/dataObatApoteker')->with('message', 'Data Berhasil diubah!');
    }

    public function delete_obat($id_obat)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        m_obat::where('id_obat',$id_obat)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataObatApoteker')->with('message_delete', 'Data Berhasil dihapus!');
    }
}
