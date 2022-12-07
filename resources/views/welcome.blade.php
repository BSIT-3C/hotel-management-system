<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ URL::asset('css/homepage.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('css/homepage.scss') }}" rel="stylesheet" type="text/css" >
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <div class="blocks">
        <div class="block init" data-block-section="1" data-href="home">
            <div class="block__title">Home</div>
            <div class="block__number">01</div>
        </div>
        <div class="block init" data-block-section="2" data-href="collection">
            <div class="block__title">FEATURED SPOTS</div>
            <div class="block__number">02</div>
        </div>
        <div class="block init" data-block-section="3" data-href="material">
            <div class="block__title">ROOMS</div>
            <div class="block__number">03</div>
        </div>
        <div class="block init" data-block-section="4" data-href="production">
            <div class="block__title">RESTAURANTS</div>
            <div class="block__number">04</div>
        </div>
        <div class="block init" data-block-section="5" data-href="journal">
            <div class="block__title">ABOUT US</div>
            <div class="block__number">05</div>
        </div>
    </div>
    <main data-scroll-container>
        <div class="wrap" data-scroll-section>
            <section class="section home" data-block-section="1" id="home" style="background-image:url('{{asset("assets/mainBG.jpg")}}');background-size:100%;color:#FFFF";>
                <div class="container m-5">
                    <div class="d-flex justify-content-center">
                        <h1>Welcome to <i><b>Tranquil</b></i></h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h4><i>Where one's comfort begins...</i></h4>
                    </div>
                                @if (Route::has('login'))
                                    @auth
                                    <div class="d-flex justify-content-center">
                                        <a href="{{ url('/home') }}"><button type="button" class="btn btn-primary">Home</button></a>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}">
                                        <div class="d-flex justify-content-center m-3"> 
                                            <button type="button" class="btn btn-primary">Login</button>
                                        </div>
                                    </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary">Register</button>
                                        </div>
                                    </a>
                                @endif
                                    @endauth
                                @endif
                </div>
            </section>
            <section class="section collection" data-block-section="2" id="collection">
                images/features/etc. go here
            </section>
            <section class="section material" data-block-section="3" id="material">
                images/features/etc. go here
            </section>
            <section class="section production" data-block-section="4" id="production">
                images/features/etc. go here
            </section>
            <section class="section journal" data-block-section="5" id="journal">
                images/features/etc. go here
            </section>
        </div>
    </main>
</body>
</html>
<script type="text/javascript" src="{{ URL::asset('js/homepage.js') }}"></script>