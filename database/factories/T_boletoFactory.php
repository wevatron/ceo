<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\T_boleto;
use Faker\Generator as Faker;

$factory->define(T_boleto::class, function (Faker $faker) {

    return [
        't_evento_id' => $faker->randomDigitNotNull,
        'usuario_id' => $faker->randomDigitNotNull,
        'dislike' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
