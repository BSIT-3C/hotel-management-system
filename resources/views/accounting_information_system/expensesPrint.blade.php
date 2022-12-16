<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXPENSES</title>

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<style>
    @page {
        /* margin: 0mm; */
    }

    @media print {
        .print {
            position: absolute;
            top: 0;
            left: 0px;
            width: 100%;
            margin: 0 !important;

            /* border: 1px solid red !important; */
            padding: 0 !important;
            /* transform: scale(50%) */
            /* display: none */
            border: 0 !important;
            color-adjust: exact;
        }

        .header .row>div {
            background: var(--bs-gray-200)
        }

        h6 {
            font-size: .8em !important;
        }

        body {
            zoom: 75%;
            padding: 0 !important;
            margin: 0 !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* .container-fluid {
            padding: 0 !important;
            margin: 0 !important;
        } */

        .no-print {
            display: none
        }
    }
</style>


<body>
    <div class="container-fluid ">

        <div class="container m-5 p-5 rounded border print">
            <div class="row">
                <div class="col">
                    <img alt="tranquil13611" src="{{ asset('images/playground_assets/tranquil13611-w3f2-200h.png') }}"
                        class="a-i-s-expenses-view-tranquil11" />
                </div>
                <div class="col ">
                    <div class="row">
                        <div class="col d-flex align-items-end flex-column">
                            <p class="text-muted" style="margin: 0 !important">ISSUE DATE</p>
                            <h5>{{ now()->format('F d, Y') }}</h5>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5 mx-1 border">
                <div class="header">
                    <div class="row">
                        <div class="col-6 py-2 px-5" style="background: var(--bs-gray-200)">
                            <h6 class="text-muted m-0 ">DESCRIPTION</h6>
                        </div>
                        <div class="col-2 py-2 px-5" style="background: var(--bs-gray-200)">
                            <h6 class="text-muted m-0 ">UNIT PRICE</h6>
                        </div>
                        <div class="col-2 py-2 px-5" style="background: var(--bs-gray-200)">
                            <h6 class="text-muted m-0 ms-3">DATE</h6>
                        </div>
                        <div class="col-2 py-2 px-5" style="background: var(--bs-gray-200)">
                            <h6 class="text-muted m-0 ">AMOUNT</h6>
                        </div>
                    </div>
                </div>

                @if ($list)
                    @if (count($list['maintenance']))
                        <div class="content mt-3 ms-2">
                            <div class="row py-2 border-bottom">
                                <div class="row ">

                                    <div class="col-6">
                                        <h5>Maintenance</h5>
                                    </div>
                                    <div class="col-2 text-center">
                                        {{-- <p>₱{{ $type_total['maintenance'] }}</p> --}}
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>{{ $list['maintenance'][0]->date->format('F, Y') }}</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <h5>₱{{ $type_total['maintenance'] }}</h5>
                                    </div>
                                </div>

                                @foreach ($list['maintenance'] as $item)
                                    <div class="row">
                                        <div class="col-6">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p>₱{{ $item->unit_price }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (count($list['room_type']))
                        <div class="content mt-3 ms-2">
                            <div class="row py-2 border-bottom">
                                <div class="row ">

                                    <div class="col-6">
                                        <h5>Room Type</h5>
                                    </div>
                                    <div class="col-2 text-center">
                                        {{-- <p>₱{{ $type_total['room_type'] }}</p> --}}
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>{{ $list['room_type'][0]->date->format('F, Y') }}</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <h5>₱{{ $type_total['room_type'] }}</h5>
                                    </div>
                                </div>

                                @foreach ($list['room_type'] as $item)
                                    <div class="row">
                                        <div class="col-6">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p>₱{{ $item->unit_price }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (count($list['utility_cost']))
                        <div class="content mt-3 ms-2">
                            <div class="row py-2">
                                <div class="row ">

                                    <div class="col-6">
                                        <h5>Utility Cost</h5>
                                    </div>
                                    <div class="col-2 text-center">
                                        {{-- <p>₱{{ $type_total['utility_cost'] }}</p> --}}
                                    </div>
                                    <div class="col-2 text-center">
                                        <p>{{ $list['utility_cost'][0]->date->format('F, Y') }}</p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <h5>₱{{ $type_total['utility_cost'] }}</h5>
                                    </div>
                                </div>

                                @foreach ($list['utility_cost'] as $item)
                                    <div class="row">
                                        <div class="col-6">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p>₱{{ $item->unit_price }}</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <p></p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                @endif

            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-end me-5">
                    <h3>Total: <span class="ms-5">₱{{ $total }}</span></h3>
                </div>
            </div>
        </div>

        <div class="row mb-5 no-print" style="margin-right: 8em">
            <div class="col d-flex justify-content-end">
                <button class="btn btn-primary" id="printBtn" onclick="window.print()"><i
                        class="bi bi-printer-fill"></i> Print</button>
            </div>
        </div>
    </div>

</body>

</html>
