<?php

use Illuminate\Database\Seeder;
use App\Stadium;

class stadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stadiums = collect(['Homero Manzi', 'La Calera', 'Alberdi', 'El Anden']);

        $stadiums->each(function ($value) {
          factory(Stadium::class)->create([
              'name' => ucfirst($value),
              'address' => ucfirst($value)
          ]);
        });
    }
}
