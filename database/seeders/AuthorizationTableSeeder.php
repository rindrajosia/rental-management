<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("authorizations")->insert([
          ["name" => "Add client"],
          ["name" => "Check client"],
          ["name" => "Edit client"],

          ["name" => "Add rental"],
          ["name" => "Check rental"],
          ["name" => "Edit rental"],

          ["name" => "Add item"],
          ["name" => "Check item"],
          ["name" => "Edit item"],

        ]);
    }
}
