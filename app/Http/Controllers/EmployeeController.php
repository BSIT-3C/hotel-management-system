<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use App\Models\User;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Department;
use App\Models\EmployeeRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    protected function index() {
        $Lists = DB::table('employees')
                ->join('accounts', 'employees.id', 'accounts.employee_id')
                ->where('is_verified', '1')
                ->get();

        return view('employee_information_system.employee_list', [
            'Lists' => $Lists
        ]);
    }

    protected function show(Employee $list) {
        return view('employee_information_system.profile', [
            'list' => $list
        ]);
    }
    protected function edit(Employee $list) {
        return view('employee_information_system.edit', [
            'list' => $list,
            'Departments' => Department::all(),
            'Roles' => Role::all(),
            'Positions' => Position::all()
            
        ]);
    }

    // update employee
    public function update(Employee $list){        
        $formFields = request()->validate([
            'work_start'=>['required' , 'string'],
            'work_end'=>['required', 'string'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'position' => ['required', 'string'],
            'department' => ['required', 'string'],
            'roles' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
        ]);

        $list->update($formFields);

        return redirect("/employee_information_system/profile/{$list->id}");
    }

    // delete employee
    protected function delete(Employee $list) {

        if ($list->id == Auth::user()->id) {
            abort(403, 'Already Logged in!');
        }

        DB::table('employees')
                    ->where('id', $list->id)
                    ->update(['deleted_at' => date("Y-m-d h:i:s")]);

        return back();
    }

    // verification employee table
    protected function verification() {

        $Lists = DB::table('employees')
                ->join('accounts', 'employees.id', 'accounts.employee_id')
                ->where('is_verified', '0')
                ->get();

        return view('employee_information_system.verification', [
            'Lists' => $Lists
        ]);
    }


    // verifying an employee
    protected function verified(Account $list) {
        $list->update(["is_verified" => '1']);
        
        return redirect('employee_information_system/employees');
    }

}