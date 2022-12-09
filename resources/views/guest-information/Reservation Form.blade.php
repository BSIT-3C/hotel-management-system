<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body style="background-color: #DFDFDF;">

   
    <div class="contianer"><!--HEADER-->
      <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #1840C4 ;">
        
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
          <img class="ps-5 img-fluid"    src="header_logo.jpg" alt="logo" style="height: 50px; width: auto;">
        </div>
        
<!--         src="img/header_logo.jpg" -->
  
        <ul class="nav pe-5" >
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
            <div class="row m-4">
                <div class="col-6"><h2 class="fw-bolder">RESERVATION FORM</h2></div>  
            </div>

            <div class="row m-3"> <!--first card left-->
                <div class="col-4">
                    <div class="card shadow-sm">
                      <h5 class="card-header fw-bold" style="background-color: #DFDFDF">Guest Information</h5>
                        <div class="card-body" style="padding-top: 30px; padding-bottom: 211px; padding-left: 25px;">

                            <div class="row" style="margin-top:20px;">
                                <div class="col-4">
                                    <h6 class="fw-bold">Name </h6>
                                </div>
                                <div class="col-8">
                                    <h6 class="text-secondary">Tyrion Lannister</h6>
                                </div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-4">
                                    <h6 class="fw-bold">Address </h6>
                                </div>
                                <div class="col-8">
                                    <h6 class="text-secondary">Casterly Rock</h6>
                                </div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-4">
                                    <h6 class="fw-bold">Country </h6>
                                </div>
                                <div class="col-8">
                                    <h6 class="text-secondary"> Croatia</h6>
                                </div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-4">
                                    <h6 class="fw-bold">Email </h6>
                                </div>
                                <div class="col-8">
                                    <h6 class="text-secondary" style=" text-decoration-line: underline; ">tylonlannister@gmail.com</h6>
                                </div>
                            </div>

                            <div class="row" style="margin-top:10px;">
                                <div class="col-4">
                                    <h6 class="fw-bold">Phone </h6>
                                </div>
                                <div class="col-8">
                                    <h6 class="text-secondary" style=" text-decoration-line: underline; ">09859076421</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!--first card left-->
                

                <div class="col"> <!--Second card -->
                    <div class="card shadow-sm">
                      <h5 class="card-header fw-bold" style="background-color: #DFDFDF">Stay Information</h5>
                        <div class="card-body" style="padding-top: 50px; padding-bottom: 120px; padding-left: 25px;">
                         
                            <div class="row">

                                <div class="col-2">
                                    <h6 class="fw-bold" style="margin-top: 10px;">No. of Room(s)</h6>
                                </div>
                                <div class="col-1" >
                                    <input type="number" style="width: 60px; height:50px; text-align:center;" id="fname" name="fname">
                                </div>

                                <div class="col-auto" >
                                    <h6 class="fw-bold" style="margin-top: 10px;">Room No.</h6>
                                </div>
                                <div class="col-1" >
                                    <input type="number" style="width: 60px;height:50px;text-align:center;" id="fname" name="fname">
                                </div>

                                <div class="col-auto" >
                                    <h6 class="fw-bold" style="margin-top: 10px;">No. of Night(s)</h6>
                                </div>
                                <div class="col-1">
                                    <input type="number" style="width: 60px; height:50px; text-align:center;" id="fname" name="fname">
                                </div>

                            </div>


                            <div class="row" style=" margin-top: 20px;">

                                <div class="col-2">
                                    <h6 class="fw-bold" style="margin-top: 10px;">Type of Room(s)</h6>
                                </div>
                                <div class="col-auto" style="width: 50%;">
                                    <select name="text" id="room" style="width:100%; height:50px;" id="fname" name="fname">
                                        <option value="">-- Select Room --</option>
                                        <option value="">Luxury </option>
                                        <option value="">Superior </option>
                                        <option value="">Club </option>
                                        <option value="">Suite </option>
                                    </select>
                                </div>

                                <div class="col-4">
                                    <h5 class="fw-bold" style="margin-top: 10px;">NUMBER OF GUESTS</h5>
                                </div>
                                
                            </div>

                            
                            <div class="row" style="margin-top: 20px;">

                                <div class="col-2" >
                                    <h6 class="fw-bold" style="margin-top: 10px;">Check-In</h6>
                                </div>

                                <div class="col-3" >
                                    <input type="date" style="width: 100%; height:50px; text-align:center;" id="fname" name="fname">
                                </div>
                                
                                <div class="col-3"  >
                                    <input type="time" style=" width: 100%; height:50px; text-align:center;" id="fname" name="fname">
                                </div>

                                <div class="col-2" style=" width: 15%;">
                                    <h6 class="fw-bold" style="margin-top: 10px;">Adult(s)</h6>
                                </div>

                                <div class="col-1">
                                    <input type="number" style="width: 60px; height:50px; text-align:center;" id="fname" name="fname">
                                </div>

                            </div>
                            
                            <div class="row" style="margin-top: 20px;">

                                <div class="col-2">
                                    <h6 class="fw-bold" style="margin-top: 10px;">Check-Out</h6>
                                </div>

                                <div class="col-3">
                                    <input type="date" style="width: 100%; height:50px;text-align:center;" id="fname" name="fname">
                                </div>
                                
                                <div class="col-3"  >
                                    <input type="time" style="width: 100%; height:50px;text-align:center;" id="fname" name="fname">
                                </div>

                                <div class="col-2" style=" width: 15%;">
                                    <h6 class="fw-bold" style="margin-top: 10px;">Child</h6>
                                </div>

                                <div class="col-1">
                                    <input type="number" style="width: 60px; height:50px; text-align:center;" id="fname" name="fname">
                                </div>
                                
                            </div>

                        </div>
                    </div>
                </div>  <!--Second card -->

                <div class="row" style="margin-top: 10px;">
                    <div class="col-12">
                        <div class="d-grid gap-2 d-md-block">
                            <div class="fw-bold-" style="margin-top: 20px; margin-bottom: 20px;  text-align: right;">
                                <button class="btn btn-primary" type="button">PROCEED TO RESERVATION LIST</button>
                            </div>
                        </div>
                    </div> 
                </div>

            </div>
        </div>
    </main> 


</body>
</html>

