<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest Card</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style type="text/css">

.popup_container{
    width: 550px;
    height: 540px;
    background-color: #cccccc;
    border: 1px solid black; 
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) /*scale(0)*/;
    /*display: */
    z-index: 10;
}
.popup-header{
    padding: 0px 10px;
    display: flex;
    justify-content: space-between;
    align-items: center; 
}
.popup-header .Title{
    font-size: 1rem;
}
.popup-header .close-button{
    cursor: pointer;
    border:1px solid black;
    outline: none;
    background-color: red;
    width: 35px;
    height: 30px;
    font-size: 1.25rem;
    font-weight: bold;
}
.popup-body{
    background-color: white;
    margin-top: 5px;
    width: 540px;
    height: 500px;
    margin-left: 4px;
    border:1px solid black;
}
#overlay{
    position: fixed;
   /* opacity: 0;*/
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,.5);
    pointer-events: none;
}
/*#overlay.active{
    opacity: 1;
    pointer-events: all;
}*/
.text{
    margin: 20px 40px;
}
.text1{
    margin: 20px 80px;
}
.btn-footer{
    margin-left: 10px;
    margin-top: 37px;
    border-radius: 5px;
    box-shadow: 1px 1px 2px black;
}
</style>
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
            <div class="row m-3">
                <div class="col-6"><h2 class="fw-bolder">GUEST CARD</h2></div>
                <div class="col-6 text-end">
                    <a href="#"><i class="fa-solid fa-arrow-left me-5" style="color: black;"></i></a></i>
                    <a href="#"><i class="fa-solid fa-arrow-right me-5" style="color: black;"></i></a></i>
                    <a href="#"><i class="fa-solid fa-floppy-disk" style="color: black;"></i></a></i>
                </div>
            </div>

<!--     this is for the blacklist-->
             <div class="popup_container" id="popup_container">

                <div class="popup-header">
                    <div class="Title" style="padding-top: 5px;">[ADD_BOOKING_WITH_BLOCKLISTED_GUEST]</div>
                    <button class="close-button">&times;</button>
                </div>

                <div class="popup-body">
                    <h4 style="text-align: center; font-weight: bold;">[ADD_BOOKING_WITH_BLOCKLISTED_GUEST]</h4>
                    <span class="text" style="color: red;"><u>Jack Randall is Blacklisted</u></span> <br/>
                    <span class="text"><b>Gender:</b>Male</span><br/>
                    <span class="text"><b>Country:</b>Scotland</span><br/>
                    <span class="text"><b>ID:</b>112368749</span><br/>
                    <span class="text"><b>Email:</b>jackrandall@gmail.com</span><br/>
                    <span class="text"><b>Blacklisted at:</b>London</span><br/>
                    <span class="text"><b>BLACKLISTED BY:</b>Claire Beauchamp</span><br/>
                    <span class="text"><b>Date:</b>April,16 2018 12:20:43</span><br/>
                    <span class="text"><b>Discrepancy Reason:</b>Test Blacklist</span><br/>
                    <span class="text"><b>Amount Due:</b></span><br/>
                    <span class="text1">BS6412: 0.00 EUR</span><br/>
                    <span class="text1">BS1573: 0.00 EUR</span><br/>
                    <span class="text1">BS839: 30.00 EUR</span><br/><br/>
                    <span class="text"><b>Severity:</b>Disturbance</span><br/>
                    <span class="text"><b>Recommendation:</b>Do not host!</span><br/>
                    <button class="btn-footer"style="width: 100px; margin-left: 38px;">OK</button>
                    <button class="btn-footer"style="width: 230px;">REMOVE FROM BLACKLIST</button>
                    <button class="btn-footer"style="width: 100px;">CANCEL</button>
                </div>
                                    
            </div>

            <div class="row"> <!--first card left-->
                <div class="col-4">
                    <div class="card shadow-sm">
                        <h5 class="card-header fw-bold" style="background-color: #DFDFDF">Guest Information</h5>

                        <div class="card-body">
                            <h6 class="text-secondary">First Name</h6>
                                <div class="row mx-1 mb-2">
                                    <span class="border-bottom border-dark border-1"><h6 class="fw-bold">James Alexander</h6></span>
                                </div>

                            <h6 class="text-secondary">Last Name</h6>
                                <div class="row mx-1 mb-3">
                                    <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Fraser</h6></span> 
                                </div>
                            
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-secondary">Country</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Scotland</h6></span> 
                                    </div>

                                    <h6 class="text-secondary">Gender</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Male</h6></span>
                                    </div>

                                    <h6 class="text-secondary">ID Type</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Passport</h6></span>
                                    </div>

                                    <h6 class="text-secondary">Guest ID</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">0001</h6></span>
                                    </div> 
                                </div>

                                <div class="col-6">
                                    <h6 class="text-secondary">Nationality</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Scottish</h6></span>
                                    </div>

                                    <h6 class="text-secondary">Marital Status</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Married</h6></span>
                                    </div>

                                    <h6 class="text-secondary">ID number</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">0300 23021 0231</h6></span>
                                    </div>
                                </div>

                                    <h6 class="text-secondary">Birth Date</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">5/01/1980</h6></span>  
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
              <!--first card left-->
                <div class="col">  <!--Second card -->
                    <div class="card  fw-bold shadow-sm">
                        <div class="card-header" style="background-color: #DFDFDF;">
                            <ul class="nav nav-tabs nav-justified card-header-tabs">

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="true" href="#" style="color: black;">Contact Information</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: black;">ID Information</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: black;">Additional Information</a>
                                </li>

                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-secondary">Phone</h6>
                                    <div class="row mx-1 mb-3">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">09764365893</h6></span>
                                    </div>

                                    <h6 class="text-secondary">Email</h6>
                                    <div class="row mx-1 mb-3">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">jamesalexander@gmail.com</h6></span>   
                                    </div>

                                    <h6 class="text-secondary">Address</h6>
                                    <div class="row mx-1 mb-4">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">Lallybroch</h6></span>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" value=""id="defaultCheck1">
                                        </div>
                                        <div class="col"><h6 class="fw-bold">Blacklist</h6></div>
                                    </div>
                                    <div class="row mx-1 mb-4">
                                        <span class="border-bottom border-dark border-1"><h6 class="text-secondary">Blacklisting Reason</h6></span>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-1">
                                            <input class="form-check-input" type="checkbox" value=""id="defaultCheck1">
                                        </div>
                                        <div class="col"><h6 class="fw-bold" style="color: black;">Problem</h6></div>
                                    </div>
                                    <div class="row mx-1 mb-4">
                                        <span class="border-bottom border-dark border-1"><h6 class="text-secondary">Reason</h6></span>
                                    </div>

                                    <h6 class="text-secondary">Vehicle Plate</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold">BTS 0613</h6></span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <h6 class="text-secondary">Invoice Number</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold"> 2</h6></span>
                                    </div>

                                    <h6 class="text-secondary">Room Number</h6>
                                    <div class="row mx-1 mb-2">
                                        <span class="border-bottom border-dark border-1"><h6 class="fw-bold"> 200 </h6></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>  <!--Second card -->
        </div>
   </main> 
<div id="overlay"></div>

</body>
</html>
