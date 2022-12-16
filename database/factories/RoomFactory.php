<?php

namespace Database\Factories;

use App\Models\RoomStatus;
use App\Models\RoomSubStatus;
use App\Models\RoomTypeBed;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 1;
        return [
            'room_number' => $number++,
            'room_status_id' => RoomStatus::pluck('id')->random(),
            'room_sub_status_id' => RoomSubStatus::pluck('id')->random(),
            'room_type_beds_id' => rand(1, 12),
        ];
    }
}
