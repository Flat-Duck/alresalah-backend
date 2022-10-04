<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Order;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'number' => $faker->randomNumber,
        'total' => $faker->randomFloat(2, 0, 9999),
        'user_id' => factory(App\Models\User::class),
    ];
});
