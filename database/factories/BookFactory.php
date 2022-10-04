<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;

use App\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'cover_image' => $faker->text(255),
        'title' => $faker->sentence(10),
        'ISBN' => $faker->text(255),
        'edition' => $faker->text(255),
        'format' => $faker->text(255),
        'Author' => $faker->text(255),
        'quantity' => $faker->randomNumber,
        'price' => $faker->randomFloat(2, 0, 9999),
        'sale_price' => $faker->randomNumber(2),
        'description' => $faker->sentence(15),
        'featured' => $faker->boolean,
        'on_sale' => $faker->boolean,
        'level_id' => factory(App\Level::class),
        'publisher_id' => factory(App\Publisher::class),
    ];
});
