<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\C_estados_rep;
use Faker\Generator as Faker;

$factory->define(C_estados_rep::class, function (Faker $faker) {

    return [
        'clave' => $faker->word,
        'nombre' => $faker->word
    ];
});
