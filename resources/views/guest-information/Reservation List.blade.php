<!DOCTYPE html>
<html lang="en">
<head>
  <title>RESERVATION</title>
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
        font-size: 13px;
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
        font-size: 15px;
      }

      td {
        text-align: center;
      }

      .butt {
        padding-top: 10px;
        padding-left: 880px;
        text-size-adjust: 15px;
      }

  </style>
</head>

<body style="background-color: #DFDFDF;">

   
    <div class="contianer">
      <header class="shadow-sm d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: #1840C4 ;">
        
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
          <img class="ps-5 img-fluid" src="header_logo.jpg" alt="logo" style="height: 50px; width: auto;">
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
        <div class="container shadow-sm p-3 mb-5 bg-body rounded">
            <div class="row m-3">
                <div style="clear: both">
                    <h2 style="float: left" class="fw-bolder" >RESERVATION</h2>

                    <h6 style="float: right">Search Blacklist  
                    <input class="search" size="60%" type="text" name="" id="" placeholder=" Enter Email"> </h6>
                </div> 
            </div>

            <div class="contents">

                <table>

                    <tr>
                        <th> RESERVATION TYPE</th>
                        <th>FIRST NAME</th>
                        <th>LAST NAME</th>
                        <th>EMAIL</th>
                        <th>GENDER</th>
                        <th>COUNTRY</th>
                        <th>PHONE</th>
                        <th>ROOM(S)</th>
                        <th>ARRIVAL</th>
                        <th>DEPARTURE</th>
                        <th>NIGHT(S)</th>
                        <th>ADULT(S)</th>
                        <th>CHILD</th>

                        <tr class="information">
                            <td>Confirmed</td><td>Murtagh</td><td>Fraser</td><td>frasermurtagh@gmail.com</td><td>Male</td><td>Scotland</td><td>09756379090</td><td>2</td><td>06/09/19</td><td>06/12/19</td><td>3</td><td>3</td><td>0</td>
                        </tr>
                  
                        <tr>
                            <td>Cancelled</td><td>Jong suk</td><td>Lee</td><td>leejongsuk@gmail.com</td><td>Male</td><td>South Korea</td><td>09234561234</td><td>1</td><td>---</td><td>---</td><td>1</td><td>2</td><td>---</td>
                        </tr>
              
                        <tr>
                            <td>Confirmed</td><td>Steve</td><td>Rogers</td><td>steverogers@gmail.com</td><td>Male</td><td>USA</td><td>09279897263</td><td>3</td><td>06/17/19</td><td>06/22/19</td><td>5</td><td>6</td><td>3</td>
                        </tr>

                        <tr>
                            <td>Confirmed</td><td>Margaret</td><td>Delacourt</td><td>delacourtmargaret@gmail.com</td><td>Female</td><td>Philippines</td><td>09011483781</td><td>1</td><td>06/29/19</td><td>06/30/19</td><td>1</td><td>1</td><td>0</td>
                        </tr>

                        <tr>
                            <td>Confirmed</td><td>Tyrion</td><td>Lannister</td><td>lannistertyrion@gmail.com</td><td>Male</td><td>Croatia</td><td>09859076853</td><td>2</td><td>07/02/19</td><td>07/07/19</td><td>5</td><td>4</td><td>1</td>
                        </tr>

                    </tr>
                </table>
            </div>

            <div class="row">
                <div class="p-4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" class="btn btn-primary btn-sm">ADD GUEST TO RESERVATION</button>
                        <button type="button" class="btn btn-secondary btn-sm">REMOVE GUEST FROM RESERVATION</button>
                      </div>
                  </div> 
            </div> 

        </div>      
   </main> 
  

</body>
</html>

