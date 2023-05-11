<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoCodriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_codriver', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_codriver')->unique();
            $table->string('nik_codriver')->unique();
            $table->string('umur_codriver');
            $table->string('telepon_codriver');
            $table->string('alamat_codriver');
            $table->integer('jumlah_minus')->nullable();
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
        Schema::dropIfExists('ao_codriver');
    }
}
