<?php

use Illuminate\Database\Seeder;
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
		factory(User::class)->create([
		  'name' => 'Pablo',
		  'surname' => 'Lires',
		  'telephone' => '566-7555',
		  'user' => 'plires',
		  'password' => 'pass',
		  'type' => '1',
		  'avatar' => 'avatar',
		  'email' => 'p@ll.com'
		]);
    }
}
