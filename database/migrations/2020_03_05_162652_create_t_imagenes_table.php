<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTImagenesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_imagenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->string('url_img');
            $table->integer('t_evento_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('t_evento_id')->references('id')->on('t_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_imagenes');
    }
}
