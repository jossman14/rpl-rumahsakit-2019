<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registrasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_registrasi', 5);
            $table->string('kode_user', 10)->nullable();
            $table->string('id_poli', 5)->nullable();
            $table->string('id_pasien', 5)->nullable();
            $table->date('tanggal_registrasi')->nullable();
            $table->time('jam_registrasi')->nullable();
            $table->text('keluhan')->nullable();
            $table->integer('biaya_registrasi')->nullable();
            $table->string('status', 2)->nullable();
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
        Schema::dropIfExists('registrasi_pasien');
    }
}
