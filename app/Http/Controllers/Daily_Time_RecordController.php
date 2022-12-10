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

    protected function timeIn() {
        DTR::create(["employee_id" => Auth::id(), "date" => date("Y-m-d")]);

        return back();
    }

<<<<<<< HEAD
        if ($number == 1) {
            DTR::create(["employee_id" => Auth::id(), "date" => $date]);
        } else {
            DB::table('dtr_logs')
                    ->where('employee_id', Auth::id())
                    ->where('check_out', null)
                    ->update(['check_out' => $time]);
        }
=======
    public function timeOut(){
        DB::table('dtr_logs')
        ->where('employee_id', Auth::id())
        ->where('check_out', NULL)
        ->update(['check_out' => date("Y-m-d h:i:s")]);
>>>>>>> 5612c07982073e1e4e2e751b376b2194f20762e6

        return back();
    }
}
