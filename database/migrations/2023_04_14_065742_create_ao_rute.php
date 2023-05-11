<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoRute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_rute', function (Blueprint $table) {
            $table->id('id');
            $table->string('kode_rute')->unique();
            $table->string('lokasi_asal');
            $table->string('lokasi_tujuan');
            $table->integer('jarak_km');
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
        Schema::dropIfExists('ao_rute');
    }
}
