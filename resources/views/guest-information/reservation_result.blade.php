<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="{{ asset('css/result.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>Reservation Result</title>
</head>

<body>
    <div class="container">
        <div class="mt-5 mb-5 row border p-3">
            <div class="text-center">
                @if ($availed_rooms)
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 48px"></i>
                    <h1>Success</h1>
                @else
                    <i class="bi bi-x-circle-fill text-danger" style="font-size: 48px"></i>
                    <h1>Failed</h1>
                @endif
            </div>
            <div class="row content">
                <div class="mb-3 title">

                    <h3>Availed Rooms </h3>
                    <div class="chip">@php echo $availed_rooms ? count($availed_rooms) : 0 @endphp OUT OF {{ $entered_room_count }}</div>
                </div>

                @if ($availed_rooms)

                    <ul>
                        @foreach ($availed_rooms as $room)
                            <li>
                                <div class="mb-3 p-3 ps-0 row border" style="border-radius: 8px">
                                    <div class=" col-2 d-flex justify-content-center">

                                        <div class="room-id text-center">
                                            <p class="text-muted">Room No:</p>
                                            <h3>{{ $room->room_id }}</h3>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <h4>{{ $room->room->roomType->room_type }}</h4>
                                        <div class="row mt-4">

                                            <div class="col-5">
                                                <p class="text-muted" style="margin: 0 !important">Check In</p>
                                                <p class="text" style="margin: 0 !important">
                                                    {{ $room->check_in->format('M j, Y @ g:i a') }}</p>
                                            </div>
                                            <div class="col-2 d-inline-flex align-items-center justify-content-center">
                                                <i class="bi bi-chevron-right chevron"></i>
                                            </div>
                                            <div class="col-5">
                                                <p class="text-muted" style="margin: 0 !important">Check Out</p>
                                                <p class="text" style="margin: 0 !important">
                                                    {{ $room->check_out->format('M j, Y @ g:i a') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </ul>
                @else
                    <p>Sorry, there are no available rooms.</p>
                @endif
            </div>

            <div class="row">
                <div class="col d-flex justify-content-end gap-2">
                    <a class="btn btn-outline-primary" href="javascript:history.back()">Retry</a>
                    <a class="btn btn-primary" href="/guestinfo/reservation/list">Continue to reservation list</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
