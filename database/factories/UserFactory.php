<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
    * The name of the factory's corresponding model.
    *
    * @var string
    */

    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'sexe' => array_rand(["M", "F"], 1),
            'telephone1' => $this->faker->unique()->phoneNumber,
            'telephone2' => $this->faker->unique()->phoneNumber,
            'idDocument' => array_rand(["ID card", "Passport", "Driver license"], 1),
            'numId' => $this->faker->unique()->creditCardNumber,
            'email' => $this->faker->unique()->safeEmail(),
            //'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'photo' => $this->faker->imageUrl(),
            //'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
