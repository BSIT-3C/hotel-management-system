<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use App\Models\EmployeeRole;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    protected function index()
    {
        return view('employee_information_system.employee_list', [
            'Lists' => Employee::all()
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
        //$user_role=$list::find(auth()->id)->get();
        //dd(Auth::user()->roles);
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
            'user_roles' => $array
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

        if ($list->role != "Admin" || $list->id == Auth::user()->id) {
            abort(403, 'Already Logged in!');
        }

        $list->delete();
        return back();
    }
}
