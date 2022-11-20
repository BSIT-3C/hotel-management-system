<!DOCTYPE html>
<html>

<head>
    <title>Information</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
        .primary {
            background-color: rgb(24, 64, 196);
        }

        .secondary {
            background-color: rgb(225, 223, 210);
        }

        .tertiary {
            background-color: rgb(255, 255, 255);
        }

        .quarternary {
            background-color: rgb(223, 223, 223);
        }
    </style>
</head>

<body>
    <x-header />
    <div class="d-flex">
        <div class="col-7">
            <ul class=" justify-content-evenly nav nav-pills my-3 me-0" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="border px-5 rounded-pill nav-link" id="pills-superior-tab" data-bs-toggle="pill" data-bs-target="#pills-superior" type="button" role="tab" aria-controls="pills-superior" aria-selected="true">Superior</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="border px-5 rounded-pill nav-link active" id="pills-luxury-tab" data-bs-toggle="pill" data-bs-target="#pills-luxury" type="button" role="tab" aria-controls="pills-luxury" aria-selected="false">Luxury</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="border px-5 rounded-pill nav-link" id="pills-club-tab" data-bs-toggle="pill" data-bs-target="#pills-club" type="button" role="tab" aria-controls="pills-club" aria-selected="false">Club</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="border px-5 rounded-pill nav-link" id="pills-suite-tab" data-bs-toggle="pill" data-bs-target="#pills-suite" type="button" role="tab" aria-controls="pills-suite" aria-selected="false">Suite</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="pills-superior" role="tabpanel" aria-labelledby="pills-superior-tab" tabindex="0">
                    <div class="">
                        <section>
                            <div class="">
                                <div class="">
                                    <div class="mx-3">
                                        <h2 class="fw-bold">Superior Room</h2>
                                        <div class="row gap-2 mb-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/bed.png') }}" width="60" height="60">
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Type</h3>
                                                    <p class="m-0"><b> King sized bed </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/arrow.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Side</h3>
                                                    <p class="m-0"><b> Left and Right Sides </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/stair.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Floor</h3>
                                                    <p class="m-0"><b> 5th and 6th Floors </b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gap-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/tag.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Room to Right</h3>
                                                    <p class="m-0"><b> 403 Connecting </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/view.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">View</h3>
                                                    <p class="m-0"><b> Ocean View </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/size.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Size</h3>
                                                    <p class="m-0"><b>220 SqFt</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-3 mt-5">
                                        <h2 class="fw-bold">Description</h2>
                                        <p class="">
                                            This spacious king bedroom, one of our most popular types, is
                                            great for romantic getaways and honeymoons.
                                            This spacious room, which is decorated in natural yellow and
                                            beige tones, has oak floors, French country-style
                                            painted furniture, a relaxing sitting area, a gas log
                                            fireplace, and a small dining table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="">
                            <div class="mx-3" style="background-color:#DFDFDF;">
                                <div class="mx-3 py-2">
                                    <h4 style="font-size: 24px; font-style: Semi Bold;">Amenities</h4>

                                    <div class="text-justified mx-1">
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Balcony</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Drapes</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Mini-Bar</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>A/C</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>ADA Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT TV</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Large Closet</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Black-out Curtains</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Small Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Lights</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Bath Tub</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Private Pool</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Living Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Door Locks On-Line</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Free Wi-Fi</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Security Safe</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mx-3 py-2" style="background-color:#DFDFDF;">
                                <div class="container text-justified" style="font-size: 16px">
                                    <h4 class="" style="font-size: 24px;">Other Details</h4>

                                    <div class="mx-1 row align-items-start">
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-people-fill"> 1-5 Guests</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-door-closed-fill"> 1-3 Beds</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-slash-circle"> 1 Bath</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-border-all"> 1-3 Bedrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="pills-luxury" role="tabpanel" aria-labelledby="pills-luxury-tab" tabindex="0">
                    <div class="">
                        <section>
                            <div class="">
                                <div class="">
                                    <div class="mx-3">
                                        <h2 class="fw-bold">Luxury Room</h2>
                                        <div class="row gap-2 mb-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/bed.png') }}" width="60" height="60">
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Type</h3>
                                                    <p class="m-0"><b> King sized bed </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/arrow.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Side</h3>
                                                    <p class="m-0"><b> Left and Right Sides </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/stair.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Floor</h3>
                                                    <p class="m-0"><b> 5th and 6th Floors </b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gap-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/tag.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Room to Right</h3>
                                                    <p class="m-0"><b> 403 Connecting </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/view.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">View</h3>
                                                    <p class="m-0"><b> Ocean View </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/size.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Size</h3>
                                                    <p class="m-0"><b>220 SqFt</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-3 mt-5">
                                        <h2 class="fw-bold">Description</h2>
                                        <p class="">
                                            This spacious king bedroom, one of our most popular types, is
                                            great for romantic getaways and honeymoons.
                                            This spacious room, which is decorated in natural yellow and
                                            beige tones, has oak floors, French country-style
                                            painted furniture, a relaxing sitting area, a gas log
                                            fireplace, and a small dining table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="">
                            <div class="mx-3" style="background-color:#DFDFDF;">
                                <div class="mx-3 py-2">
                                    <h4 style="font-size: 24px; font-style: Semi Bold;">Amenities</h4>

                                    <div class="text-justified mx-1">
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Balcony</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Drapes</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Mini-Bar</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>A/C</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>ADA Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT TV</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Large Closet</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Black-out Curtains</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Small Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Lights</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Bath Tub</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Private Pool</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Living Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Door Locks On-Line</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Free Wi-Fi</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Security Safe</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mx-3 py-2" style="background-color:#DFDFDF;">
                                <div class="container text-justified" style="font-size: 16px">
                                    <h4 class="" style="font-size: 24px;">Other Details</h4>

                                    <div class="mx-1 row align-items-start">
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-people-fill"> 1-5 Guests</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-door-closed-fill"> 1-3 Beds</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-slash-circle"> 1 Bath</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-border-all"> 1-3 Bedrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-club" role="tabpanel" aria-labelledby="pills-club-tab" tabindex="0">
                    <div class="">
                        <section>
                            <div class="">
                                <div class="">
                                    <div class="mx-3">
                                        <h2 class="fw-bold">Club</h2>
                                        <div class="row gap-2 mb-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/bed.png') }}" width="60" height="60">
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Type</h3>
                                                    <p class="m-0"><b> King sized bed </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/arrow.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Side</h3>
                                                    <p class="m-0"><b> Left and Right Sides </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/stair.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Floor</h3>
                                                    <p class="m-0"><b> 5th and 6th Floors </b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gap-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/tag.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Room to Right</h3>
                                                    <p class="m-0"><b> 403 Connecting </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/view.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">View</h3>
                                                    <p class="m-0"><b> Ocean View </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/size.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Size</h3>
                                                    <p class="m-0"><b>220 SqFt</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-3 mt-5">
                                        <h2 class="fw-bold">Description</h2>
                                        <p class="">
                                            This spacious king bedroom, one of our most popular types, is
                                            great for romantic getaways and honeymoons.
                                            This spacious room, which is decorated in natural yellow and
                                            beige tones, has oak floors, French country-style
                                            painted furniture, a relaxing sitting area, a gas log
                                            fireplace, and a small dining table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="">
                            <div class="mx-3" style="background-color:#DFDFDF;">
                                <div class="mx-3 py-2">
                                    <h4 style="font-size: 24px; font-style: Semi Bold;">Amenities</h4>

                                    <div class="text-justified mx-1">
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Balcony</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Drapes</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Mini-Bar</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>A/C</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>ADA Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT TV</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Large Closet</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Black-out Curtains</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Small Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Lights</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Bath Tub</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Private Pool</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Living Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Door Locks On-Line</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Free Wi-Fi</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Security Safe</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mx-3 py-2" style="background-color:#DFDFDF;">
                                <div class="container text-justified" style="font-size: 16px">
                                    <h4 class="" style="font-size: 24px;">Other Details</h4>

                                    <div class="mx-1 row align-items-start">
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-people-fill"> 1-5 Guests</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-door-closed-fill"> 1-3 Beds</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-slash-circle"> 1 Bath</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-border-all"> 1-3 Bedrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-suite" role="tabpanel" aria-labelledby="pills-suite-tab" tabindex="0">
                    <div class="">
                        <section>
                            <div class="">
                                <div class="">
                                    <div class="mx-3">
                                        <h2 class="fw-bold">Suite</h2>
                                        <div class="row gap-2 mb-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/bed.png') }}" width="60" height="60">
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Type</h3>
                                                    <p class="m-0"><b> King sized bed </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/arrow.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Side</h3>
                                                    <p class="m-0"><b> Left and Right Sides </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/stair.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Floor</h3>
                                                    <p class="m-0"><b> 5th and 6th Floors </b></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row gap-2 mx-1">
                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/tag.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Room to Right</h3>
                                                    <p class="m-0"><b> 403 Connecting </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/view.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">View</h3>
                                                    <p class="m-0"><b> Ocean View </b></p>
                                                </div>
                                            </div>

                                            <div class="col" style="background-color: #dfdfdf">
                                                <img class="me-2 my-2 float-start" src="{{ asset('assets/size.png') }}" alt="" width="60" height="60" />
                                                <div class="text-black">
                                                    <h3 class="fs-6 lh-1 mt-3 fw-light">Size</h3>
                                                    <p class="m-0"><b>220 SqFt</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-3 mt-5">
                                        <h2 class="fw-bold">Description</h2>
                                        <p class="">
                                            This spacious king bedroom, one of our most popular types, is
                                            great for romantic getaways and honeymoons.
                                            This spacious room, which is decorated in natural yellow and
                                            beige tones, has oak floors, French country-style
                                            painted furniture, a relaxing sitting area, a gas log
                                            fireplace, and a small dining table.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="">
                            <div class="mx-3" style="background-color:#DFDFDF;">
                                <div class="mx-3 py-2">
                                    <h4 style="font-size: 24px; font-style: Semi Bold;">Amenities</h4>

                                    <div class="text-justified mx-1">
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Balcony</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Drapes</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Mini-Bar</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>A/C</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>ADA Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT TV</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Large Closet</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Black-out Curtains</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Small Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>IOT Lights</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Bath Tub</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Private Pool</span>
                                            </div>
                                        </div>
                                        <div class="mb-1 row align-items-start">
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Living Room</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Door Locks On-Line</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Free Wi-Fi</span>
                                            </div>
                                            <div class="ps-1 pe-2 col">
                                                <x-ui.check />
                                                <span>Security Safe</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-2 mx-3 py-2" style="background-color:#DFDFDF;">
                                <div class="container text-justified" style="font-size: 16px">
                                    <h4 class="" style="font-size: 24px;">Other Details</h4>

                                    <div class="mx-1 row align-items-start">
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-people-fill"> 1-5 Guests</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-door-closed-fill"> 1-3 Beds</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-slash-circle"> 1 Bath</span>
                                        </div>
                                        <div class="ps-1 pe-2 col">
                                            <span class="bi bi-border-all"> 1-3 Bedrooms</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-5">
            <div class="secondary pb-2">
                <section class="position-relative">
                    <div class="">
                        <!-- Carousel -->
                        <div id="luxuryImgs" class="carousel carousel-dark slide p-3" data-bs-ride="true">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/luxury1.JPG') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/luxury2.JPG') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/luxury3.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/luxury4.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/luxury5.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/luxury6.jpg') }}" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#luxuryImgs" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#luxuryImgs" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                        <!-- Thumbnails -->
                        <div class="row justify-content-evenly mx-2">
                            <img src="{{ asset('assets/luxury1.JPG') }}" class="col-2 active" aria-current="true" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="0" aria-label="Slide 1">
                            <img src="{{ asset('assets/luxury2.jpg') }}" class="col-2" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="1" aria-label="Slide 2">
                            <img src="{{ asset('assets/luxury3.jpg') }}" class="col-2" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="2" aria-label="Slide 3">
                            <img src="{{ asset('assets/luxury4.jpg') }}" class="col-2" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="3" aria-label="Slide 4">
                            <img src="{{ asset('assets/luxury5.jpg') }}" class="col-2" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="4" aria-label="Slide 5">
                            <img src="{{ asset('assets/luxury6.jpg') }}" class="col-2" type="button" data-bs-target="#luxuryImgs" data-bs-slide-to="5" aria-label="Slide 6">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>