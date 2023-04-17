<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoTripTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_trip', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_armada');
            $table->foreignId('id_driver');
            $table->foreignId('id_codriver');
            $table->date('tanggal_trip');
            $table->foreignId('id_rute');
            $table->foreignId('id_ritase');
            $table->integer('jumlah_penumpang_admin');
            $table->integer('jumlah_penumpang_checker')->nullable();
            $table->integer('jumlah_minus')->nullable();
            $table->string('gambar_bukti_minus')->nullable();
            $table->string('catatan')->nullable();
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
        Schema::dropIfExists('ao_trip');
    }
}
