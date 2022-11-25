<?php

namespace App\Http\Controllers;

use App\Models\Payroll;

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
     * for editing payroll
     *
     * @param Payroll $payroll the payroll object
     * 
     * @return View with the payroll object
     */ 
    public function payrollEdit(Payroll $payroll){
        return view('/accounting_information_system/payrollEdit', [
            'payroll' => $payroll
        ]);        
    }

    /**
     * for printing payroll
     *
     * @param Payroll $payroll the payroll object
     * 
     * @return View with the payroll object
     */ 
    public function payrollPrint(Payroll $payroll){     
        return view('/accounting_information_system/payrollPrint', [
            'payroll' => $payroll
        ]);        
    }

    /**
     * for editing revenue
     * 
     * @return View
     */ 
    public function revenueEdit(){
        return view('/accounting_information_system/revenueEdit');
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
