<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		// Admin Table users
		factory(User::class)->create([
		  'name' => 'Pablo',
		  'surname' => 'Lires',
		  'email' => 'pablolires@gmail.com',
		  'phone' => '566-7555',
		  'user' => 'plires',
		  'password' => bcrypt('123456'),
		  'type' => 1,
		  'avatar' => 'https://lorempixel.com/300/300/?19792',
		]);

		// Date Table users
		factory(User::class, 10)->create();
    }
}
