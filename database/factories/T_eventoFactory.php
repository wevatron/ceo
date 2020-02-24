<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_evento;
use Faker\Generator as Faker;

$factory->define(T_evento::class, function (Faker $faker) {

    return [
        'nombre_evento' => $faker->word,
        'descripcion_evento' => $faker->word,
        'cupo' => $faker->randomDigitNotNull,
        'url_img' => null,
        'tipo_evento_id' => $faker->numberBetween(1,2),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
