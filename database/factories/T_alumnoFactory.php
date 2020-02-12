<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_alumno;
use Faker\Generator as Faker;

$factory->define(T_alumno::class, function (Faker $faker) {

    return [
        'nombre_completo' => $faker->word,
        'nombre_tutor' => $faker->word,
        'estado_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
