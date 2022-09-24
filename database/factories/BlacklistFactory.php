<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlacklistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $reasonArray = ['Late Check-in', 'Late Check-out', 'Damaged Room', 
        'Unpaid Bill', 'Illegal Activity', 'Other'];

        return [
            'guest_id' => Guest::pluck('id')->random(),
            'reason' => array_rand($reasonArray, 1),
        ];
    }
}
