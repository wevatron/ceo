<?php

use Illuminate\Database\Seeder;

class universidadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_universidads")->insert([
            'descripcion' => 'Universidad Tecnologica de los Valles Centrales de Oaxaca'
        ]);
        DB::table("c_universidads")->insert([
            'descripcion' => 'Anahuac Oaxaca'
        ]);
        DB::table("c_universidads")->insert([
           'descripcion' => 'La Salle Oaxaca' 
        ]);
        DB::table("c_universidads")->insert([
            'descripcion' => 'Univas'
        ]);
    }
}
