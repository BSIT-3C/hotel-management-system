<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Role;
use App\Models\User;
use App\Models\Account;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected function store(Request $request)
    {

        $formFields = $request->validate([
            'work_start' => ['required', 'string'],
            'work_end' => ['required', 'string'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'position' => ['required', 'string'],
            'department' => ['required', 'string'],
            'role' => ['required', 'string'],
            'contact_number' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        if ($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('profile', 'public');
        }

        $formFields['password'] = bcrypt($formFields['password']);

        $user = Employee::create(Arr::except($formFields, ['password']));

        Account::create(["employee_id" => $user->id, "password" => $formFields['password'], "role_id" => null]);

        Position::create(["employee_id" => $user->id, "position" => $formFields['position']]);

        Department::create(["employee_id" => $user->id, "department" => $formFields['department']]);

        Role::create(["employee_id" => $user->id, "role" => $formFields['role']]);

        auth()->login($user);

        return redirect('/home');
    }

    public function login(){
        $formFields = request()->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        $employee = Employee::where("email", $formFields["email"])->first();

        if(!$employee || $employee->deleted_at != null){
            return back()->withErrors((['auth' => 'Invalid credentials!']));
        }

        $account = Account::where("employee_id", $employee->id)->first();
        
        if(Hash::check($formFields["password"], $account->password)){
            auth()->login($employee);

            return redirect('/home');
        }

        return back()->withErrors((['auth' => 'Invalid credentials!']));
    }
}
