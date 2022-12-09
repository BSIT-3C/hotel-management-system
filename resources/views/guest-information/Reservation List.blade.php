<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  
 
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
                      <h2 style="float: left" class="fw-bolder">RESERVATION LIST</h2>
                      <h6 style="float: right">
                      <input class="search" size="60%" type="text" name="" id="" placeholder="  Search Blacklist"> </h6>
                  </div>  
              </div>

              <div class="contents p-2">
                
                      <table>

                          <tr>
                            <th>NAME</th>
		                        <th>ADDRESS</th>
		                        <th>COUNTRY</th>
		                        <th>EMAIL</th>
		                        <th>PHONE NO.</th>
		                        <th>ROOM(S)</th>
		                        <th>ROOM TYPE</th>
		                        <th>ROOM NO.</th>
		                        <th>CHECK-IN</th>
		                        <th>CHECK-OUT</th>
		                        <th>NIGHT(S)</th>
		                        <th>ADULT(S)</th>
		                        <th>CHILD</th>
		                        <th>ACTIONS</th>

		                        		<tr class="information">
                            				<td>Angela Reyes</td>
																		<td>Boni Avenue & M. Vicente Street, 1, 7613 Malamig, Mandaluyong City, Metro Manila, 1550</td>
																		<td>Philippines</td>
																		<td>angelareyes@gmail.com</td>
																		<td>09790417563</td>
																		<td>2</td>
																		<td>Suite</td>
																		<td>85, 56</td>
																		<td>9:00 AM 06/09/19</td>
																		<td>9:00 AM 06/12/19</td>
																		<td>3</td>
																		<td>3</td>
																		<td>0</td>
																		<td><a href="#"><i class="fa-sharp fa-solid fa-plus" style="color: black;"></i></a>
																				<a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                				<a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                        				</tr>

                                <tr>
                            				<td>John Garcia</td>
																		<td>Chua, Bagumbayan Taguig City, Metro Manila, 1637</td>
																		<td>Philippines</td>
																		<td>johngarcia@gmail.com</td>
																		<td>09254279591</td>
																		<td>1</td>
																		<td>Superior</td>
																		<td>21</td>
																		<td>9:45 PM 06/09/19</td>
																		<td>9:45 PM 06/13/19</td>
																		<td>4</td>
																		<td>2</td>
																		<td>1</td>
																		<td><a href="#"><i class="fa-sharp fa-solid fa-plus" style="color: black;"></i></a>
																				<a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
											                  <a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
											          </tr>
              
				                        <tr>
				                            <td>Daniel Aquino</td>
																		<td>105, Gen. Evangelista Street Alima, Bacoor, Cavite, South Luzon, 4102</td>
																		<td>Philippines</td>
																		<td>danielaquino@gmail.com</td>
																		<td>09277523012</td>
																		<td>1</td>
																		<td>Luxury</td>
																		<td>13</td>
																		<td>12:00 PM 06/08/19</td>
																		<td>12:00 PM 06/09/19</td>
																		<td>1</td>
																		<td>2</td>
																		<td>0</td>
																		<td><a href="#"><i class="fa-sharp fa-solid fa-plus" style="color: black;"></i></a>
																				<a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                				<a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                        				</tr>

                        				<tr>
                            				<td>Claire Chua</td>
																		<td>San Roque, Santo Tomas, Batangas, South Luzon, 4234</td>
																		<td>Philippines</td>
																		<td>clairechua@gmail.com</td>
																		<td>09754026783</td>
																		<td>2</td>
																		<td>Club</td>
																		<td>06, 07</td>
																		<td>10:30 AM 06/08/19</td>
																		<td>10:30 AM 06/13/19</td>
																		<td>5</td>
																		<td>4</td>
																		<td>2</td>
																		<td><a href="#"><i class="fa-sharp fa-solid fa-plus" style="color: black;"></i></a>
																				<a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
                                				<a href="#"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></a></td>
                        				</tr>

				                        <tr>
				                            <td>Elizabeth Rivera</td>
																		<td>San Pablo, Anilao, Malolos City, North Luzon, 3000</td>
																		<td>Philippines</td>
																		<td>elizabethrivera@gmail.com</td>
																		<td>09265877601</td>
																		<td>3</td>
																		<td>Club</td>
																		<td>77,78,79</td>
																		<td>1:30 AM 06/08/19</td>
																		<td>1:30 AM 06/10/19</td>
																		<td>2</td>
																		<td>6</td>
																		<td>3</td>
																		<td><a href="#"><i class="fa-sharp fa-solid fa-plus" style="color: black;"></i></a>
																				<a href="#"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></a>
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

