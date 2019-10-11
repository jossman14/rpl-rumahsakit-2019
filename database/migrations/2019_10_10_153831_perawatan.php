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
            $table->string('id_rawat_inap', 5)->primary();
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->dateTime('tanggal_masuk')->nullable();
            $table->dateTime('tanggal_keluar')->nullable();
            $table->integer('biaya_rawat_inap')->nullable();
            $table->string('ruang', 15)->nullable();
            $table->timestamps();
        }); 

        Schema::create('rawat_jalan', function (Blueprint $table) {
            $table->string('id_rawat_jalan', 5)->primary();
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->dateTime('tanggal')->nullable();
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
