<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('apellido_paterno')->nullable();
            $table->string('apellido_materno')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfc')->nullable();
            $table->string('foto')->nullable();
            $table->string('municipio')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            

            $table->integer('tipo_usuario_id')->default(3)->unsigned();
            $table->integer('municipio_id')->default(2458)->unsigned();
            $table->integer('giro_negocio_id')->default(1)->unsigned();
            $table->integer('universidad_id')->default(1)->unsigned();
            //$table->integer('estado_id')->default(1)->unsigned();

            $table->foreign('tipo_usuario_id')->references('id')->on('c_tipo_usuarios');
            $table->foreign('municipio_id')->references('id')->on('c_municipios');
            $table->foreign('giro_negocio_id')->references('id')->on('c_giro_negocios');
            $table->foreign('universidad_id')->references('id')->on('c_universidads');
           // $table->foreign('estado_id')->references('id')->on('c_estado_rep');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
