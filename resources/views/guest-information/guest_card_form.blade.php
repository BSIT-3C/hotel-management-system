<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest Card Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color: #DFDFDF;">

   
    <div class="contianer"><!--HEADER-->
      <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #1840C4 ;">
        
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
          <img class="ps-5 img-fluid"  src="header_logo.jpg" alt="logo" style="height: 50px; width: auto;">
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
    </div><!--HEADER--> 

   <main>
        <div class="container shadow-sm p-3 mb-5 bg-body rounded">
            <div class="col">  
                <div class="card-body">
                    <div class="row">

                        <div class="row m-4">
                            <div class="col-6"><h2 class="fw-bolder">GUEST CARD FORM</h2></div>
                                <div class="row pt-3">
                                    <span class="border-bottom border-dark border-1"></span>
                                </div>
                        </div>


                            <div class="col-4 p-5 pt-4">

                                <div class="mb-2">
                                    <label for="Guest ID">Guest ID</label>
                                    <input type="number" class="form-control" id="Guest ID" required>
                                </div>

                                <div class="mb-2">
                                    <label for="Name">Name</label>
                                    <input type="text" class="form-control" id="First Name" placeholder="First Name" required>
                                </div>
                                <div class="mb-2">
                                    <input type="text" class="form-control" id="Last Name" placeholder="Last Name" required>
                                </div>

                                <div class="mb-2">
                                    <label for="Address">Address</label>
                                        <select id="Address" class="form-select" required>
                                            <option value="">-- Select --</option>
                                            <option value="local">Local</option>
                                            <option value="foreign">Foreign</option>
                                            
                                        </select>
                                </div>

                                <div class="mb-2">
                                    <label for="Birth Date">Birth Date</label>
                                    <input type="date" class="form-control" id="Birth Date" required>
                                </div>

                             </div>
                                

                            <div class="col-4 p-5 pt-4">

                                <div class="mb-2">
                                    <label for="Enter Email">Email</label>
                                    <input type="text" class="form-control" id="Enter Email" aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>

                                <div class="row mb-2">
                                    <label for="PhoneNumber">Phone Number</label>
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
                                    <input type="number" class="form-control" id="PhoneNumber" required pattern="[1,9]"oninvalid="this.setCustomValidity('Enter Contact Number')"oninput="this.setCustomValidity('')"> 
                                    <script>
                                    const phoneInputField = document.querySelector("#PhoneNumber");
                                    const phoneInput = window.intlTelInput(phoneInputField, {
                                    utilsScript:
                                        "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",});
                                    </script>
                                </div>

                                    <div class="row pt-1">

                                        <div class="col-6">

                                            <div class="mb-2">
                                                <label for="Gender">Gender</label>
                                                    <select id="Gender" class="form-select" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="">Male</option>
                                                        <option value="">Female</option>
                                                        <option value="">Rather not to say</option>
                                                    </select>
                                            </div>

                                            <div class="mb-2">
                                                <label for="ID Type">ID Type</label>
                                                    <select id="Gender" class="form-select" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="">Passport</option>
                                                        <option value="">SSS UMID</option>
                                                        <option value="">PHILHEALTH</option>
                                                        <option value="">Driver's License</option>
                                                    </select>
                                            </div>

                                        </div>
                                        
                                        <div class="col-6">

                                            <div class="mb-2">
                                                <label for="Marital Status">Marital Status</label>
                                                    <select id="Marital Status" class="form-select" required>
                                                        <option value="">-- Select --</option>
                                                        <option value="">Single</option>
                                                        <option value="">Married</option>
                                                        <option value="">Separated</option>
                                                        <option value="">Divorced</option>
                                                        <option value="">Widowed</option>
                                                        <option value="">Life Partner</option>
                                                    </select>
                                            </div>

                                            <div class="mb-2">
                                                <label for="Guest ID">ID number</label>
                                                <input type="number" class="form-control" id="ID number" required>
                                            </div>

                                        </div>

                                    </div> 

                                <div class="mb-2">
                                    <label for="Room Number">Room Number</label>
                                    <input type="number" class="form-control" id="Room Number" required>
                                </div> 

                            </div>


                            <div class="col-4 p-5 pt-4">

                                <div class="mb-2">
                                    <label for="Room Type">Room Type</label>
                                        <select id="Room Type" class="form-select" required>
                                            <option value="">-- Select --</option>
                                            <option value="">Luxury</option>
                                            <option value="">Superior</option>
                                            <option value="">Club</option>
                                            <option value="">Suite</option>
                                        </select>
                                </div>

                                    <div class="row pt-3">

                                        <div class="col-6">

                                            <div class="mb-2">
                                                <label for="Room(s)">Room(s)</label>
                                                <input type="number" class="form-control" id="Room(s)" required>
                                            </div>

                                            <div class="mb-2">
                                                <label for="No. of Child">No. of Child</label>
                                                <input type="number" class="form-control" id="No. of Child" required>
                                            </div>

                                            <div class="mb-2">
                                                <label for="Check-in">Check-in</label>
                                                <input type="date" class="form-control" id="Check-in" required>
                                            </div>
                                            <div class="mb-2">
                                                <input type="time" class="form-control" id="Check-in" required>
                                            </div>

                                        </div>

                                        <div class="col-6">

                                            <div class="mb-2">
                                                <label for="No. of Night(s)">No. of Night(s)</label>
                                                <input type="number" class="form-control" id="No. of Night(s)" required>
                                            </div>

                                            <div class="mb-2">
                                                <label for="No. of Adult(s)">No. of Adult(s)</label>
                                                <input type="number" class="form-control" id="No. of Adult(s)" required>
                                            </div>

                                            <div class="mb-2">
                                                <label for="Check-out">Check-out</label>
                                                <input type="date" class="form-control" id="Check-out" required>
                                            </div>
                                            <div class="mb-2">
                                                <input type="time" class="form-control" id="Check-out" required>
                                            </div>

                                        </div>
                                       
                                    </div>    

                            </div>

                            <div class="row">
                                <div class="p-4 pt-1">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="button" class="btn btn-primary">PROCEED TO GUEST CARD</button>
                                    </div>
                                </div> 
                            </div> 

                    </div>
                </div>
            </div> 
        </div>
   </main> 

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
                                    <label for="Region">Region</label>
                                        <select id="Region"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                                <div class="mb-2">
                                    <label for="City">City</label>
                                        <select id="City"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="Province">Province</label>
                                        <select id="Province"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                                <div class="mb-2">
                                    <label for="Barangay">Barangay</label>
                                        <select id="Barangay"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CONFIRM</button>
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
                                    <label for="Country">Country</label>
                                        <select id="Country"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                                <div class="mb-2">
                                    <label for="State">State</label>
                                        <select id="State"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="mb-2">
                                    <label for="Nationality">Nationality</label>
                                        <select id="Nationality"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                                <div class="mb-2">
                                    <label for="City">City</label>
                                        <select id="City"  class="form-select" aria-label="Default select example">
                                            <option value="" selected>-- Select --</option>
                                        </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">CONFIRM</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">CANCEL</button>
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
        if(e.target.value === "local"){
            $("#myModal1").modal("show")
        } else if(e.target.value === "foreign"){
            $("#myModal2").modal("show")
        }
    }
</script>
<script src="./ph_address_selector.js" defer></script>
<script src="./foreign_address_selector.js" defer></script>

