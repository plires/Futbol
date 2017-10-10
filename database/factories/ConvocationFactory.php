<?php

use Faker\Generator as Faker;

$factory->define(App\Convocation::class, function (Faker $faker) {
	return [
		'date' => $faker->date($format = 'd-m-Y', $max = 'now'),
		'time' => $faker->time($format = 'H:i', $max = 'now') .' Hs',
		'stage_id' => rand(1, 5),
		'confirmation' => rand(0, 1),
	];
});
