@extends('layouts.app')

@section('content')
    <div class="container bg-white rounded p-5" style="width: 90%; margin-top: 130px;">
        <h1 style="font-family: Times New Roman, Times, serif">Accounting Information System</h1>

        <div class="d-inline-flex gap-2">
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Payroll
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/accounting/payrolls">View</a></li>
                        <li><a class="dropdown-item" href="/accounting/payrollEdit/1">Edit</a></li>
                        <li><a class="dropdown-item" href="/accounting/payrollPrint/1">Print</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Expenses
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/accounting/expenses">View</a></li>
                        <li><a class="dropdown-item" href="/accounting/expensesEdit">Edit</a></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Revenue
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/accounting/revenueEdit">View</a></li>
                        <li><a class="dropdown-item" href="/accounting/revenuePrint">Print</a></li>
                    </ul>
                </div>
            </div>
        </div>


        {{-- <a class="btn btn-secondary dropdown-toggle btn-lg " href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Revenue
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/accounting/revenueEdit">Edit</a>
                <a class="dropdown-item" href="/accounting/revenuePrint">Print</a>
            </div>


            <a class="btn btn-secondary dropdown-toggle btn-lg" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Expenses
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/accounting/expensesEdit">Edit</a>
                <a class="dropdown-item" href="/accounting/expenesPrint">Print</a>
            </div> --}}
    </div>
@endsection
