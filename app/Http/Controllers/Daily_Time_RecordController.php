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

                  
        return view('employee_information_system.employee_dtr_list', [
            'employee' => $employee,
            'dtrs' => $dtrs
        ]);
    }

    protected function store($number) {

        $date = date("Y-m-d");
        $time = date("Y-m-d h:i:s");

        if ($number == 1) {
            DTR::create(["employee_id" => Auth::id(), "date" => $date]);
        } else {
            DB::table('dtr_logs')
                    ->where('employee_id', Auth::id())
                    ->where('date', $date)
                    ->update(['check_out' => $time]);
        }

        return back();
    }
}
