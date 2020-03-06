<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_imagenes;
use Faker\Generator as Faker;

$factory->define(T_imagenes::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        't_evento_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
