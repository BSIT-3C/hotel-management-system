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
        return view('employee_information_system.profile', [
            'list' => $list
        ]);
    }
    protected function edit(Employee $list) {
        return view('employee_information_system.edit', [
            'list' => $list
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

}