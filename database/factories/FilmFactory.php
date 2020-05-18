<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Film::class, function (Faker $faker) {
    return [
        'kode_film' => '',
        'judul_film' => $faker->name,
        'genre_film' => '',
        'negara' => $faker->country,
        'tahun' =>$faker->RandomElement(['2000', '1999']),
        'harga' => $faker->RandomElement(['1', '2']),
        'status' => $faker->RandomElement(['Ready', 'Sold']),
    ];
});
