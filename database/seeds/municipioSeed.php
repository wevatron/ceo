<?php

use Illuminate\Database\Seeder;

class municipioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estados = DB::connection('estados')->table('c_municipios')->get();

       foreach ($estados as $estado) {
        DB::connection('mysql')->table('c_municipios')->insert([
            'id' => $estado->id,
            'reps_id' => $estado->c_estados_id,
            'clave' => $estado->clave,
            'nombre' => $estado->nombre
        ]);
       }

       DB::connection('mysql')->table('c_municipios')->insert([
        'id' => 2458,
        'reps_id' => 33,
        'clave' => 'foraneo',
        'nombre' => 'foraneo'
    ]);

    }
}
