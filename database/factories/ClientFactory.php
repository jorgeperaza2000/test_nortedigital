<?php

use Faker\Generator as Faker;

$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
    ];
});