<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_maestro;
use Faker\Generator as Faker;

$factory->define(T_maestro::class, function (Faker $faker) {

    return [
        'nombre_completo' => $faker->word,
        'estado_id' => $faker->randomDigitNotNull,
        'numero_contacto' => $faker->word,
        'edad' => $faker->word,
        'correo_electronico' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
