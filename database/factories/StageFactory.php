<?php

use Faker\Generator as Faker;

$factory->define(App\Stage::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'cp' => $faker->postcode,
        'city' => $faker->city,
        'state' => $faker->state,
        'country' => $faker->country,
        'phone' => $faker->phoneNumber,
    ];
});
