<?php

use Illuminate\Database\Seeder;

class tipoEventosSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Conferencia'
        ]);
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Paneles'
        ]);
        DB::table("c_tipo_eventos")->insert([
            'descripcion' => 'Aliados'
        ]);
    }
}
