<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToRekamMedis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rekam_medis', function (Blueprint $table) {
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
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rekam_medis', function (Blueprint $table) {
            $table->dropColumn('no_rekam');
            $table->dropColumn('pasiens_id');
            $table->dropColumn('tgl_rekam');
            $table->dropColumn('keluhan');
            $table->dropColumn('pemeriksaan');
            $table->dropColumn('penunjang');
            $table->dropColumn('diagnosa');
            $table->dropColumn('terapi');
            $table->dropColumn('pengobatan');
            $table->dropColumn('alergi');
        });
    }
}
