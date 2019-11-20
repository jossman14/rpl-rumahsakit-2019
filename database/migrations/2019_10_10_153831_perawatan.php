<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perawatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_inap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_rawat_inap', 5);
            $table->string('id_registrasi', 5)->nullable();
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_keluar')->nullable();
            $table->integer('hari')->nullable();
            $table->integer('biaya_rawat_inap')->nullable();
            $table->integer('total_biaya_rawat_inap')->nullable();
            $table->string('id_ruang', 5)->nullable();
            $table->timestamps();
        }); 

        Schema::create('rawat_jalan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_rawat_jalan', 5);
            $table->string('id_registrasi', 5)->nullable();
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->date('tanggal')->nullable();
            $table->integer('durasi')->nullable();
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
        Schema::dropIfExists('rawat_inap');
        Schema::dropIfExists('rawat_jalan');
    }
}
