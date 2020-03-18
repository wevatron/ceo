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
       // factory(T_evento::class,150)->create();
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de realidad aumentada',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
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
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller apps ios y android',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Taller de finanzas ',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 1,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Conferencia de Facebook',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Conferencia de Google',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Conferencia de logiteck',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('t_eventos')->insert([
        'nombre_evento' => 'Conferencia de Hanna',
        'descripcion_evento' => 'Taller para contruir una app desde el inicio',
        'nombre_conferencista' => 'Manuel Eduardo Benitez Flores',
        'cargo' => 'Director',
        'empresa' => 'Edyno estudio',
        'bio' => 'La integración de las nuevas tecnologías en el aula es una realidad incuestionable. Pero, aunque la oferta de soluciones tecnológicas es cada vez mayor, muchos profesionales se sienten inseguros a la hora de utilizar este contenido para responder a las necesidades de su programación educativa.
        A lo largo de este TALLER se desgranarán las claves del éxito de la tecnología de Realidad Aumentada en el sector educativo. En especial, en aquellos casos en los que se integra junto a conceptos como el storytelling, la gamificación y las inteligencias múltiples.',
        'cupo' => 30,
        'fecha' => date('Y-m-d'),
        'inicio' => date('H:i:s'),
        'fin' => date('H:i:s'),
        'cupoFake' => 35,
        'tipo_evento_id' => 2,
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
