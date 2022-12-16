<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Guest Information Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <style>
        input[type=text],
        select {
            width: 100%;
            padding: 5px 6px;
            margin: 4px 0;

            border-radius: 5px;
            box-sizing: border-box;

        }

        body {
            background-color: #ced4da;
        }

        h2 {
            text-align: center;
            color: #1840C4;
        }

        input {
            border-radius: 5px
        }
    </style>

</head>

<body>
    <!--Header-->
    <div class="contianer">
        <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-3 border-bottom"
            style="background-color: #1840C4 ;">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
                <img class="ps-5 img-fluid" src="{{asset("assets/tranquil.png")}}" alt="logo" style="height: 50px; width: auto;">
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
    <div style="text-shadow: 2px 2px 2px rgb(173, 173, 173);">
        <h2>GUEST INFORMATION FORM</h2>
    </div>

    <div class="container p-3">
        <div style="background-color:white; padding:50px; border-radius: 10px">

            <form action="/guestinfo/reservation" method="get">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="Name">Name</label>
                        <div class="row">
                            <div class="col">
                                <input name="first_name" type="text" class="form-control" placeholder="First Name"
                                    required
                                    pattern="[a-zA-Z ]{1,30}"oninvalid="this.setCustomValidity('Enter First Name Here')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                            <div class="col">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name"
                                    id="validationDefault02" value="" required
                                    pattern="[a-zA-Z ]{1,30}"oninvalid="this.setCustomValidity('Enter Last Name Here')"
                                    oninput="this.setCustomValidity('')">
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row">

                            <div class="col-6">
                                <label for="gender">Gender</label>
                                <select name="gender" class="form-select" id="gender"
                                    aria-label="Default select example">
                                    <option value="">-- Select Gender --</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="rnts">Rather Not To Say</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label for="Birth Date">Birth Date</label>
                                <input name="birthdate" type="date" class="form-control" placeholder="Birth Date">
                            </div>

                        </div>
                    </div>

                </div>


                <div class="row mt-3">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail"
                                aria-describedby="emailHelp" placeholder="Enter Email" required>
                        </div>
                    </div>

                    <div class="col-3">
                        <label for="id_type">ID Type</label>
                        <select name="id_type" class="form-select" id="ID Type"
                            aria-label="Default select example">
                            <option value="id type">-- Select ID Type --</option>
                            <option value="passport">Passport</option>
                            <option value="sss umid">SSS UMID</option>
                            <option value="philhealth">PHILHEALTH</option>
                            <option value="driver's license">Driver's License</option>
                        </select>
                    </div>

                    <div class="col-3">
                        <label for="id_number">ID Number</label>
                        <input name="id_number" type="number" class="form-control" placeholder=""
                            pattern="[0-9]*">
                    </div>

                </div>


                <div class="row mt-3">
                    <div class="col-6">
                        <label for="Address">Address</label>

                        <select id="Address" class="form-select" required>
                            <option value="">-- Select Address --</option>
                            <option value="local">Local</option>
                            <option value="foreign">Foreign</option>
                        </select>
                        <textarea class="form-control" type="text" name="complete_address" id="entered_address" value="" readonly> </textarea>
                    </div>



                    <div class="col-6">
                        <label for="marital_status">Marital Status</label>
                        <select name="marital_status" id="marital_statu" class="form-select" required>
                            <option value="">-- Select Marital Status--</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="separated">Separated</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                            <option value="life_partner">Life Partner</option>
                        </select>
                    </div>

                </div>


                <div class="row mt-3">

                    <div class="col-3">
                        <label for="Contact Number" style="margin-bottom: 4px;">Contact Number</label>
                        <div class="row">
                            <div class="col">
                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                                <input id="phone" type="number" name="phone" class="form-control" required
                                    pattern="[1,9]"oninvalid="this.setCustomValidity('Enter Contact Number')"
                                    oninput="this.setCustomValidity('')">
                                <script>
                                    const phoneInputField = document.querySelector("#phone");
                                    const phoneInput = window.intlTelInput(phoneInputField, {
                                        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="submit">Reserve</button>
                        <button class="btn btn-primary me-md-2" type="button">Check in</button>
                        <button type="button" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <!--- Modal --->
    <button type="hidden" class="btn" data-bs-toggle="modal" data-target="#myModal1"></button>
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">LOCAL ADDRESS</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row pt-1">

                        <div class="col-6">
                            <div class="mb-2">
                                <label for="ph-region">Region</label>
                                <select id="ph-region" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="ph-city">City</label>
                                <select id="ph-city" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-2">
                                <label for="ph-province">Province</label>
                                <select id="ph-province" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="ph-barangay">Barangay</label>
                                <select id="ph-barangay" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" id="btn_local" class="btn btn-primary"
                            data-bs-dismiss="modal">CONFIRM</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <button type="hidden" class="btn" data-bs-toggle="modal" data-target="#myModal2"></button>
    <div class="modal fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">FOREIGN ADDRESS</h4>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row pt-1">

                        <div class="col-6">
                            <div class="mb-2">
                                <label for="country">Country</label>
                                <select id="country" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <label for="state">State</label>
                                <select id="state" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-2">
                                <label for="city">City</label>
                                <select id="city" class="form-select" aria-label="Default select example">
                                    <option value="" selected>-- Select --</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" id="btn_foreign" class="btn btn-primary"
                            data-bs-dismiss="modal">CONFIRM</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                            aria-label="Close">CANCEL</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

<script>
    const selector = document.querySelector("#Address")

    selector.onchange = (e) => {
        if (e.target.value === "local") {
            $("#myModal1").modal("show")
        } else if (e.target.value === "foreign") {
            $("#myModal2").modal("show")
        }
    }

    $('#btn_local').on('click', function() {
        const entered_region = $('#ph-region').val()
        const entered_province = $('#ph-province').val()
        const entered_city = $('#ph-city').val()
        const entered_barangay = $('#ph-barangay').val()
        $('#entered_address').val(entered_barangay + ', ' + entered_city + ', ' + entered_province + ', ' +
            entered_region + ', Philippines')

    })

    $('#btn_foreign').on('click', function() {
        const entered_country = $('#country').val()
        const entered_state = $('#state').val()
        const entered_city = $('#city').val()
        $('#entered_address').val(entered_city + ', ' + entered_state + ', ' +
            entered_country)

    })
</script>
<script src="{{ asset('js/ph_address_selector.js') }}" defer></script>
<script src="{{ asset('js/foreign_address_selector.js') }}" defer></script>
