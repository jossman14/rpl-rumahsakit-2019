<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Resep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_resep', 5);
            $table->string('id_obat', 5)->nullable();
            $table->string('dosis', 10)->nullable();
            $table->string('biaya', 10)->nullable();
            $table->string('status', 10)->nullable();
            $table->timestamps();
        }); 

        Schema::create('jenis_resep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_jenis_resep', 5);
            $table->string('id_resep', 5)->nullable();
            $table->string('id_obat', 5)->nullable();
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
        Schema::dropIfExists('resep');
        Schema::dropIfExists('jenis_resep');
    }
}
