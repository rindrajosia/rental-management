<?php

namespace Database\Factories;

use App\Models\ItemType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemTypeFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */

    protected $model = ItemType::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => array_rand(["Real estate", "TV", "Hall", "Car"], 1)
        ];
    }
}
