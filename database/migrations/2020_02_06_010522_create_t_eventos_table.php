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
            $table->string('nombre_conferencista');
            $table->string('cargo');
            $table->string('empresa');
            $table->string('bio',800);
            $table->integer('cupo');
            $table->integer('cupoFake');
            $table->date('fecha');
            $table->time('inicio');
            $table->time('fin');
            $table->integer('tipo_evento_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_evento_id')->references('id')->on('c_tipo_eventos');
        });
        DB::update("ALTER TABLE t_eventos AUTO_INCREMENT = 100000;");
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