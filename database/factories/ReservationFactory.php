<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'room_id' => $this->faker->numberBetween(1, 10),
            'guest_id' => $this->faker->numberBetween(1, 10),
            'employee_id' => $this->faker->numberBetween(1, 10),
            'check_in' => $this->faker->date(),
            'check_out' => $this->faker->date()
        ];
    }
}
