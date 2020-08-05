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
        $this->call(universidadSeed::class);
        $this->call(ocupacionSeed::class);
        $this->call(regionesSeed::class);
        $this->call(estadosSeeder::class);
        $this->call(estadoSeeder::class);
        $this->call(giroNegocioSeed::class);
        $this->call(municipioSeed::class);
        $this->call(tipoEventosSeed::class);
        $this->call(tipoUsuarioSeed::class);
        $this->call(usuariosSeeder::class);
        $this->call(eventoSeeder::class);
        $this->call(boletosSeeder::class);
        $this->call(categoriaSeeder::class);
        $this->call(categoriaAprendeSeeder::class);
        $this->call(bazarSeeder::class);
        $this->call(aprendeSeeder::class);

        
    }
}
