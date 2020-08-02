<?php

use Illuminate\Database\Seeder;

class categoriaAprendeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

    DB::connection('mysql')->table('c_categoria_aprendes')->insert([
        'descripcion' => 'Categoria aprende 1'
    ]);
    DB::connection('mysql')->table('c_categoria_aprendes')->insert([
        'descripcion' => 'Categoria aprende 2'
    ]);
    DB::connection('mysql')->table('c_categoria_aprendes')->insert([
        'descripcion' => 'Categoria aprende 3'
    ]);
    DB::connection('mysql')->table('c_categoria_aprendes')->insert([
        'descripcion' => 'Categoria aprende 4'
    ]);
    
    }
}
