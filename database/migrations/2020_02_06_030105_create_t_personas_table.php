<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTPersonasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('curp');
            $table->string('rfc');
            $table->integer('universidad_id')->unsigned();
            $table->integer('tipo_usuario_id')->unsigned();
            $table->integer('municipio_id')->unsigned();
            $table->integer('giro_negocio_id')->unsigned();
            $table->integer('evento_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('universidad_id')->references('id')->on('c_universidads');
            $table->foreign('tipo_usuario_id')->references('id')->on('c_tipo_usuarios');
            $table->foreign('municipio_id')->references('id')->on('c_municipios');
            $table->foreign('giro_negocio_id')->references('id')->on('c_giro_negocios');
            $table->foreign('evento_id')->references('id')->on('t_eventos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_personas');
    }
}
