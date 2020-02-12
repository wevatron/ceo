<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_municipio;
use Faker\Generator as Faker;

$factory->define(C_municipio::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
