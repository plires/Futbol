<?php

use Faker\Generator as Faker;

$factory->define(App\ConfirmedList::class, function (Faker $faker) {
    return [
		'convocation_id' => rand(1, 10),
		'user_id' => $faker->unique->numberBetween($min = 1, $max = 10),
    ];
});
