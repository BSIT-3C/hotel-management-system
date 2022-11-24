<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /**
         * For testing
         */
        // $position_salary = Payroll::where('position_id', 1)->first();
        // return view('home')->with(["total_salary" => $position_salary->getTotalSalary()]);

        return view('home');
    }
}
