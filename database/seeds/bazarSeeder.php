<?php

use Illuminate\Database\Seeder;

class bazarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 

    DB::connection('mysql')->table('t_bazars')->insert([
        'descripcion' => 'Frutas deshidratadas',
        'nombre' => 'Fruvethy',
        'c_categorias_id' => 2
    ]);
      
    }
}
