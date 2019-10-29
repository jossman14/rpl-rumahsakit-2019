<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HasilPemeriksaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_pemeriksaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_hasil_pemeriksaan', 5);
            $table->string('id_registrasi', 5)->nullable();
            $table->string('id_surat', 5)->nullable();
            $table->string('id_hasil_pemeriksaan_pen', 5)->nullable();
            $table->dateTime('tanggal_waktu')->nullable();
            $table->integer('biaya')->nullable();
            $table->string('diagnosis', 50)->nullable();
            $table->string('anamnesis', 50)->nullable();
            $table->string('pemeriksaan_fisik', 100)->nullable();
            $table->string('tindakan', 100)->nullable();
            $table->timestamps();
        }); 

        Schema::create('hasil_pemeriksaan_pen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_hasil_pemeriksaan_pen', 5);
            $table->dateTime('tanggal_waktu')->nullable();
            $table->integer('biaya')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        }); 

        Schema::create('surat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_surat', 5);
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->string('no_surat', 15)->nullable();
            $table->date('tanggal')->nullable();
            $table->string('jenis', 20)->nullable();
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
        Schema::dropIfExists('hasil_pemeriksaan');
        Schema::dropIfExists('hasil_pemeriksaan_pen');
        Schema::dropIfExists('surat');
    }
}
