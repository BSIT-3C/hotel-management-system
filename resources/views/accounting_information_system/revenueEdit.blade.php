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

<!DOCTYPE html>
<html lang="en">
<head>
    <title> REVENUE </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i">

    <!-- FOR JQUERY -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

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

    .button {
        border: none;
        color: white;
        padding: 2px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: #1840C4;
    }

    .button1:hover {
        background-color: black;
    }

    .button2 {
        background-color: firebrick;
    }

    .button2:hover {
        background-color: black;
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
            <th>Date</th>
            <th>Room Type</th>
            <th>Occupied</th>
            <th>Amount</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

            @foreach ($revenues as $revenue)
                <tr>
                    <td>{{$revenue["date"]}}</td>
                    <td>{{$revenue["room_type_id"]}}</td>
                    <td>{{$revenue["occupied"]}}</td>
                    <td>{{$revenue["amount"]}}</td>
                    <td>
                        <!-- Call to action buttons -->
                        <button type="button" class="button button1"><span class="bi bi-pencil"></span></button>
                        <button type="button" class="button button2"><span class="bi bi-trash"></span></button>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
    </div>

</body>
</html>

<script>
    $('table').DataTable();
</script>
