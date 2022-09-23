<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // accountant, accounting clerk

        \App\Models\Department::factory()->count(3)->sequence(['department' => 'Front Office'], ['department' => 'Accounting'],['department' => 'House Keeping'],)
            ->create();

        \App\Models\Position::factory()->count(3)->sequence(['position' => 'Receptionist', 'department_id' => 1], ['position' => 'Accountant', 'department_id' => 2], ['position' => 'House Keeper', 'department_id' => 3])
            ->create();

        \App\Models\RoomType::factory()->count(4)->sequence(['room_type' => 'Superior'], ['room_type' => 'Luxury'], ['room_type' => 'Club Room'], ['room_type' => 'Suite'])
            ->create();

        \App\Models\RoomStatus::factory()->count(3)->sequence(['room_status' => 'Vacant'], ['room_status' => 'Occupied'], ['room_status' => 'Out-of-Order'])
            ->create();

        \App\Models\Employee::factory(10)->create();
        \App\Models\Room::factory(10)->create();
        \App\Models\Housekeeping::factory(3)->create();
        // \App\Models\User::factory(10)->create();
    }
}
