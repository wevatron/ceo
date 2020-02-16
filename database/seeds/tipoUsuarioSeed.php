<?php

use Illuminate\Database\Seeder;

class tipoUsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'root',
            'descripcion' => 'Root'    
        ]);

        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'administrador',
            'descripcion' => 'Administrador'    
        ]);

        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'Otros',
            'descripcion' => 'Otros'
            
        ]);

        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'Emprendimiento',
            'descripcion' => 'Emprendedor'    
        ]);
        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'Empresariales',
            'descripcion' => 'Empresario'
           
        ]);
        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'Estudiantes',
           'descripcion' => 'Estudiante'
           
        ]);
        DB::table("c_tipo_usuarios")->insert([
            'valor' => 'Maestros',
            'descripcion' => 'Maestro'
        ]);
        

    }
}
