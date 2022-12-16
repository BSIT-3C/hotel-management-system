<?php

namespace App\Http\Controllers;

use App\Models\Employee_Payroll;
use App\Models\Payroll;
use App\Models\Revenue;

/**
 * Controller class for accounting module
 *
 * @author  Documented/Comments by @FN-FAL113 (Quality Assurance Lead)
 * @author  Logic by Accounting module members
 */ 
class AccountingController extends Controller
{
    
    // this is just an initial template - 
    // please handle the needed or change existing logic 


     /**
     * home page for accounting module
     * 
     * @return View
     */ 
    public function index(){
        return view('/accounting_information_system/home');
    }

    /**
     * for displaying payroll
     * 
     * @return View with the employee payrolls object
     */ 
    public function payrolls(){
        $payrolls = Employee_Payroll::all();

        return view('/accounting_information_system/payrolls', [
            'payrolls' => $payrolls
        ]);        
    }

    /**
     * for editing payroll
     *
     * @param Employee_Payroll $payroll the employee payroll object
     * 
     * @return View with the employee payroll object
     */ 
    public function payrollEdit(Employee_Payroll $employee_payrolls){
        return view('/accounting_information_system/payrollEdit', [
            'employee_payroll' => $employee_payrolls
        ]);        
    }

    /**
     * for printing payroll
     *
     * @param Employee_Payroll $payroll the employee payroll object
     * 
     * @return View with the employee payroll object
     */ 
    public function payrollPrint(Employee_Payroll $employee_payrolls){     
        return view('/accounting_information_system/payrollPrint', [
            'employee_payroll' => $employee_payrolls
        ]);        
    }

    /**
     * for editing revenue
     * 
     * @return View
     */ 
    public function revenueEdit(){
        return view('/accounting_information_system/revenueEdit', [
            "revenues" => Revenue::all()
        ]);
    }

    /**
     * for printing revenue
     *
     * @return View 
     */ 
    public function revenuePrint(){
        return view('/accounting_information_system/revenuePrint');
    }

    /**
     * for edidint expenses
     *
     * @return View 
     */ 
    public function expensesEdit(){
        return view('/accounting_information_system/expensesPrint');
    }

     /**
     * for printing expenses
     *
     * @return View 
     */ 
    public function expensesPrint(){
        return view('/accounting_information_system/expensesPrint');
    }

}
