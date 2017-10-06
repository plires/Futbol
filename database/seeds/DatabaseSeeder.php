<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
        $this->call(confirmedListSeeder::class);
        $this->call(convocationSeeder::class);
        $this->call(stadiumSeeder::class);
    }
}
