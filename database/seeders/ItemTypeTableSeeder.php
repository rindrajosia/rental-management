<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("item_types")->insert([
          ["name" => "Real estate"],
          ["name" => "TV"],
          ["name" => "Hall"],
          ["name" => "Car"]
        ]);
    }
}
