<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=hotel_management_system', 'root', '');

// set error
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->prepare('
        SELECT * FROM `revenues`
    ');

$statement->execute();
$revenues = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<! DOCTYPE html>
<html lang="en">
<head>
    <title> REVENUE </title>
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
body {
    margin: 0;
    background: white;
}

.navbar {
    background:#1840C4;
}

img {
    margin-left: 15px;
}

h1{
    font-size: 50px;
    font-family: 'Times New Roman', Times, serif;
    margin-left: 10px;
    margin-top: 10px;
}

#logo {
    margin-left: 20px
}

table caption {
    padding: .5em 0;
}

table.dataTable th{
    white-space: nowrap;
}

table.dataTable td {
    white-space: nowrap;
}

.p {
    text-align: center;
    padding-top: 140px;
    font-size: 14px;
}

</style>

<body>
    <nav class="navbar navbar-expand-md">
        <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" alt="logo" width="80" height="40">
    </nav>

    <h1><b> REVENUE</b></h1>

    <hr>

    <div class="container">

      <table class="table table-bordered table-hover dt-responsive">
        <thead>
          <tr>
            <th> Date </th>
            <th> Superior </th>
            <th> Luxury </th>
            <th> Suite </th>
            <th> Club Room </th>
            <th> Total </th>
          </tr>
        </thead>
        <tbody>

            @foreach ($revenues as $revenue_data)
                <tr>
                    <td>{{$revenue_data["date"]}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>{{$revenue_data["amount"]}}</td>
                </tr>
            @endforeach

        </tbody>
      </table>
    </div>

<script>
$('table').DataTable();
</script>

</body>
</html>
