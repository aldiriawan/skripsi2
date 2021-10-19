<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoTripKesalahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_trip_kesalahan', function (Blueprint $table) {
            $table->id('id_trip_kesalahan');
            $table->foreignId('id_trip');
            $table->string('keterangan');
            $table->string('gambar_bukti_kesalahan')->nullable();
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
        Schema::dropIfExists('ao_trip_kesalahan');
    }
}
