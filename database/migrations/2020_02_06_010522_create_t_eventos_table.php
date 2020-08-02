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
            $table->string('descripcion_evento',800)->nullable();
            $table->string('nombre_conferencista')->nullable();
            $table->string('cargo')->nullable();
            $table->string('empresa')->nullable();
            $table->string('bio',800)->nullable();
            $table->string('url',800)->nullable();
            $table->date('fecha')->nullable();
            $table->time('inicio')->nullable();
            $table->time('fin')->nullable();
            $table->integer('tipo_evento_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('tipo_evento_id')->references('id')->on('c_tipo_eventos');

            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
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
