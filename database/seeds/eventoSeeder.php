<?php

use Illuminate\Database\Seeder;
use App\Models\T_evento;

class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de branding',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller finanzas',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de pitch',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de redes sociales',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Networking',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de branding',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-26 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller naranja',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-27 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller ventas',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-27 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de xx',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'Diferenciarse es hoy cada vez más difícil,2​ ya que los costes de los productos son 
        similares. Por ello, la clave de los negocios está en el branding, es decir, en el poder de
         la marca como elemento diferenciador. Para Tom Peters, declarado «gurú de gurúes» por 
         The Economist y la revista Fortune,3​ lo que constituye la diferenciación parte precisamente 
         de los intangibles de una empresa: valor, credibilidad y singularidad de una marca. 
         Así lo explica en el libro que publicó bajo el título El meollo del branding. A partir de 
         su teoría de «las tres leyes físicas del marketing» ―beneficios patentes, un motivo ',
        'fecha' => "2020-09-27 00:00:00",
        'inicio' => "10:00:00",
        'fin' => "11:00:00",
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'IODEMC',
        'tipo_evento_id' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Anahuac',
        'tipo_evento_id' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'City Banamex',
        'tipo_evento_id' => 4,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
      
    }
}
