
@php
    $i = '';
@endphp

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RevenueEdit</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<style>

body {
    margin: 0;
    background: white;
}

.navbar {
    background:#1840C4;
}

h1{
    font-size: 50px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 10px;
    margin-top: 10px;
}

.bootstrap-iso {
    float: right;
    margin-top: 25px;
    margin-bottom: 15px;
    margin-right: 20px;
}

table {
            border: 1px solid black;
            width: 100%;
        }

        table thead tr td {
            border: 1px solid black;
            text-align: center;
            background-color: #E1DFD2;
        }

        table tbody tr td {
            padding: 15px;
        }

        tbody tr td {
            border: 1px solid black;
        }

        .club {
            grid-column: 1/3;

        }

        .cell_date {

            grid-column: 1/3;
        }

        .col_total {
            grid-column: 1/3;

        }

</style>

  <body>
    <nav class="navbar navbar-expand-md">
        <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" alt="logo3" width="80" height="40">
    </nav>

    <h1><b> REVENUE</b></h1>

    <div class="bootstrap-iso">
           <form method="post">
               <input type="date" id="date" name="date">
               <button style="background-color: #E1DFD2" class="btn btn-light" name="search" type="search">Search</button>
           </form>
    </div>

    <hr>
    <div class="container">
        Latest Update...

        <table id="revenue">
            <thead>
                <tr>
                    <td id="a">Date</td>
                    <td id="b">Superior</td>
                    <td id="c">Luxury</td>
                    <td id="d">Suite</td>
                    <td class="club">Club Room</td>
                    <td class="col_total">Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="a"></td>
                    <td id="b"></td>
                    <td id="c"></td>
                    <td id="d"></td>
                    <td class="club"></td>
                    <td class="col_total"></td>
                </tr>
                <tr>
                    <td id="a"></td>
                    <td id="b"></td>
                    <td id="c"></td>
                    <td id="d"></td>
                    <td class="club"></td>
                    <td class="col_total"></td>
                </tr>
                <tr>
                    <td id="a"></td>
                    <td id="b"></td>
                    <td id="c"></td>
                    <td id="d"></td>
                    <td class="club"></td>
                    <td class="col_total"></td>
                </tr>
            </tbody>
        </table>
    </div>
  </body>
</html>

<script>
     $('#revenue').DataTable();
</script>
