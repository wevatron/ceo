<?php

use Illuminate\Database\Seeder;

class giroNegocioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_giro_negocios")->insert([
            'descripcion' => 'Productos'
        ]);
        DB::table("c_giro_negocios")->insert([
            'descripcion' => 'Servicios'
        ]);
    
    }
}
