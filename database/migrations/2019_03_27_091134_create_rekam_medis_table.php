<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRekamMedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_rekam');
            $table->integer('pasiens_id');
            $table->date('tgl_rekam');
            $table->string('keluhan')->nullable();
            $table->string('pemeriksaan')->nullable();
            $table->string('penunjang')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('terapi')->nullable();
            $table->string('pengobatan')->nullable();
            $table->string('alergi')->nullable();
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
        Schema::dropIfExists('rekam_medis');
    }
}
