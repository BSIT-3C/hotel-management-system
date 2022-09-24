<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $firstName = $this->faker->firstName;
        $middleName = $this->faker->lastName;
        $lastName = $this->faker->lastName;
       
        return [
            'name' => $firstName . ' ' . $middleName . '. ' . $lastName,
            'address' => $this->faker->address,
            'email' => $firstName . $middleName .  '.' . $lastName . '@example.com',
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
