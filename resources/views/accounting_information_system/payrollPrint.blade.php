<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXPENSES</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<style>
    @page {
        /* margin: 0mm; */
    }

    @media print {
        .print {
            position: absolute;
            top: 0;
            left: 0px;
            width: 100%;
            margin: 0 !important;

            /* border: 1px solid red !important; */
            padding: 0 !important;
            /* transform: scale(50%) */
            /* display: none */
            border: 0 !important;
            color-adjust: exact;
        }

        .header .row>div {
            background: var(--bs-gray-200)
        }

        h6 {
            font-size: .8em !important;
        }

        body {
            zoom: 75%;
            padding: 0 !important;
            margin: 0 !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        } */

        .no-print {
            display: none
        }
    }
</style>


<body>
    <div class="container-fluid ">

        <div class="container m-5 p-5 rounded border print">
            <div class="row">
                <div class="col">
                    <img alt="tranquil13611" src="{{ asset('images/playground_assets/tranquil13611-w3f2-200h.png') }}"
                        class="a-i-s-expenses-view-tranquil11" />
                </div>
                <div class="col ">
                    <div class="row">
                        <div class="col d-flex align-items-end flex-column">
                            <p class="text-muted" style="margin: 0 !important">ISSUE DATE</p>
                            <h5>{{ now()->format('F d, Y') }}</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5 mx-1 ">
                <div class="text-center mb-5">
                    <h1>PAYSLIP</h1>
                    <p class="text-muted">(Cut-off Date: {{ $employee_payroll->cut_off->format('F d, Y') }})</p>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <div class="col text-center">
                            <label class="text-muted" for="">First Name</label>
                            <h5>{{ $employee_payroll->employee->first_name }}</h5>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col text-center">
                            <label class="text-muted" for="">Last Name</label>
                            <h5>{{ $employee_payroll->employee->last_name }}</h5>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col text-center">
                            <label class="text-muted" for="">Position</label>
                            <h5>{{ $employee_payroll->position->position }}</h5>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="mb-3 text-center">
                        <label class="text-muted" for="">Gross Amount</label>
                        <h5>₱{{ $employee_payroll->position->payroll->first()->gross_amount }}</h5>
                    </div>
                    <div class="mb-3 text-center">
                        <label class="text-muted" for="">Total Deduction</label>
                        <h5>₱{{ $employee_payroll->position->payroll->first()->total_deduction }}</h5>
                    </div>
                    <div class="mb-3 text-center">
                        <label class="text-muted" for="">Salary</label>
                        <h5>₱{{ $employee_payroll->position->payroll->first()->getTotalSalary() }}</h5>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mb-5 no-print" style="margin-right: 8em">
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" id="printBtn" onclick="window.print()"><i
                        class="bi bi-printer-fill"></i> Print</button>
            </div>
        </div>
    </div>

</body>

</html>
