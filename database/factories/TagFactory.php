<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Tag;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
