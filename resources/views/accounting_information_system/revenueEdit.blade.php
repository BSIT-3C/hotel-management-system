<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RevenueEdit</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

        table thead tr {
            display: grid;
            grid-template-columns: repeat(15, 1fr);

        }

        table tbody tr td {
            padding: 15px;
        }

        thead td:nth-child(1) {
            grid-column: 1/3;
            grid-row: 1/3;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        thead td:nth-child(2) {
            grid-column: 3/6;
        }

        thead td:nth-child(3) {
            grid-column: 6/9;
        }

        thead td:nth-child(4) {
            grid-column: 9/12;
        }

        thead td:nth-child(5) {
            grid-column: 3;
        }

        thead td:nth-child(6) {
            grid-column: 10;
        }

        thead td:nth-child(7) {
            grid-column: 11;
        }

        tbody tr td {
            border: 1px solid black;
        }

        tbody tr {
            display: grid;
            grid-template-columns: repeat(15, 1fr);
            text-align: center;

        }

        .club {
            display: flex;
            align-items: center;
            justify-content: center;

            grid-column: 12/14;
            grid-row: 1/3;
        }

        .cell_date {

            grid-column: 1/3;
        }

        .cell_club {

            grid-column: 12/14;
        }

        .cell_total {

            grid-column: 14/16;
        }

        .col_total {
            display: flex;
            align-items: center;
            justify-content: center;

            text-align: center;
            grid-column: 14/16;
            grid-row: 1/3;
        }

</style>

  <body>
    <nav class="navbar navbar-expand-md">
        <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" alt="logo3" width="80" height="40">
            <span class="navbar-toggler-icon"></span>
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

        <table>
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
                    <td class="cell_date"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="cell_club"></td>
                    <td class="cell_total"></td>
                </tr>
                <tr>
                    <td class="cell_date"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="cell_club"></td>
                    <td class="cell_total"></td>
                </tr>
                <tr>
                    <td class="cell_date"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="cell_club"></td>
                    <td class="cell_total"></td>
                </tr>
                <tr>
                    <td class="cell_date"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="cell_club"></td>
                    <td class="cell_total"></td>
                </tr>
                <tr>
                    <td class="cell_date"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="cell_club"></td>
                    <td class="cell_total"></td>
                </tr>
    </div>
</body>
</html>
