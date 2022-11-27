<?php

namespace App\Http\Controllers;

use App\Models\Daily_Time_Record;
use App\Models\Daily_Time_Redord;
use App\Models\DTR;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;

class Daily_Time_RecordController extends Controller
{
    protected function show() {
        return view('employee_information_system.dtr_list', [
            'Lists' => DTR::all()
        ]);
    }

    protected function show_employee_dtr(Employee $list) {
        return view('employee_information_system.employee_dtr_list', [
            'list' => $list
            // 'List' => Daily_Time_Record::all()
        ]);
    }
}
