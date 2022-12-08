<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
  <style>

      {
        margin-top: 10px;
      }


      table {
        width: 100%;
      }

      head { 
        border: 1px solid dimgray;
      }

      th {
        text-align: center;
        font-size: 12px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 5px;
        padding-bottom: 5px;
        background-color:#dfdfdf;
        border: 1px solid  #e1d1d2;
      }

      td {
        border-bottom: 1px solid black;
        padding-top: 10px;
        padding-bottom: 20px;
        font-size: 13px;
      }

      td {
        text-align: center;
      }

      tr {
        text-justify: auto;
      }
     
      .show {

        font-size: 13px;
        font-family: Arial;
      }
    
      .entries {
        font-weight: bolder;
        text-decoration: none;
        color: black;
      }



  </style>

</head>


<body style="background-color: #DFDFDF;">

   
    <div class="contianer">
        <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #1840C4 ;">
        
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
            <img class="ps-5 img-fluid"    src="header_logo.jpg" alt="logo" style="height: 50px; width: auto;">
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

    <main>
          <div class="container shadow-sm p-3 mb-5 bg-body rounded" aria-setsize="">
              <div class="row m-3 p-3">
                  <div style="clear: both">
                      <h2 style="float: left" class="fw-bolder" >GUEST LIST</h2>
                      <h6 style="float: right">
                      <input class="search" size="60%" type="text" name="" id="" placeholder="  Search Blacklist"> </h6>
                  </div>  
              </div>

              <div class="contents p-2">
                
                      <table>

                          <tr>
                            <th> GUEST ID </th>
                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                            <th>EMAIL</th>
                            <th>COUNTRY</th>
                            <th>NATIONALITY</th>
                            <th>PHONE NO.</th>
                            <th>CHECK-IN</th>
                            <th>CHECK-OUT</th>
                            <th>BLACKLIST</th>
                            <th>ACTIONS</th>

                                <tr class="information">
                                    <td>0006</td>
                                    <td>Seok Jin</td>
                                    <td>Kim</td>
                                    <td>kimseokjin@gmail.com</td>
                                    <td>South Korea</td>
                                    <td>Korean</td>
                                    <td>09274561276</td>
                                    <td>7:00 AM 06/09/19</td>
                                    <td>7:00 AM 06/13/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>

                                <tr>
                                    <td>0005</td>
                                    <td>Claire</td>
                                    <td>Randall</td>
                                    <td>clairerandall@gmail.com</td>
                                    <td>Philippines</td>
                                    <td>Filipino</td>
                                    <td>09257778455</td>
                                    <td>6:00 AM 06/09/19</td>
                                    <td>6:00 AM 06/11/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>
              
                                <tr>
                                    <td>0004</td>
                                    <td>Murtagh</td>
                                    <td>Fraser</td>
                                    <td>frasermurtagh@gmail.com</td>
                                    <td>Scotland</td>
                                    <td>Scottish</td>
                                    <td>09756379014</td>
                                    <td>12:00 AM 06/09/19</td>
                                    <td>12:00 AM 06/15/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>

                                <tr>
                                    <td>0003</td>
                                    <td>Steve</td>
                                    <td>Rogers</td>
                                    <td>steverogers@gmail.com</td>
                                    <td>USA</td>
                                    <td>American</td>
                                    <td>09279897268</td>
                                    <td>11:00 PM 06/09/19</td>
                                    <td>11:00 PM 06/12/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>

                                <tr>
                                    <td>0002</td>
                                    <td>Margaret</td>
                                    <td>Delacoutt</td>
                                    <td>delacauttmargaret@gmail.com</td>
                                    <td>Philippines</td>
                                    <td>Filipino</td>
                                    <td>0991483762</td>
                                    <td>6:00 PM 06/08/19</td>
                                    <td>6:00 PM 06/09/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>

                                <tr>
                                    <td>0001</td>
                                    <td>Tyrion</td>
                                    <td>Lannister</td>
                                    <td>lannistertyrione@gmail.com</td>
                                    <td>Croatia</td>
                                    <td>Croatian</td>
                                    <td>099859076421</td>
                                    <td>3:00 PM 06/08/19</td>
                                    <td>3:00 AM 06/12/19</td>
                                    <td><a class="fa-sharp fa-solid fa-user-plus text-decoration-none" data-toggle="modal" data-target="#myModal" style="color: black;"><i type="icon"></i></a></td>
                                        <!-- The Modal -->
                                            <div class="modal fade" id="myModal">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">ADD TO BLACKLIST</h4>
                                                        </div>
                                                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="row py-3">
                                                                <div class="col">
                                                                    <div class="mb-2">
                                                                        <h6>Are you sure you want to add this guest to Blacklist?</h6>
                                                                        <input type="text" class="form-control" id="First Name" placeholder="Reason" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CONFIRM</button>
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                    <td><a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                        <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                                </tr>

                          </tr>

                      </table>

                      <div class="row">
                            <div class="p-4">
                                <h5 style="float: left" class="show" >Showing <a class="entries" href="">5</a> of <a class="entries" href="">25</a> entries </h5>
                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                                        <div class="btn-group">
                                            <a href="#" class="btn btn-outline-primary btn-sm">Previous</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm active" aria-current="page">1</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">2</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">3</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">4</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">5</a>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Next</a>
                                        </div>

                                  </div>
                            </div> 
                      </div> 
                      
              </div>
          </div>        
    </main> 
  

</body>
</html>

