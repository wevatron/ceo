<?php

use Illuminate\Database\Seeder;

class ocupacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Estudiante'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Emprendedor'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Empresario'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Docente'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Aliado ecosistema'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Inversionista'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Interesado en emprender'
        ]);
        DB::table("c_ocupacions")->insert([
            'descripcion' => 'Espectador'
        ]);
        
    }
}
