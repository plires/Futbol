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
        $this->call(stadiumSeeder::class);
        //$this->call(ConvocationsTableSeeder::class);
        //$this->call(ConfirmedListsTableSeeder::class);
    }
}
