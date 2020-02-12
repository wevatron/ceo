<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_persona;
use Faker\Generator as Faker;

$factory->define(T_persona::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'apellido' => $faker->word,
        'curp' => $faker->word,
        'rfc' => $faker->word,
        'universidad_id' => $faker->randomDigitNotNull,
        'tipo_usuario_id' => $faker->randomDigitNotNull,
        'municipio_id' => $faker->randomDigitNotNull,
        'giro_negocio_id' => $faker->randomDigitNotNull,
        'evento_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
