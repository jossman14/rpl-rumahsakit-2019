<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VwPemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW " . env('DB_PREFIX', '') . "vw_pemeriksaan AS
            SELECT a.id, 
            a.id_registrasi,
            a.kode_user,
            b.id_poli,
            b.nama_poli,
            c.id_pasien,
            c.no_rekam_medis,
            c.nama_pasien,
            c.umur,
            c.jenis_kelamin,
            a.tanggal_registrasi,
            a.jam_registrasi,
            a.keluhan,
            a.biaya_registrasi,
            a.status
            FROM " . env('DB_PREFIX', '') . "registrasi_pasien a
            LEFT JOIN " . env('DB_PREFIX', '') . " m_poli b ON a.id_poli = b.id_poli
            LEFT JOIN " . env('DB_PREFIX', '') . " m_pasien c ON a.id_pasien = c.id_pasien");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
