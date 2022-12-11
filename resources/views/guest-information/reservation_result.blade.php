<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Reservation Result</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Availed Rooms</h1>
                @if ($availed_rooms)

                    <ul>
                        @foreach ($availed_rooms as $room)
                            <li>RoomID: {{ $room->room_id }}</li>
                        @endforeach
                    </ul>
                @else
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="/guestinfo/reservation/list">Reservation List</a>
            </div>
        </div>
    </div>
</body>

</html>
