<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Publisher;

$factory->define(Publisher::class, function (Faker $faker) {
    return [
        'Name' => $faker->name,
    ];
});
