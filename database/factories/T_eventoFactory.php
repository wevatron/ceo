<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_evento;
use Faker\Generator as Faker;

$factory->define(T_evento::class, function (Faker $faker) {

    return [
        'nombre_evento' => $faker->word,
        'descripcion_evento' => $faker->word,
        'nombre_conferencista' => $faker->word,
        'cargo' => $faker->word,
        'empresa' => $faker->word,
        'bio' => $faker->word,
        'cupo' => $faker->randomDigitNotNull,
        'tipo_evento_id' => $faker->numberBetween(1,2),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
