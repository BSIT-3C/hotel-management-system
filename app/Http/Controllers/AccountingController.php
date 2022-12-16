<?php

namespace App\Http\Controllers;

use App\Models\Employee_Payroll;
use App\Models\Expenses;
use App\Models\Payroll;

use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;
use Illuminate\Http\Request;
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
    public function index()
    {
        return view('/accounting_information_system/home');
    }

    /**
     * for displaying payroll
     * 
     * @return View with the employee payrolls object
     */
    public function payrolls()
    {
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
    public function payrollEdit(Employee_Payroll $employee_payrolls)
    {
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
    public function payrollPrint(Employee_Payroll $employee_payrolls)
    {
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
    public function revenuePrint()
    {
        return view('/accounting_information_system/revenuePrint');
    }

    /**
     * for edidint expenses
     *
     * @return View 
     */
    public function expensesEdit()
    {
        // return view('/accounting_information_system/expensesEdit');
        return redirect('/accounting/expensesEdit/maintenance');
    }

    /**
     * for printing expenses
     *
     * @return View 
     */
    public function expensesPrint()
    {
        return view('/accounting_information_system/expensesPrint');
    }
    public function expensesPrint2()
    {
        return view('/accounting_information_system/expensesPrint2');
    }


    public function expensesMaintenance()
    {
        $maintenance = Expenses::where('type', 'Maintenance')->get();
        return view('/accounting_information_system/expenses/maintenance', ["list" => $maintenance]);
    }
    public function expensesRoomsList()
    {
        $rooms_list = Expenses::where('type', 'Room Type')->get();
        return view('/accounting_information_system/expenses/rooms_list', ["list" => $rooms_list]);
    }
    public function expensesUtilityCost()
    {
        $utility_cost = Expenses::where('type', 'Utility costs')->get();
        return view('/accounting_information_system/expenses/utility_cost', ["list" => $utility_cost]);
    }

    public function edit($id)
    {
        $maintenance = Expenses::find($id);
        return view('/accounting_information_system/expenses/edit', ["list" => $maintenance]);
    }

    public function update(Expenses $id)
    {
        // dd(request()->all());
        $formFields = request()->validate([
            'name' => ['required', 'string'],
            'type' => ['required', 'string'],
            'unit_price' => ['required', 'string'],
        ]);

        // dd($formFields);

        $res = $id->update($formFields);

        return redirect("/accounting/expensesEdit");
    }

    public function store(Expenses $expenses)
    {

        // dd($formFields);

        $res = $expenses->create(['name' => request()->name, 'type' => request()->type, 'unit_price' => request()->unit_price, 'date' => request()->date . '-01',]);
        // dd($res);

        return redirect("/accounting/expensesEdit");
    }
    public function delete(Expenses $id)
    {

        $id->delete();
        return back();
    }

    public function new()
    {
        return view('/accounting_information_system/expenses/new');
    }


    public function expenses()
    {
        $expenses = DB::table('expenses')->select('date')
            ->distinct()->get();

        $dates = null;
        foreach ($expenses as $item) {
            $full  = explode('-', $item->date);
            array_pop($full);
            $dates[] = array("year" => $full[0], "month" => $full[1]);
            // $final = implode('-', $full);
        }


        // dd($dates);
        return view('accounting_information_system.expenses', ['list' => $dates]);
    }

    public function expensesShow(Request $request)
    {
        $full  = explode('-', $request->date);
        $year = $full[0];
        $month = $full[1];

        $utility_cost = Expenses::whereYear('date', $year)->whereMonth('date', $month)->where('type', 'Utility costs')->get() ?? null;
        $maintenance = Expenses::whereYear('date', $year)->whereMonth('date', $month)->where('type', 'Maintenance')->get() ?? null;
        $rooms_list = Expenses::whereYear('date', $year)->whereMonth('date', $month)->where('type', 'Room Type')->get() ?? null;


        $m = $maintenance->sum('unit_price');
        $r = $rooms_list->sum('unit_price');
        $u = $utility_cost->sum('unit_price');

        $data = array("maintenance" => $maintenance, "room_type" => $rooms_list, "utility_cost" => $utility_cost);
        $totals = array("maintenance" => $m, "room_type" => $r, "utility_cost" => $u);
        $total = $m + $r + $u;
        
        return view('/accounting_information_system/expensesPrint', [
            "list" => $data, "total" => $total, "type_total" => $totals
        ]);
    }
}
