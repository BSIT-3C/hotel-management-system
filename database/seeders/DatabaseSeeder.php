<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Account;
use App\Models\Employee;
use App\Models\Position;
use App\Models\RoomRate;
use App\Models\RoomType;
use App\Models\Blacklist;
use App\Models\Department;
use App\Models\Employee_Payroll;
use App\Models\RoomStatus;
use App\Models\Reservation;
use App\Models\Transaction;
use App\Models\Housekeeping;
use App\Models\PaymentMethod;
use App\Models\Payroll;
use App\Models\DTR;
use App\Models\Expenses;
use App\Models\Revenue;
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

        Department::factory()->count(5)->sequence(['department' => 'Front Office'], ['department' => 'Accounting'], ['department' => 'House Keeping'],['department' => 'Human Resource'],['department' => 'Guest Information Office'],)->create();

        Position::factory()->count(18)->sequence(
        ['position' => 'Receptionist', 'department_id' => 1],
        ['position' => 'Front Office Manager', 'department_id' => 1],
        ['position' => 'Front Office Assistant', 'department_id' => 1],
        ['position' => 'Senior Receptionist', 'department_id' => 1],
        ['position' => 'Concierge', 'department_id' => 1], 

        ['position' => 'Accountant', 'department_id' => 2],  
        ['position' => 'Accountant Supervisor', 'department_id' => 2],
        ['position' => 'Auditor', 'department_id' => 2],
        ['position' => 'Senior Cashier', 'department_id' => 2],
        ['position' => 'Cashier', 'department_id' => 2],
         
        ['position' => 'House Keeping Manager', 'department_id' => 3],
        ['position' => 'House Keeper', 'department_id' => 3],

        ['position' => 'Senior HR Manager', 'department_id' => 4],
        ['position' => 'HR manager', 'department_id' => 4],
        ['position' => 'HR assistant', 'department_id' => 4],
        ['position' => 'IT', 'department_id' => 4],

        ['position' => 'Reservation Accountant', 'department_id' => 5],
        ['position' => 'Reservation Auditor', 'department_id' => 5],)->create();

        Payroll::factory()->count(3)->sequence(['position_id' => 1, 'gross_amount' => 20000, 'total_deduction' => 2000], ['position_id' => 2, 'gross_amount' => 21000, 'total_deduction' => 2000], ['position_id' => 3, 'gross_amount' => 22000, 'total_deduction' => 2000])
            ->create();

        RoomStatus::factory()->count(7)->sequence(['room_status' => 'Vacant'], ['room_status' => 'Occupied'], ['room_status' => 'Out-of-Order'], ['room_status' => 'Clean'], ['room_status' => 'Dirty'], ['room_status' => 'Cleaning'], ['room_status' => 'Under Maintenance'])
            ->create();

        RoomType::factory()->count(4)->sequence(
            ['room_type' => 'Superior'],
            ['room_type' => 'Luxury'],
            ['room_type' => 'Club Room'],
            ['room_type' => 'Suite']
        )
            ->create();

        // edit this accordingly
        Role::factory()->count(3)->sequence(
            ['role' => 'Admin'],
            ['role' => 'Manager'],
            ['role' => 'Staff'],
            
        )
            ->create();

        PaymentMethod::factory()->count(3)->sequence(
            ['payment_method' => 'Cash'],
            ['payment_method' => 'Credit Card'],
            ['payment_method' => 'Debit Card'],
            ['payment_method' => 'Paypal'],
            ['payment_method' => 'GCash'],
            ['payment_method' => 'Other']
        )
            ->create();

        $this->createTenEntryPerFactory();

        HouseKeeping::factory()->count(1)->create();

        Employee_Payroll::factory()->count(2)->sequence(['position_id' => 3, 'employee_id' => 1,  'cut_off' => "2022-11-28"], ['position_id' => 3, 'employee_id' => 1,  'cut_off' => "2022-11-15"])
            ->create();
        DTR::factory()->count(1)->sequence(['employee_id' => 1])
            ->create();

        RoomRate::factory()->count(4)->sequence(
            ['room_id' => 1, 'rate' => 1000],
            ['room_id' => 2, 'rate' => 2000],
            ['room_id' => 3, 'rate' => 3000],
            ['room_id' => 4, 'rate' => 4000]
        )
            ->create();


        Blacklist::factory()->count(3)->create();

        //Accounting
        $this->createRevenue(2);
        
        Expenses::factory()->count(8)->sequence(
            ['type' => 'Maintenance', 'name' => 'Laundry', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Maintenance', 'name' => 'Soap and toiletries', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Maintenance', 'name' => 'Aircon', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Maintenance', 'name' => 'Beddings (sheets, pillows, etc.)', 'unit_price' => 1000, 'date' => '2022-12-01'],

            ['type' => 'Utility costs', 'name' => 'Electricity', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Utility costs', 'name' => 'Gas, Generator', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Utility costs', 'name' => 'Water', 'unit_price' => 1000, 'date' => '2022-12-01'],
            ['type' => 'Utility costs', 'name' => 'Cable TV and Internet services', 'unit_price' => 1000, 'date' => '2022-12-01'],
        )->create();
    }

    public function createTenEntryPerFactory()
    {
        $factoryArray = [
            'room' => Room::factory(),
            'employee' => Employee::factory(),
            'guest' => Guest::factory(),
            'reservation' => Reservation::factory(),
            'account' => Account::factory(),
            'transaction' => Transaction::factory(),
        ];

        foreach ($factoryArray as $key => $value) {
            for ($i = 1; $i <= 10; $i++) {
                if ($value == $factoryArray['account']) {
                    $value->create([
                        'employee_id' => $i,
                    ]);
                } else if ($value == $factoryArray['reservation']) {
                    $value->create([
                        'guest_id' => $i,
                    ]);
                } else if ($value == $factoryArray['transaction']) {
                    $value->create([
                        'reservation_id' => $i,
                        'guest_id' => $i,
                    ]);
                } else {
                    $value->create();
                }
            }
        }
    }
    public function createRevenue($count)
    {
        for ($count; $count > 0; $count--) {

            for ($i = 1; $i <= 4; $i++) {

                Revenue::factory()->create();
            }
        }
    }
}
