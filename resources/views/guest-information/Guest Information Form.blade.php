<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Information Form</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        body{
            background-color:#ced4da;
        }
        h2{
            text-align: center;
            color: #1840C4;
        }
        input{
            border-radius: 5px
        }
    </style>
</head>
<body>
    <!--Header-->
    <div class="contianer">
        <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-3 border-bottom" style="background-color: #1840C4 ;">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
            <img class="ps-5 img-fluid"  src="img logo.png" alt="logo" style="height: 50px; width: auto;">
        </div>
    
        <ul class="nav pe-5">
            <li class="nav-item"><a href="#" class="nav-link text-white" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Logs</a></li>
            <li class="nav-item active"><a href="#" class="nav-link text-white">Search</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Create</a></li>
            <li class="nav-item"><a href="#" class="nav-link text-white">Accounts</a></li>
            <li class="nav-item active"><a href="#" class="nav-link text-white">Profile</a></li>
        </ul>
        </header>
    </div>
    <!--Header-->
    <div style="text-shadow: 2px 2px 2px rgb(173, 173, 173)">
        <h2>Guest Information Form</h2>
    </div>
    <div class="container">
        <div style="background-color:white; padding:45px; border-radius: 10px">
            <form>
                <div class="row">
                    <div class="col-6">
                        <label for="Name">Name</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="Gender">Gender</label>
                                <input type="text" class="form-control" placeholder="Gender">
                            </div>
                            <div class="col-5">
                                <label for="Birthday">Birthday</label>
                                <input type="date" class="form-control" placeholder="Gender">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="col-6">
                            <label for="Guest ID">Guest ID</label>
                            <input type="text" class="form-control" placeholder="ID">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" placeholder="address">
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="City">City</label>
                                <input type="text" class="form-control" placeholder="city">
                            </div>
                            <div class="col-6">
                                <label for="Postal/Zip-code">Postal/Zip-code</label>
                                <input type="text" class="form-control" placeholder="code">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="ID type">ID type</label>
                                <input type="text" class="form-control" placeholder="id type">
                            </div>
                            <div class="col-6">
                                <label for="ID number">ID number</label>
                                <input type="text" class="form-control" placeholder="id number">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="Contact Number">Contact Number</label>
                                <input type="text" class="form-control" placeholder="contact number">
                            </div>
                            <div class="col-6">
                                <label for="Nationality">Nationality</label>
                                <input type="text" class="form-control" placeholder="nationality">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="Marital Status">Marital Status</label>
                                <input type="text" class="form-control" placeholder="marital status">
                            </div>
                            <div class="col-6">
                                <label for="Room Number">Room Number</label>
                                <input type="text" class="form-control" placeholder="room number">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <label for="Invoice Number">Invoice Number</label>
                                <input type="text" class="form-control" placeholder="invoice number">
                            </div>
                            <div class="col-6">
                                <div class="mt-3">
                                    <a href="https://youtu.be/c6ASQOwKkhk">
                                        <button type="button" class="btn btn-primary btn-lg w-100">Submit</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>