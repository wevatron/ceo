<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTEventosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_evento');
            $table->string('descripcion_evento');
            $table->integer('cupo');
            $table->string('url_img')->nullable();
            $table->integer('tipo_evento_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_evento_id')->references('id')->on('c_tipo_eventos');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_eventos');
    }
}
