<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Models\Cart;

$factory->define(Cart::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\Models\User::class),
    ];
});
