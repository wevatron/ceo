<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(usuariosSeeder::class);
       $this->call(universidadSeed::class);
       $this->call(giroNegocioSeed::class);
       $this->call(municipioSeed::class);
       $this->call(tipoEventosSeed::class);
       $this->call(tipoUsuarioSeed::class);
    }
}
