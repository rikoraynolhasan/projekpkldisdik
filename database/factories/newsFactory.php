<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\news;
use Faker\Generator as Faker;

$factory->define(news::class, function (Faker $faker) {

    return [
        'judul_artikel' => $faker->word,
        'artikel' => $faker->text,
        'tanggal' => $faker->word,
        'gambar' => $faker->word
    ];
});
