<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;


class ItemFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */

    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            "name" => $this->faker->lastName,
            "serialNum" => $this->faker->swiftBicNumber,
            "imageUrl" => $this->faker->imageUrl(),
            "isAvailable" => rand(0, 1),
            "item_type_id" => rand(1, 4)
        ];
    }
}
