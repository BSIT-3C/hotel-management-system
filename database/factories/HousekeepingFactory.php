<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class HousekeepingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        /* Generating a random date and time within the current month. */
        $start = $this->faker->dateTimeThisMonth($max = 'now', $timezone = 'Asia/Manila');

        $time = new Carbon($start);

        /* Adding an hour to the start time. */
        $end = $time->addHour();

        return [

            'housekeeper_id' => Employee::where('position_id', 3)->pluck('id')->random(),
            'room_id' => Room::pluck('id')->random(),
            'start_time' => $start,
            'end_time' => $end
        ];
    }
}
