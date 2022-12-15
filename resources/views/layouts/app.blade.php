<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <!--Link --> 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!--DATA TABLE -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.js"></script>
    <script>
            $(document).ready(function() {
          var table = $('#table').DataTable({
              searchBuilder: true
          });
          table.searchBuilder.container().prependTo(table.table().container());
      });
    </script>
     <!--DATA TABLE -->

    <style>
      html *
      {
        font-family: 'Poppins', sans-serif;
      }
    </style>

  
</head>
<body style="background-color: #E1DFD2;">
    <div class="contianer">
        <header class="shadow-sm d-flex flex-wrap justify-content-center py-4 border-bottom" style="background-color: #1840C4 ; position: fixed; width: 100%; z-index: 10">
        
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto" style="">
            <img class="ps-5 img-fluid"  src="{{asset('images/header_logo.jpg')}}" alt="logo" style="height: 50px; width: auto;">

        </div>
    
        <ul class="nav pe-5 " style="">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none; border: none;">
                {{ Auth::user()->first_name }}
                {{ Auth::user()->last_name }}
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/employee_information_system/profile/{{auth::user()->id}}">Profile</a></li>
                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                   </a>
                </li>
              </ul>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
        @endguest
        </ul>
        </header>
    </div> 
    <main style="" class="min-vh-100">
    <div class="row">
     @Auth
        <div class="col-2">
            <div class="min-vh-100 p-3 bg-light" style="width: 280px; position: fixed; margin-top: 6.2rem">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                  <span class="fs-4">Tranquil</span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                  <li class="nav-item">
                    <a href="/home" class="nav-link link-dark" aria-current="page">
                    <i class="fa-solid fa-house me-1"></i>
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="/employee_information_system/dtr" class="nav-link link-dark">
                        <i class="fa-solid fa-business-time me-1"></i>
                      DTR
                    </a>
                  </li>
                  <li>
                    <a href="/employee_information_system/employees" class="nav-link link-dark">
                        <i class="fa-solid fa-user-group me-1"></i>
                      Employees
                    </a>
                  </li>
                  <li>
                    <a href="/employee_information_system/profile/dtr/{{Auth::user()->id}}" class="nav-link link-dark">
                        <i class="fa-sharp fa-solid fa-clock me-1"></i>
                        DTR logs
                    </a>
                  </li>
                  <hr>
                  <li class="mb-1 ms-3">
                    <div class="dropdown">
                        <button class="fw-bold btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Modules 
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                  </li>
                </ul>
              
              </div>


        </div>
        @endAuth 
        <div class="col">
            @yield('content')
        </div>

   

    </div>
            
    </main>
</body>
</html>
