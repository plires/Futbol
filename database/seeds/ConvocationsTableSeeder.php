<?php

use Illuminate\Database\Seeder;

class convocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		factory(ConfirmedListsSeed::class)->create([
			'date' => 'Pablo',
			'time' => 'sadsadsa',
			'stadium_id' => 1,
			'confirmation' => '1',
		]);
    }
}
