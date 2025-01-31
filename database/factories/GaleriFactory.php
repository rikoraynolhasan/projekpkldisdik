<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Galeri;
use Faker\Generator as Faker;

$factory->define(Galeri::class, function (Faker $faker) {

    return [
        'foto_url' => $faker->word,
        'nama' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
