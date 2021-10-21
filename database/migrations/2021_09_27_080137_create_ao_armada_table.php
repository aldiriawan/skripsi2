<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAoArmadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ao_armada', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_tipe_armada');
            $table->string('kode_armada')->unique();
            $table->string('merek_armada');
            $table->date('serviced_at')->nullable();
            $table->integer('jumlah_kerusakan')->nullable();
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
        Schema::dropIfExists('ao_armada');
    }
}
