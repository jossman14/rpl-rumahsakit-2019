<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\surat;

class MedisPenunjangController extends Controller
{
    // Rujukan
    public function index_rujukan()
    {
        // $dataRujukan = surat::get();
        $dataRujukan = DB::table('surat')
            ->join('hasil_pemeriksaan', 'surat.id_hasil_pemeriksaan', '=', 'hasil_pemeriksaan.id_hasil_pemeriksaan')
            ->join('registrasi_pasien', 'hasil_pemeriksaan.id_registrasi', '=', 'registrasi_pasien.id_registrasi')
            ->join('m_pasien', 'registrasi_pasien.id_pasien', '=', 'm_pasien.id_pasien')
            ->join('pegawai', 'registrasi_pasien.kode_user', '=', 'pegawai.kode_user')
            ->select('surat.*', 'hasil_pemeriksaan.*', 'm_pasien.*', 'pegawai.nama_pegawai')
            ->orderBy('surat.created_at', 'asc')
            ->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('petugas.petugasMedisPenunjang.dataSurat.index', compact('dataRujukan'));
    }

    public function lihat_rujukan($id_surat)
    {

        // get data
        // $dataSurat = surat::where('id_surat', $id_surat)->get();
        $dataSurat = DB::table('surat')
            ->join('hasil_pemeriksaan', 'surat.id_hasil_pemeriksaan', '=', 'hasil_pemeriksaan.id_hasil_pemeriksaan')
            ->join('registrasi_pasien', 'hasil_pemeriksaan.id_registrasi', '=', 'registrasi_pasien.id_registrasi')
            ->join('m_pasien', 'registrasi_pasien.id_pasien', '=', 'm_pasien.id_pasien')
            ->join('pegawai', 'registrasi_pasien.kode_user', '=', 'pegawai.kode_user')
            ->select('surat.*', 'hasil_pemeriksaan.*', 'm_pasien.*', 'pegawai.nama_pegawai')
            ->where('surat.id_surat', $id_surat)
            ->orderBy('surat.created_at', 'asc')
            ->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.DataPegawai.index',['jabatan' => $DataPegawai]);
        return view('petugas.petugasMedisPenunjang.dataSurat.lihat', compact('dataSurat'));
 
    }
}
