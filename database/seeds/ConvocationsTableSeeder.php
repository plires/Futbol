<?php

use Illuminate\Database\Seeder;
use App\Convocation;

class convocationSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      // Date Table convocations
      factory(Convocation::class, 10)->create();
   }
}
