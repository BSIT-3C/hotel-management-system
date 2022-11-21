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
        
        <div class="d-flex justify-content-between">
            <h1 class="d-inline"><b> PAYROLL</b></h1>

            <!--Search Button: Java Script-->
            <div class="Search d-inline">
                <div class="md-form md-outline input-with-post-icon datepicker">
                    <input type="date" name="date" id="date" readonly="readonly" size="12"/>
                    <button type="Search">Search</button>
                    <i class="fas fa-calendar input-prefix" tabindex=0></i>
    
                <script>function available(date) {
                    if (date.getDate() == '15' || date.getDate() == '28') {
                        return [true, '', 'Available']
                    } else {
                        return [false, '', 'unAvailable']
                    }
                }
                $('#date').datepicker({ beforeShowDay: available })</script>
                </div>
            </div>
        </div>

        <hr style=""/>
        <!--Update-->
        Latest Update....

        <table class="table table-bordered">
            <!--Titles-->
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">ID NUMBER</th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">POSITION</th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">DAY</th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">GROSS AMOUNT EARNED</th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">TOTAL DEDUCTIONS</th>
                    <th style="background-color: #DFDFDF; border: 1px solid black" scope="col">NET AMOUNT DUE</th>
                </tr>
            </thead>
            
            <!--Grid For Data-->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        
    <!--Total Computation-->
        <table class ="total">
            <th>Total:</th>
        </table>
    </body>

</html>