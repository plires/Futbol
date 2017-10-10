<?php

use Illuminate\Database\Seeder;
use App\ConfirmedList;

class confirmedListSeeder extends Seeder
{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run()
   {
      // Date Table convocations
      factory(ConfirmedList::class, 10)->create();
   }
}
