<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest Card</title>
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
            <div class="row m-3">
                <div class="col-6"><h2 class="fw-bolder">RESERVATION</h2></div>
                <div class="col-6 text-end">
                    <a href="#"><i class="fa-solid fa-arrow-left me-5" style="color: black;"></i></a></i>
                    <a href="#"><i class="fa-solid fa-arrow-right me-5" style="color: black;"></i></a></i>
                    <a href="#"><i class="fa-solid fa-floppy-disk" style="color: black;"></i></a></i>
                </div>
                
            </div>
            <div class="row"> <!--first card left-->
                <div class="col-4">
                    <div class="card shadow-sm">
                      <h5 class="card-header fw-bold" style="background-color: #DFDFDF">Guest Information</h5>
                        <div class="card-body">

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
                                	   <h6 class="text-secondary" style=" text-decoration-line: underline; ">09029130323</h6>
                                	</div>
                              </div>

                        </div>
                    </div>
                </div>
              <!--first card left-->
                <div class="col">  <!--Second card -->
                    <div class="card shadow-sm">
                      <h5 class="card-header fw-bold" style="background-color: #DFDFDF">Stay Information</h5>
                        <div class="card-body" style="padding: 34px;">
                         
                              <div class="row">
                                    <div class="col-2">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Room(s)</h6>
                                    </div>
                                    <div class="col-1">
                                        <input type="text" style="width: 60px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                                
                                    <div class="col-3"  >
                                        <select name="cars" id="room" style="width: 190px; height:50px;">
                                          <option value="Single Room">Single Room </option>
                                          <option value="Single Room1">Single Room1 </option>
                                        </select>
                                    </div>

                                    <div class="col-3" style="margin-right: 40px; width: 15%;">
                                        <select name="cars" id="room" style="width: 150px; height:50px;">
                                          <option value="101">101 </option>
                                          <option value="102">102 </option>
                                        </select>
                                    </div>

                                    <div class="col-3" style="margin-right: 40px; width: 20%;">
                                        <select name="cars" id="room" style="width: 154px; height:50px;">
                                          <option value="break fast">break fast</option>
                                          <option value="break fast1">break fast1 </option>
                                        </select>
                                    </div> 
                              </div>
                            
                              <div class="row" style="margin-top: 10px;">
                                    <div class="col-2">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Arrival</h6>
                                    </div>

                                    <div class="col-3">
                                        <input type="date" style="width: 190px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                                
                                    <div class="col-3"  >
                                        <input type="time" style="width: 150px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>

                                    <div class="col-2" style=" width: 15%;">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Night(s)</h6>
                                    </div>

                                    <div class="col-1">
                                        <input type="text" style="width: 60px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                              </div>
                            
                              <div class="row" style="margin-top: 10px;">
                                    <div class="col-2">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Departure</h6>
                                    </div>

                                    <div class="col-3">
                                        <input type="date" style="width: 190px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                                
                                    <div class="col-3"  >
                                        <input type="time" style="width: 150px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>

                                    <div class="col-2" style=" width: 15%;">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Adult(s)</h6>
                                    </div>

                                    <div class="col-1">
                                        <input type="text" style="width: 60px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                              </div>
                            
                              <div class="row" style="margin-top: 10px;">
                                    <div class="col-2">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Reservation Type</h6>
                                    </div>

                                    <div class="col-6">
                                        <input type="text" style="width: 320px;height:50px;" id="fname" name="fname">
                                    </div>
                                
                                    <div class="col-2" style=" width: 15%;">
                                        <h6 class="fw-bold" style="margin-top: 10px;">Child</h6>
                                    </div>

                                    <div class="col-1">
                                        <input type="text" style="width: 60px;height:50px;text-align:center;" id="fname" name="fname">
                                    </div>
                              </div>

                              <div class="row" style="margin-top: 10px;">
                                    <div class="col-12">
                                        <div class="d-grid gap-2 d-md-block">
                                            <div class="fw-bold-" style="margin-top: 10px;  text-align: right;">
                                                <button class="btn btn-primary" type="button">Proceed to Payment</button>
                                            </div>
                                        </div>
                                    </div> 
                              </div>

                        </div>
                    </div>
                </div>  <!--Second card -->
            </div>
        </div>
    </main> 


</body>
</html>

<style>

.col-31 {
          flex: 0 0 auto;
          width: 20%;
        }

</style>

