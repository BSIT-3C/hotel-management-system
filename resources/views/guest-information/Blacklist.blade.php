<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blacklist</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.css"/>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.js"></script>
  
 
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
              <div class="row m-0 p-4">
                  <div>
                      <h2 class="fw-bolder">BLACKLIST</h2>
                  </div>  
              </div>

              <div class="contents p-2" >
                
                      <table id="table" class="table table-striped">
                        <thead>
                          <tr>
                            <th>GUEST ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>CONTACT</th>
                            <th>REASON</th>
                            <th>ACTIONS</th>      
      				            </tr>
                          <thead>
                          
                        <tbody>

                          @if(!$blacklists->isEmpty())
                            @foreach ($blacklists as $blacklist)
                              <tr>
                                <td>{{$blacklist->guest->id}}</td>
                                <td>{{$blacklist->guest->name}}</td>
                                <td>{{$blacklist->guest->email}}</td>
                                <td>{{$blacklist->guest->address}}</td>
                                <td>{{$blacklist->guest->contact}}</td>
                                <td>{{$blacklist->reason}}</td>
                                <td class="d-flex justify-content-center">
                                  <form action="/guestinfo/blacklist/delete/{{$blacklist->id}}" method="POST">
                                  @csrf
                                  @method("DELETE")
                                  <button type="submit" class="btn btn-primary"><i class="fa-sharp fa-solid fa-trash" style="color: black;"></i></button>
                                  </form>
                                  <a href="/guestinfo/blacklist/update/form/{{$blacklist->id}}"><button type="button" class="btn btn-primary mx-2"><i class="fa-sharp fa-solid fa-pen" style="color: black;"></i></button></a>
                                </td>
                              </tr>
                            @endforeach
                          @endif
                         
                        </tbody>

                      </table>
              </div>
          </div>				
    </main> 
  
</body>
</html>


<script>
  $('#table').DataTable()
</script>

