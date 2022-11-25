
@php
    $i = 0;
   // dd($payrolls[0]->id);
@endphp

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">

    <!-- FOR JQUERY AND DATEPICKER  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.js"></script>

    <!-- FOR BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</head> 

<style>
    .rectangle{
        height: 15ch;
        width: auto;
        background-color: #1840C4;
        margin-top: auto;
        margin-left: auto;
        margin-right: auto;
    }

    h1{
        font-size: 50px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: 10px;
    }

    .Search {
        margin-top:30px;
        right: 10px;
        margin-right: 20px;
    }

    .total{
        width:70%;
        height: 50px;
        font-size: 25px;
        margin-left: auto;
        margin-right: auto;
        padding: 5px 25px;
        background-color: #E1DFD2;
        box-shadow: 0 10px 10px 0 #E1DFD2;
        text-align: left;
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<body>
    <!--Header-->
    <div class="rectangle">
        <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" style="position:absolute; left:40px; top:20px" height="100px" width="120px">
    </div>
    
    <div class="d-flex justify-content-center">
        <h1 class="my-4"><b>Payroll</b></h1>
    </div>
    
    <div class="row">
        <div class="col-10 mx-auto mb-3">
            <table id="table" class="table table-striped">
                <!--Titles-->
                <thead>
                    <tr>
                        <th>ID NUMBER</th>
                        <th>EMPLOYEE</th>
                        <th>POSITION</th>
                        <th>DAY</th>
                        <th>GROSS AMOUNT EARNED</th>
                        <th>TOTAL DEDUCTIONS</th>
                        <th>NET AMOUNT DUE</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <!--Grid For Data-->
                <tbody>
                    @foreach ($payrolls as $payroll)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$payroll->employee->getName()}}</td>
                            <td>{{$payroll->employee->position_id}}</td>
                            <td>{{$i}}</td> {{--- change nyo to para sa day, dummy data lng ngayon to ---}}
                            <td>{{$payroll->employee->position->payroll[0]->gross_amount}}</td>
                            <td>{{$payroll->employee->position->payroll[0]->total_deduction}}</td>
                            <td>{{$payroll->employee->position->payroll[0]->getTotalSalary()}}</td>
                            <td>to be implmented</td>
                        </tr>
                    @endforeach            
                </tbody>
            </table>
        </div>
    </div>
    

</body>
</html>

<script>
    function available(date) {
        if (date.getDate() == '15' || date.getDate() == '28') {
            return [true, '', 'Available']
        } else {
            return [false, '', 'Unavailable']
        }
    }

    $('#date').datepicker({ beforeShowDay: available })

    $('#table').DataTable(); 
</script>