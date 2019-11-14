<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VwDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW " . env('DB_PREFIX', '') . "vw_dokter AS
            SELECT a.id_pegawai,
            a.nip,
            a.kode_user,
            a.nama_pegawai,
            a.tanggal_lahir,
            a.alamat,
            a.jenis_kelamin,
            b.id_poli,
            b.nama_poli AS poli
            FROM " . env('DB_PREFIX', '') . "pegawai a
            LEFT JOIN " . env('DB_PREFIX', '') . " m_poli b ON a.id_poli = b.id_poli
            WHERE a.role = 2");
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
