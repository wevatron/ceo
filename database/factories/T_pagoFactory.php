<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_pago;
use Faker\Generator as Faker;

$factory->define(T_pago::class, function (Faker $faker) {

    return [
        'colegiatura' => $faker->randomDigitNotNull,
        'descuento' => $faker->randomDigitNotNull,
        'comentario' => $faker->word,
        'alumno_id' => $faker->randomDigitNotNull,
        'taller_id' => $faker->randomDigitNotNull,
        'empresa_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
