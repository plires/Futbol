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
        $this->call(StadiumsTableSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(ConvocationsTableSeeder::class);
        //$this->call(ConfirmedListsTableSeeder::class);
    }
}
