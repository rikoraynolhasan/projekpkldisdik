<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Head;
use Faker\Generator as Faker;

$factory->define(Head::class, function (Faker $faker) {

    return [
        'id_gtk' => $faker->randomDigitNotNull,
        'nama' => $faker->word,
        'jabatan' => $faker->word,
        'nip' => $faker->word,
        'foto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
