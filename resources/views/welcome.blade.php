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
    <link href="{{URL::asset('resources/css/style.css')}}" rel="stylesheet" type="text/css">
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
            <section class="section home" data-block-section="1" id="home" style="background-image:url('{{asset("assets/landingpage/mainBG.jpg")}}');background-size:100%;color:#FFFF";>
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
                                        <button type="button" class="btn btn-primary">
                                            <a href="{{ url('/home') }}">Home</a>
                                        </button>
                                    </div>
                                @else
                                        <div class="d-flex justify-content-center m-3"> 
                                            <button type="button" class="btn btn-primary">
                                                <a style="color:white; text-decoration: none;" href="{{ route('login') }}">
                                                    Login
                                                </a>
                                            </button>
                                        </div>
                                @if (Route::has('register'))
                                    
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-primary">
                                                <a style="color:white; text-decoration: none;"  href="{{ route('register') }}">
                                                    Register
                                                </a>
                                            </button>
                                        </div>
                                    
                                @endif
                                    @endauth
                                @endif
                </div>
            </section>
            <section class="section collection" data-block-section="2" id="collection" style="background-image:url('{{asset("assets/landingpage/bg_image2.jpg")}}');background-size:100%;color:#FFFF;background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url('{{asset("assets/landingpage/bg_image2.jpg")}}')">
                <div class="container">
                    <div class="row">
                        <div class="row mb-2 ">
                            <h1><i>"Savor the <b>tranquility</b> of our featured spots..."</i></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/featured_spots/featured_1.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3>Resorts</h3>
                                    <p class="card-text"> You can enjoy our alluring view from outside in our resorts and enjoy the tranquil in our refreshing pool, you can also take a deep rest on one of our bench</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/featured_spots/court.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-text"><i>Outdoor Basketball Court</i></h3>
                                    <p class="card-text">You can enjoy our Outdoor Basketball court and shows your skills, to your crush like you where like Stephen Curry. And enjoy playing also with your families and friends</p>
                                </div>
                            </div>
                        </div> </i></b>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/featured_spots/beach.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3><b>Beach View</b></h3>
                                    <p class="card-text">Take a deep refreshing breath, have fun, and enjoy the tranquil and oceanic feeling as you relax by the beachfront</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            </section>
            <section class="section material" data-block-section="3" id="material" style="background-image:url('{{asset("assets/landingpage/Room_bg.jpg")}}');background-size:100%;color:#FFFF;background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url('{{asset("assets/landingpage/Room_bg.jpg")}}')">
                <div class="container">
                    <div class="row">
                    <div class="row mb-2 ">
                        <h1><i>"Indulge in the <b>tranquility</b> of our hotel rooms"</i></h1>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/demos/common_room.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3>Club Room</h3>
                                    <p class="card-text"> Our Club room can be used for  meetings, activities, socializing, and other event you are hosting. While enjoying our clubroom</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/demos/Luxury_demo.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-text"><i>Luxury Room</i></h3>
                                    <p class="card-text">Lavish bathrooms  high-end, lush linens and towels. Deluxe pillows and mattresses so your sleeping hours are as blissful as your waking ones.</p>
                                </div>
                            </div>
                        </div> </i></b>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/demos/mid_hotel_room.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3><b>Superior Room</b></h3>
                                    <p class="card-text">The Superior Room comprises of 1 Double bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. This room is larger than the Standard Room.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </section>
            <section class="section material" data-block-section="4" id="material" style="background-image:url('{{asset("assets/landingpage/Room_bg.jpg")}}');background-size:100%;color:#FFFF;background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url('{{asset("assets/landingpage/Room_bg.jpg")}}')">
                <div class="container">
                    <div class="row mb-2 ">
                        <h1><i>"Experience the <b>tranquility</b> of our Fancy Restaurants"</i></h1>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/restau.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3>Dining Hall</h3>
                                    <p class="card-text">Enjoy the fancy restaurant of ours together with your loved ones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/food.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3 class="card-text"><i>Our Signature Foods</i></h3>
                                    <p class="card-text">Enjoy Savoring our Yummy Delicious Fancy Foods, While having a moments with your loved ones.</p>
                                </div>
                            </div>
                        </div> </i></b>
                        <div class="col-4">
                            <div class="card" style="width: 25rem;">
                                <img class="card-img-top p-3 Rounded" src="{{URL::asset('assets/landingpage/function.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                    <h3>Function Hall</h3>
                                    <p class="card-text">Our function hall where you can hosts your celebration it can be a meeting, birthdays, wedding and much more</p>
                                </div>
                            </div>
                        </div>
                  
                </div> 
            </section>
            <section class="section journal" data-block-section="5" id="journal" style="background-image:url('{{asset("assets/landingpage/bg_image2.jpg")}}');background-size:100%;color:#FFFF;background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url('{{asset("assets/landingpage/Room_bg.jpg")}}')">
                <div class="dropshadow-effect">    
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <a href="https://bicol-u.edu.ph/">
                                    <img src="{{URL::asset('assets/landingpage/icons/BU-logo.png')}}" alt="BU LOGO" style="width:150px;height:150px">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="https://github.com/BSIT-3C/hotel-management-system">
                                        <img src="{{URL::asset('assets/landingpage/icons/github-logo.png')}}" alt="GitHub Logo" style="width:150px;height:150px">
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="https://www.facebook.com/groups/400556715509239">
                                    <img src="{{URL::asset('assets/landingpage/icons/facebook-logo.png')}}" alt="Facebook Logo" style="width:150px;height:150px">
                                </a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
       
    </main>
</body>
</html>
<script type="text/javascript" src="{{ URL::asset('js/homepage.js') }}"></script>
<!-- Footer -->
<footer>
  