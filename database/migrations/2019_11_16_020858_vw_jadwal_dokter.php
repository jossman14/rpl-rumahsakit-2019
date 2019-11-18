<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VwJadwalDokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE OR REPLACE VIEW " . env('DB_PREFIX', '') . "vw_jadwal_dokter AS
            SELECT a.id, 
            a.id_pegawai,
            b.nip,
            b.nama_pegawai,
            b.poli,
            a.hari,
            a.jam_mulai,
            a.jam_selesai
            FROM " . env('DB_PREFIX', '') . "jadwal_dokter a
            LEFT JOIN " . env('DB_PREFIX', '') . " vw_dokter b ON a.id_pegawai = b.id_pegawai");
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
