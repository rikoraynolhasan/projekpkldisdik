<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Gtk;
use Faker\Generator as Faker;

$factory->define(Gtk::class, function (Faker $faker) {

    return [
        'gtk' => $faker->word,
        'visi' => $faker->text,
        'misi' => $faker->text,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
