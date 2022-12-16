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
          <img class="ps-5 img-fluid"  src="{{asset("assets/tranquil.png")}}"  alt="logo" style="height: 50px; width: auto;">
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
            <div class="row">

                <div class="row m-4">
                    <div class="col-6"><h2 class="fw-bolder">BLACKLIST UPDATE FORM</h2></div>
                        <div class="row pt-3">
                            <span class="border-bottom border-dark border-1"></span>
                        </div>
                </div>
                
                <form action="/guestinfo/blacklist/update/{{$blacklist->id}}" method="POST">
                @csrf
                @method("PATCH")
                    <div class="col-4 mx-auto mb-3">
                        <div class="mb-2">
                            <label for="guest_id">Guest ID</label>
                            <input type="number" class="form-control" name="guest_id" id="guest_id" required value="{{$blacklist->guest_id}}">
                        </div>

                        <div>
                            <label for="reason">Reason</label>
                            <input type="text" class="form-control" name="reason" id="reason" required value="{{$blacklist->reason}}">
                        </div>

                    </div>

                    <div class="col-auto d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>                                   
                                            
            </div>
        </div>
   </main> 

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

