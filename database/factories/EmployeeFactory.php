<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $fname = $this->faker->firstName();
        $mname = $this->faker->lastName();
        $lname = $this->faker->lastName();
        $email = Str::lower("{$fname}{$mname}.{$lname}@gmail.com");

        return [
            'first_name' => $fname,
            'middle_name' => $mname,
            'last_name' => $lname,
            // 'email' => $this->faker->safeEmail(),
            'email' => $email,
            'address' => $this->faker->state(),
            'contact' => $this->faker->phoneNumber(),
            'position_id' => Position::pluck('id')->random(),
            'work_hours' => 0,
        ];
    }
}
