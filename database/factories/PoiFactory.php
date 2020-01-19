<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poi;
use Faker\Generator as Faker;

$factory->define(Poi::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
    ];
});
