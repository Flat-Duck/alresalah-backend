<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Level;

$factory->define(Level::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
