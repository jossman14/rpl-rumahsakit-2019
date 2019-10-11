<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('id_pembayaran', 5)->primary();
            $table->string('id_hasil_pemeriksaan', 5)->nullable();
            $table->string('id_rawat_inap', 5)->nullable();
            $table->string('id_resep', 5)->nullable();
            $table->dateTime('tanggal_jam')->nullable();
            $table->string('total', 15)->nullable();
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
        Schema::dropIfExists('pembayaran');
    }
}
