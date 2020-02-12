<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_aula;
use Faker\Generator as Faker;

$factory->define(C_aula::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'capacidad' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
