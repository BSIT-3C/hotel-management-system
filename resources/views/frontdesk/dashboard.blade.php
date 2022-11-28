<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .primary {
            background-color: rgb(24, 64, 196);
        }

        .secondary {
            background-color: rgb(225, 223, 210);
        }

        .tertiary {
            background-color: rgb(255, 255, 255);
        }

        .quarternary {
            background-color: rgb(223, 223, 223);
        }

        .dashed {
            border-style: dashed;
            border-top: 0px;
            border-left: 1px;
            border-bottom: 0px;
        }
    </style>
</head>

<body>
    <x-header />

    <section>
        <div class="container p-5">
            <div class="row">
                <div class="col">
                    <button class="btn btn-outline-primary p-4 w-100">Check In</button>
                </div>
                <div class="col">
                    <a href="{{ url('/guest-form') }}"><button class="btn btn-outline-primary p-4 w-100">Add Reservation</button></a>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary p-4 w-100">Add Transaction</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary p-4 w-100">Check Out</button>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="main_content_iner overly_inner quarternary">
            <div class="container-fluid p-2">
                <div class="ms-5">
                    <div class="col-4 mt-3 ms-5 ">
                        <h4 class="d-inline ms-4" style="font-family: Inter; font-size: 50px; font-style: Semi Bold; ">Dashboard</h4>
                        <h6 class="bi bi-calendar3 d-inline ms-4" style="font-family: Inter; font-size: 20px; font-style: Semi Bold;"> Today</h6>
                    </div>
                </div>
                <div class="container text-justified">
                    <div class="row ms-2 mt-2 mb-4">
                        <div class="ps-1 pe-2 col-md-3   border-3 border-dark dashed">
                            <h6 style="font-family: Inter; font-size: 24px; font-style: Semi Bold;">Checked In</h6>
                            <h6 style="font-family: Inter; font-size: 70px; font-style: normal;">86</h6>
                        </div>
                        <div class="ps-1 pe-2 col-md-3   border-3 border-dark dashed">
                            <h6 style="font-family: Inter; font-size: 23px; font-style: Semi Bold;">Available Rooms</h6>
                            <h6 style="font-family: Inter; font-size: 70px; font-style: normal;">3</h6>
                        </div>
                        <div class="ps-1 pe-2 col-md-3   border-3 border-dark dashed">
                            <h6 style="font-family: Inter; font-size: 23px; font-style: Semi Bold;">Reserved Rooms</h6>
                            <h6 style="font-family: Inter; font-size: 70px; font-style: Semi Bold;">5</h6>
                        </div>
                        <div class="ps-1 pe-2 col-md-3  border-primary">
                            <h6 style="font-family: Inter; font-size: 23px; font-style: Semi Bold;">Upcoming Check-outs</h6>
                            <h6 style="font-family: Inter; font-size: 70px; font-style: Semi Bold;">18</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bookings @chromosomes16 -->
    <section>
        <div class="container mt-3 p-4 pb-0">
            <div class="row">
                <div class="column left w-75">
                    <h2 style="font-family: Arial, Helvetica, sans-serif;">Recent Bookings </h2>
                </div>
                <div class="column right w-25">
                    <button type="button" class="btn secondary float-end">View All</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr style="background-color: #18408c; color: white; font-family: Arial, Helvetica, sans-serif">
                            <th scope="col">Name</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Room Type</th>
                            <th scope="col">Room Place</th>
                        </tr>
                    </thead>

                    <tbody class="border border-top border-5 border-white">
                        <tr style="background-color: #e1dfd2; font-family: Arial, Helvetica, sans-serif">
                            <td>Menchie Belarmino</td>
                            <td>09123456789</td>
                            <td>10 - 01 - 2022</td>
                            <td>09:00 - 18:00</td>
                            <td>Suite</td>
                            <td>4D</td>
                        </tr>
                    </tbody>
                    <tbody class="border border-top border-5 border-white">
                        <tr style="background-color: #e1dfd2; font-family: Arial, Helvetica, sans-serif">
                            <td>Crissa Olivario</td>
                            <td>09123456789</td>
                            <td>10 - 01 - 2022</td>
                            <td>09:00 - 18:00</td>
                            <td>Standard Room</td>
                            <td>4D</td>
                        </tr>
                    </tbody>
                    <tbody class="border border-top border-5 border-white">
                        <tr style="background-color: #e1dfd2; font-family: Arial, Helvetica, sans-serif">
                            <td>Cecile Cervantes</td>
                            <td>09123456789</td>
                            <td>10 - 01 - 2022</td>
                            <td>09:00 - 18:00</td>
                            <td>Luxury Room</td>
                            <td>4D</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>