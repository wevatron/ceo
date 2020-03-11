<?php

use Illuminate\Database\Seeder;

class estadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $estados = DB::connection('estados')->table('c_estados')->get();

    //    foreach ($estados as $estado) {
    //     DB::connection('mysql')->table('c_estados_reps')->insert([
    //         'clave' => $estado->clave,
    //         'nombre' => $estado->nombre
    //     ]);
    //    }
       DB::connection('mysql')->table('c_estados_reps')->insert([
        'id' => 33,
        'clave' => '33',
        'nombre' => 'ninguno'
    ]);
    }
}
