<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetugasMedisPenunjangController extends Controller
{
    // Data Pemeriksaan Penunjang
    public function index_pemeriksaan_penunjang()
    {

        // $DataMedisPenunjang = hasil_pemeriksaan::where('medis_penunjang', 1)->orderBy("tanggal_waktu", "asc")->get();
        $DataMedisPenunjang = DB::table('hasil_pemeriksaan')
            ->join('vw_pemeriksaan', 'hasil_pemeriksaan.id_registrasi', '=', 'vw_pemeriksaan.id_registrasi')
            ->select('hasil_pemeriksaan.*', 'vw_pemeriksaan.*')
            ->where('hasil_pemeriksaan.medis_penunjang', 1)
            ->orderBy('hasil_pemeriksaan.tanggal_waktu', 'asc')
            ->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('petugas.petugasMedisPenunjang.dataPemeriksaanPenunjang.index', compact('DataMedisPenunjang'));
 
    }
}
