<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTImagenBazarsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_imagen_bazars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t_bazar_id')->unsigned();
            $table->string('imagen');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('t_bazar_id')->references('id')->on('t_bazars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_imagen_bazars');
    }
}
