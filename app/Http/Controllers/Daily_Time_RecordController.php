<?php

namespace App\Http\Controllers;

use App\Models\DTR;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Daily_Time_RecordController extends Controller
{
    protected function show() {

        $Lists = DB::table('dtr_logs')
                ->join('employees', 'dtr_logs.employee_id', '=', 'employees.id')
                ->select('employees.first_name', 'employees.last_name', 'employees.id', 'dtr_logs.date', 'dtr_logs.check_in', 'dtr_logs.check_out')
                ->get();

      
        return view('employee_information_system.dtr_list', [
            'Lists' => $Lists
        ]);
    }

    protected function show_employee_dtr(Employee $employee) {

        $dtrs = DB::table('dtr_logs')
                    ->select('date', 'check_in', 'check_out')
                    ->where('employee_id', $employee->id)
                    ->get();

        $employee = DB::table('employees')
            ->join('roles', 'employees.id', '=', 'roles.employee_id')
            ->join('positions', 'employees.id', '=', 'positions.employee_id')
            ->join('departments', 'employees.id', '=', 'departments.employee_id')
            ->where('roles.employee_id', $employee->id)
            ->where('positions.employee_id', $employee->id)
            ->where('departments.employee_id', $employee->id)
            ->select(['employees.*', 'role', 'position', 'department'])
            ->first();
                  
        return view('employee_information_system.employee_dtr_list', [
            'employee' => $employee,
            'dtrs' => $dtrs
        ]);
    }

    protected function timeIn() {
        DTR::create(["employee_id" => Auth::id(), "date" => date("Y-m-d")]);

        return back();
    }

    public function timeOut(){
        DB::table('dtr_logs')
        ->where('employee_id', Auth::id())
        ->where('check_out', NULL)
        ->update(['check_out' => date("Y-m-d h:i:s")]);

        return back();
    }
}
