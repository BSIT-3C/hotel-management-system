<!DOCTYPE html>
<html>

<head>
    <title>Check out</title>
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
    </style>
</head>

<body>
    <x-header />
    <div class="container">

        <div class="my-5">
            <!-- Search bars -->
            <div class="row align-items-end my-5">
                <div class="col-5">
                    <span class="d-block" id="inputGroup-sizing-sm">Guest</span>
                    <div class="d-flex">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <span class="d-block" id="inputGroup-sizing-sm">Reservation</span>
                    <span class="d-block" id="inputGroup-sizing-sm">Room Number</span>
                    <div class="d-flex">
                        <div class="input-group input-group-sm mb-3">
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards -->

            <div class="row">
                <!-- Guest Card -->
                <div class="col-4">
                    <div class="card shadow-sm">
                        <h5 class="card-header fw-bold">Guest Information</h5>
                        <div class="card-body">
                            <div class="row my-1">
                                <span class="col-4 fw-bold">Name </span>
                                <span class="col-8 text-secondary">Tyrion Lannister</span>
                            </div>
                            <div class="row my-1">
                                <span class="col-4 fw-bold">Address </span>
                                <span class="col-8 text-secondary">Casterly Rock</span>
                            </div>
                            <div class="row my-1">
                                <span class="col-4 fw-bold">Country</span>
                                <span class="col-8 text-secondary">Croatia</span>
                            </div>
                            <div class="row my-1">
                                <span class="col-4 fw-bold">Email </span>
                                <span class="col-8 text-secondary text-decoration-underline">tylonlannister@gmail.com</span>
                            </div>
                            <div class="row my-1">
                                <span class="col-4 fw-bold">Phone </span>
                                <span class="col-8 text-secondary text-decoration-underline">09029130323</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reservation Card -->
                <div class="col-8">
                    <div class="card shadow-sm">
                        <h5 class="card-header fw-bold">Stay Information</h5>
                        <div class="card-body row" style="padding: 34px;">
                            <div class="col-7">
                                <div class="row">
                                    <span class="col-5 fw-bold">Room</span>
                                    <span class="col">056</span>
                                </div>
                                <div class="row">
                                    <span class="col-5 fw-bold">Arrival</span>
                                    <span class="col-7">
                                        December 21, 2022
                                        <span class="ms-2 bi bi-clock"> 9:00 AM</span>
                                    </span>
                                </div>
                                <div class="row">
                                    <span class="col-5 fw-bold">Departure</span>
                                    <span class="col-7">
                                        December 23, 2022
                                        <span class="ms-2 bi bi-clock"> 9:00 AM</span>
                                    </span>
                                </div>
                                <div class="row">
                                    <span class="col-5 fw-bold">Reservation Type</span>
                                    <span class="col">Reservation Type</span>
                                </div>
                                <div class="row">
                                    <span class="col-5 fw-bold">Rate:</span>
                                    <span class="col">Php 4,599</span>
                                </div>
                                <div class="row">
                                    <span class="col-5 fw-bold">Total:</span>
                                    <span class="col">Php 18,396</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">
                                    <span class="col-3 fw-bold">Night</span>
                                    <span class="col-1">2</span>
                                </div>
                                <div class="row">
                                    <span class="col-3 fw-bold">Adult</span>
                                    <span class="col-1">2</span>
                                </div>
                                <div class="row">
                                    <span class="col-3 fw-bold">Child</span>
                                    <span class="col-1">1</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <button class="btn btn-primary float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#paymentdetails" aria-controls="paymentdetails">
            Proceed to payment details
        </button>

        <!-- Payment Details Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="paymentdetails" aria-labelledby="paymentdetailsLabel" style="width:40%">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="paymentdetailsLabel">Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body m-3 ms-4">
                <!-- Timestamp -->
                <div class="mb-3">
                    <span class="d-block fs-2">9:33 AM</span>
                    <span class="d-block">December 25, 2022</span>
                </div>
                <!-- Reservation details -->
                <div>
                    <span>Transaction ID:</span>
                    <span>0000124</span>
                </div>
                
                <div>
                    <span>Guest name:</span>
                    <span>Tyronne Lannister</span>
                </div>

                <div class="my-2">
                    <div class="quarternary p-3 rounded-3">
                        <div class="row">
                            <span class="col-5">Room type:</span>
                            <span class="col-5">One-bed superior room</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Room number:</span>
                            <span class="col-5">056</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Rate:</span>
                            <span class="col-5">Php 4,599</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Scheduled nights:</span>
                            <span class="col-5">2</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Extended nights:</span>
                            <span class="col-5">2</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Total nights:</span>
                            <span class="col-5">4</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Occupancy dates:</span>
                            <span class="col-5">December 21 - 25, 2022</span>
                        </div>
                        <div class="row">
                            <span class="col-5">Total rate:</span>
                            <span class="col-5">Php 18,396</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <span class="col-5">Received amount:</span>
                    <div class="col-5">
                        <div class="input-group">
                            <span class="input-group-text">Php</span>
                            <input class="form-control" type="number">
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <span class="col-5">Change:</span>
                    <span class="col-5">Php 604</span>
                </div>
                <div class="row my-2">
                    <span class="col-5">Received by:</span>
                    <span class="col-5">Juana Dela Cruz</span>
                </div>

                <button type="button" class="btn btn-primary float-end m-3" id="notificationBtn">Finish transaction</button>
            </div>

            <!-- Toast notification -->
            <div>
                <div class="toast fixed-bottom m-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="{{ asset('assets/tranquil.png') }}" class="rounded me-2" alt="Tranquil Logo" style="width: 24px;">
                        <strong class="me-auto">Check out</strong>
                        <small>Just now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Room 056 has been checked out and set for cleaning.
                    </div>
                </div>
                <script>
                    const toastTrigger = document.getElementById('notificationBtn')
                    const toastLiveExample = document.getElementById('notification')
                    if (toastTrigger) {
                        toastTrigger.addEventListener('click', () => {
                            const toast = new bootstrap.Toast(toastLiveExample)

                            toast.show()
                        })
                    }
                </script>
            </div>
        </div>




    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>