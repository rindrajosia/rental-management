<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */

    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $city = $this->faker->city;
        $country = $this->faker->country;
        return [
            "firstName" => $this->faker->firstName,
            "lastName" => $this->faker->lastName,
            "sexe" => array_rand(["M", "F"], 1),
            "dateOfBirth" => $this->faker->dateTimeBetween("1990-01-01", "2001-12-30"),
            "placeOfBirth" => "$country, $city",
            "nationality" => $country,
            "city" => $city,
            "country" => $country,
            "address" => $this->faker->address,
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "idDocument" => array_rand(["ID card", "Passport", "Driver license"], 1),
            "numId" => $this->faker->creditCardNumber,
        ];
    }
}
