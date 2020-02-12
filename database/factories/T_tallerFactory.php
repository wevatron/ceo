<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_taller;
use Faker\Generator as Faker;

$factory->define(T_taller::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'horario_id' => $faker->randomDigitNotNull,
        'estado_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
