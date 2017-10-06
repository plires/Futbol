<?php

use Faker\Generator as Faker;

$factory->define(App\Stadium::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->unique()->address
    ];
});