<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_driver', function (Blueprint $table) {
            $table->id('id_driver');
            $table->string('nama_driver')->unique();
            $table->string('nik_driver')->unique();
            $table->integer('jumlah_minus')->nullable();
            $table->integer('jumlah_kesalahan')->nullable();
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
        Schema::dropIfExists('ao_driver');
    }
}
