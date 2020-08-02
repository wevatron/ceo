<?php

use Illuminate\Database\Seeder;

class aprendeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

    DB::connection('mysql')->table('t_aprendes')->insert([
        'descripcion' => 'Curso pitch',
        'nombre' => 'Fruvethy',
        'c_categorias_id' => 2
    ]);
    DB::connection('mysql')->table('t_aprendes')->insert([
        'descripcion' => 'Tutorial negocios',
        'nombre' => 'Fruvethy',
        'c_categorias_id' => 2
    ]);
    DB::connection('mysql')->table('t_aprendes')->insert([
        'descripcion' => 'Tutorial mercadeo',
        'nombre' => 'Fruvethy',
        'c_categorias_id' => 2
    ]);
      
    }
}
