<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // edit this if you want to change the default values
        $hotelRoles = ['Front Desk', 'Housekeeping', 'Accounting', 'Manager', 'Admin'];

        return [
            'role' => array_rand($hotelRoles, 1)
        ];
    }
}
