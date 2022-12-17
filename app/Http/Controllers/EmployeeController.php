<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Account;
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

    protected function show(Employee $list)
    {
        return view('employee_information_system.profile', [
            'list' => $list
        ]);
    }
    protected function edit(Employee $list)
    {
        $list_roles = $list->roles;

        $array = null;

        $user_roles = Auth::user()->roles->all();
        $user_array = null;

        foreach ($list_roles as $role) {

            $array[] = $role->role_id;
        }

        foreach ($user_roles as $role) {

            $user_array[] = $role->role_id;
        }
        $is_admin = false;
        if ($user_array) {
            if (in_array(1, $user_array)) {
                $is_admin = true;
            }
        }
        return view('employee_information_system.edit', [
            'list' => $list,
            'Departments' => Department::all(),
            'Roles' => Role::all(),
            'Positions' => Position::all(),
            'is_admin' => $is_admin,
            'user_roles' => $array == null ? [] : $array
        ]);
    }

    // update employee
    public function update(Employee $list)
    {
        //dd(request()->all());        
        $formFields = request()->validate([
            'work_start' => ['required', 'string'],
            'work_end' => ['required', 'string'],
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
            'position_id' => ['string']
        ]);
        //dd($list->id);
        $list->update($formFields);
        $roles = request()->roles;
        // dd($roles);

        if ($roles) {
            EmployeeRole::where('employee_id', $list->id)->delete();
            foreach ($roles as $role) {
                if (count(EmployeeRole::where('employee_id', $list->id)->where('role_id', $role)->get()) == 0) {
                    EmployeeRole::create(['employee_id' => $list->id, "role_id" => $role]);
                }
            }
        }

        return redirect("/employee_information_system/profile/{$list->id}");
    }

    // delete employee
    protected function delete(Employee $list)
    {

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

    // unverified employee
    protected function unverified() { 
        return view('employee_information_system/unverified');
    }

    protected function department(){
        $employees=Employee::all();
        return view('/employee_information_system/department',['Lists'=>$employees]); 
    }

}
