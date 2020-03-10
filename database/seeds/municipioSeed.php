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
        //
        DB::table("c_municipios")->insert([
            'descripcion' => 'ninguno'
        ]);
        DB::table("c_municipios")->insert([
            'descripcion' => 'Ejutla de Crespo Oaxaca'
        ]);
        DB::table("c_municipios")->insert([
            'descripcion' => 'Ocotlan'
        ]);
        DB::table("c_municipios")->insert([
           'descripcion' => 'Zimatlan' 
        ]);
        DB::table("c_municipios")->insert([
            'descripcion' => 'San Pablo Huixtepec'
        ]);
    }
}
