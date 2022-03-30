<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalDurationTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table("rental_durations")->insert([
      [
        "label" => "Day",
        "valueInHour" => 24
      ],
      [
        "label" => "Half-day",
        "valueInHour" => 12
      ]
    ]);
  }
}
