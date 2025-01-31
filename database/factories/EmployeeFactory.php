<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {

    return [
        'id_gtk' => $faker->randomDigitNotNull,
        'nama' => $faker->word,
        'jabatan' => $faker->word,
        'nip' => $faker->word,
        'foto' => $faker->word,
        'karyawan' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
