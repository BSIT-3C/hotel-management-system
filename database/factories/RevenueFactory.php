<?php

namespace Database\Factories;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RevenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        static $i = 1;
        $occupied = $this->faker->numberBetween(10, 20);
        $amount = $occupied * 10000;
        static $date = '';

        if ($i == 1) {
            $date = $this->faker->date('Y-m');
        }

        if ($i > 4) {
            $date = $this->faker->date('Y-m');
            $i = 1;
        }
        return [
            'room_type_id' => $i++,
            'occupied' => $occupied,
            'amount' => $amount,
            'date' => $date . '-01',
        ];
    }
}
