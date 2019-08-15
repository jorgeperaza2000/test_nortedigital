<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'product' => $faker->sentence(3, true),
        'price' => $faker->unique(true)->randomFloat(2, 1, 999),
    ];
});
