<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->firstname,
        'surname' => $faker->lastname,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'user' => strtolower($faker->unique->firstname),
        'password' => bcrypt(str_random(10)),
        'type' => 0,
        'avatar' => $faker->imageUrl($width = 300, $height = 300),
        'remember_token' => str_random(10),
    ];
});

