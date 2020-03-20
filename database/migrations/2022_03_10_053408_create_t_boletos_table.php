<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTBoletosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_boletos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('t_evento_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->integer('estado_id')->unsigned();
            $table->integer('dislike')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('t_evento_id')->references('id')->on('t_eventos');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('estado_id')->references('id')->on('estados');
        });
        DB::update("ALTER TABLE t_boletos AUTO_INCREMENT = 100000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('t_boletos');
    }
}
