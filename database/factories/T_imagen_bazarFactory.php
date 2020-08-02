<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_imagen_bazar;
use Faker\Generator as Faker;

$factory->define(T_imagen_bazar::class, function (Faker $faker) {

    return [
        't_bazar_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
