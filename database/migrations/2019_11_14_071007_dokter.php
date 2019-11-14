<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dokter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // pegawai bisa dokter
        // Schema::create('pegawai', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('id_pegawai', 5);
        //     $table->string('kode_user', 10)->nullable();
        //     $table->string('role', 10)->nullable();
        //     $table->string('id_jab', 4)->nullable();
        //     $table->string('nip', 30)->nullable();
        //     $table->string('nama_pegawai', 40)->nullable();
        //     $table->date('tanggal_lahir')->nullable();
        //     $table->string('alamat', 100)->nullable();
        //     $table->string('jenis_kelamin', 1)->nullable();
        //     $table->string('id_poli', 5)->nullable();
        //     $table->timestamps();
        // });

        Schema::create('jadwal_dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pegawai', 5);
            $table->string('hari', 30);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('pegawai');
        Schema::dropIfExists('jadwal_dokter');
    }
}
