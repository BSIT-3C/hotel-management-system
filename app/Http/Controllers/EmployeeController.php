<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    protected function index() {
        return view('employee_information_system.employee_list', [
            'Lists' => Employee::all()
        ]);
    }

    protected function show(Employee $list) {

        $lists = DB::table('employees')
            ->join('roles', 'employees.id', '=', 'roles.employee_id')
            ->join('positions', 'employees.id', '=', 'positions.employee_id')
            ->join('departments', 'employees.id', '=', 'departments.employee_id')
            ->where('roles.employee_id', $list->id)
            ->where('positions.employee_id', $list->id)
            ->where('departments.employee_id', $list->id)
            ->select(['employees.*', 'role', 'position', 'department'])
            ->first();

        return view('employee_information_system.profile', [
            'list' => $lists
        ]);
    }
    protected function edit(Employee $list) {

        $lists = DB::table('employees')
            ->join('roles', 'employees.id', '=', 'roles.employee_id')
            ->join('positions', 'employees.id', '=', 'positions.employee_id')
            ->join('departments', 'employees.id', '=', 'departments.employee_id')
            ->where('roles.employee_id', $list->id)
            ->where('positions.employee_id', $list->id)
            ->where('departments.employee_id', $list->id)
            ->select(['employees.*', 'role', 'position', 'department'])
            ->first();

        return view('employee_information_system.edit', [
            'list' => $lists
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
            'role' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
        ]);

        $list->update($formFields);

        DB::table('positions')
        ->where('employee_id', $list->id)
        ->update(['position' => $formFields['position']]);

        DB::table('departments')
        ->where('employee_id', $list->id)
        ->update(['department' => $formFields['department']]);

        DB::table('roles')
        ->where('employee_id', $list->id)
        ->update(['role' => $formFields['role']]);

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

    protected function department() {
        $Lists = DB::table('employees')
            ->join('roles', 'employees.id', '=', 'roles.employee_id')
            ->join('positions', 'employees.id', '=', 'positions.employee_id')
            ->join('departments', 'employees.id', '=', 'departments.employee_id')
            ->select('employees.first_name', 'employees.last_name', 'employees.id', 'roles.role', 'positions.position', 'departments.department')
            ->get();

        return view('employee_information_system.department', [
            'Lists' => $Lists
        ]);
    }

}