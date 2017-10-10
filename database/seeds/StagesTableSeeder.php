<?php

use Illuminate\Database\Seeder;
use App\Stage;

class stageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Date Table stages default
      factory(Stage::class)->create([
        'name' => 'Homero',
        'address' => 'Beaucheff 636',
        'phone' => '11 4909 9954',
        'cp' => 1257,
        'city' => 'Boedo',
        'state' => 'Buenos Aires',
        'country' => 'Argentina',
      ]);

      // Date Table stages
      factory(Stage::class, 5)->create();
    }
}