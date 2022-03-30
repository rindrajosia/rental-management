<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ItemTypeTableSeeder::class);
        // \App\Models\User::factory(10)->create();
        Item::factory(10)->create();
        Client::factory(10)->create();
        $this->call(RentalDurationTableSeeder::class);
        $this->call(AuthorizationTableSeeder::class);
        $this->call(RentalStatusTableSeeder::class);
        $this->call(RoleTableSeeder::class);
    }
}
