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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--DATA TABLE -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.css" />
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/dt-1.13.1/b-2.3.3/cr-1.6.1/date-1.2.0/fc-4.2.1/fh-3.3.1/r-2.4.0/rg-1.3.0/sp-2.1.0/datatables.min.js">
    </script>
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
        html * {
            font-family: 'Poppins', sans-serif;
        }
    </style>


</head>

<body style="background-color: #E1DFD2; padding: 0 !important;">
    <div class="container row">
        <header class="shadow-sm d-flex flex-wrap justify-content-center py-4 border-bottom"
            style="background-color: #1840C4 ; position: fixed; width: 100%; z-index: 10">

            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto" style="">
                <img class="ps-5 img-fluid" src="{{ asset('images/header_logo.jpg') }}" alt="logo"
                    style="height: 50px; width: auto;">

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
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="background: none; border: none;">
                            {{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
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
    <div class="row text-center d-flex align-items-center border" style="height: 100vh !important;" >
        <div class="col text-center text-muted">
            <h4>VERIFY ACCOUNT FIRST</h4>
            <h6>Contact Admin</h6>
        </div>
    </div>
    {{-- <main class="row text-center d-flex align-items-center border" style="margin-top: 130px; height: 100% !important;">
        
    </main> --}}
</body>

</html>
