<?php

use Illuminate\Database\Seeder;
use App\ConfirmedListsSeed;

class confirmedListSeeder extends Seeder
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
			'convocation_id' => 1,
			'user_id' => 1
		]);
    }
}
