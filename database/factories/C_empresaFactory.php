<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_empresa;
use Faker\Generator as Faker;

$factory->define(C_empresa::class, function (Faker $faker) {

    return [
        'nombre' => $faker->word,
        'telefono' => $faker->word,
        'titular' => $faker->word,
        'ubicacion' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
