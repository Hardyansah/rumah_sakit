<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAuthorToDoktersPasiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dokters_pasiens', function (Blueprint $table) {
            $table->integer('dokters_id')->unsigned();
            $table->integer('pasiens_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dokters_pasiens', function (Blueprint $table) {
           
            $table->dropColumn('dokters_id');
            $table->dropColumn('pasiens_id');
        });
    }
}
