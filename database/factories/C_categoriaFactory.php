<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_categoria;
use Faker\Generator as Faker;

$factory->define(C_categoria::class, function (Faker $faker) {

    return [
        'descripcion' => $faker->word,
        'accion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
