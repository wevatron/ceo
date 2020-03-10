<?php

use Illuminate\Database\Seeder;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name' => "David",
            'apellido_paterno' => "Barrita",
            'apellido_materno' => "Etc",
            'curp' => "Etc",
            'rfc' => "Etc",
            'foto' => "Etc",
            'tipo_usuario_id' => 1,
            'municipio_id' => 2458,
            'giro_negocio_id' => 1,
            'email' => "barrita@rr.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at'=> '2018-01-01' // En un seeder siempre pasar la fecha 
        ]); 
        DB::table("users")->insert([
            'name' => "David",
            'apellido_paterno' => "Barrita",
            'apellido_materno' => "Etc",
            'curp' => "Etc",
            'rfc' => "Etc",
            'foto' => "Etc",
            'tipo_usuario_id' => 1,
            'municipio_id' => 2458,
            'giro_negocio_id' => 1,
            'email' => "lalo@gg.com",
            'email_verified_at' => now(),
            'password' => bcrypt('eduardo1.1'), // password
            'remember_token' => Str::random(10),
            'created_at'=> '2018-01-01' // En un seeder siempre pasar la fecha 
        ]); 
        DB::table("users")->insert([
            'name' => "Lorena",
            'apellido_paterno' => "Bella",
            'apellido_materno' => "Hernandez",
            'curp' => "kndlkmlkdml",
            'rfc' => "Etc",
            'foto' => "Etc",
            'tipo_usuario_id' => 3,
            'municipio_id' => 2458,
            'giro_negocio_id' => 1,
            'email' => "lorena@gg.com",
            'email_verified_at' => now(),
            'password' => bcrypt('eduardo1.1'), // password
            'remember_token' => Str::random(10),
            'created_at'=> '2018-01-01' // En un seeder siempre pasar la fecha 
        ]); 
    }
}
