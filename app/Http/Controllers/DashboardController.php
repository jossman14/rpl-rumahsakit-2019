<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\m_pasien;
use App\Models\m_poli;
use App\Models\pegawai;

class DashboardController extends Controller
{
    public function index()
    {
 
    	$jmlPasien = m_pasien::count();
    	$jmlPegawai = pegawai::count();
    	$jmlDokter = pegawai::where('role', 2)->count();
    	$jmlPoli = m_poli::count();

    	return view('dashboard.index', ['jmlPasien' => $jmlPasien, 'jmlPegawai' => $jmlPegawai, 'jmlDokter' => $jmlDokter, 'jmlPoli' => $jmlPoli]);
    }
}
