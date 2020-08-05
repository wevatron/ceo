<?php

use Illuminate\Database\Seeder;

class regionesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("c_regions")->insert([
            'descripcion' => 'CAÑADA'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'COSTA'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'ISTMO'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'MIXTECA'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'PAPALOAPAN'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'SIERRA SUR'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'SIERRA NORTE'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'VALLES CENTRALES'
        ]);
        DB::table("c_regions")->insert([
            'descripcion' => 'ninguno'
        ]);
        
    }
}
