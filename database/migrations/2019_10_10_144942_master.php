<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Master extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_jabatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_jab', 5);
            $table->string('jabatan', 50)->nullable();
            $table->timestamps();
        });

        Schema::create('m_pasien', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pasien', 5);
            $table->string('no_rekam_medis', 10)->nullable();
            $table->string('nama_pasien', 40)->nullable();
            $table->string('alamat', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
            $table->integer('umur')->nullable();
            $table->string('no_telp', 13)->nullable();
            $table->timestamps();
        });

        Schema::create('m_obat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_obat', 5);
            $table->string('nama_obat', 30)->nullable();
            $table->integer('harga_obat')->nullable();
            $table->integer('status_obat')->nullable();
            $table->timestamps();
        });

        Schema::create('m_poli', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_poli', 5);
            $table->string('nama_poli', 30)->nullable();
            $table->timestamps();
        });

        // pegawai bisa dokter
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_pegawai', 5);
            $table->string('kode_user', 10)->nullable();
            $table->string('role', 10)->nullable();
            $table->string('id_jab', 4)->nullable();
            $table->string('nip', 30)->nullable();
            $table->string('nama_pegawai', 40)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat', 100)->nullable();
            $table->string('jenis_kelamin', 1)->nullable();
            $table->string('id_poli', 5)->nullable();
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
        Schema::dropIfExists('m_jabatan');
        Schema::dropIfExists('m_pasien');
        Schema::dropIfExists('m_obat');
        Schema::dropIfExists('m_poli');
        Schema::dropIfExists('pegawai');
    }
}
