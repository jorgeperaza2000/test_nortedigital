<?php

use Faker\Generator as Faker;

$factory->define(App\Detail::class, function (Faker $faker) {
    return [
                'quantity' => $quantity = $faker->numberBetween(1, 5),
                'product_id' => function () {
                    return factory(App\Product::class)->create()->id;
                },
                'price' => $price = $faker->randomFloat(2, 1, 999),
                'sub_total' => $price * $quantity,
            ];
});
