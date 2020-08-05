<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCMunicipiosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_municipios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clave');
            $table->string('nombre');
            $table->integer('reps_id')->unsigned();
            $table->foreign('reps_id')->references('id')->on('c_estados_reps');
            $table->integer('region_id')->unsigned()->default(9);
            $table->foreign('region_id')->references('id')->on('c_regions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('c_municipios');
    }
}
