<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

    DB::connection('mysql')->table('c_categorias')->insert([
        'descripcion' => 'Categoria 1',
        'accion' => 'ninguno'
    ]);
    DB::connection('mysql')->table('c_categorias')->insert([
        'descripcion' => 'Categoria 2',
        'accion' => 'ninguno'
    ]);
    DB::connection('mysql')->table('c_categorias')->insert([
        'descripcion' => 'Categoria 3',
        'accion' => 'ninguno'
    ]);
    DB::connection('mysql')->table('c_categorias')->insert([
        'descripcion' => 'Categoria 4',
        'accion' => 'ninguno'
    ]);
    
    }
}
