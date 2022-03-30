<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rental_status")->insert([
          ["name" => "StandBy"],
          ["name" => "In progress"],
          ["name" => "Completed"],
        ]);
    }
}
