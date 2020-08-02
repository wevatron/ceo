<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_bazar;
use Faker\Generator as Faker;

$factory->define(T_bazar::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'descripcion' => $faker->word,
        'video' => $faker->word,
        'facebook' => $faker->word,
        'instagram' => $faker->word,
        'youtube' => $faker->word,
        'twitter' => $faker->word,
        'web' => $faker->word,
        'c_categorias_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
