@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    <div class="card border-primary mb-3" style="max-width: 100%; height: 520px; margin-left: 10px; border-radius: 15px;">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Room List
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="list">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Room Number</th>
                                <th>Room Type</th>
                                <th>Room Status</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless (count($view_rooms) == 0)
                                @foreach ($view_rooms as $room)
                                    <tr>
                                        <td>{{$room['id']}}</td>
                                        <td>{{$room['room_number']}}</td>
                                        <td>{{$room['room_type_id']}}</td>
                                        <td>{{$room['room_status_id']}}</td>
                                        <td>{{$room['updated_at']}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                  <td colspan="7">No Employee Records</td>
                                </tr>
                            @endunless
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#list').DataTable();
        });
    </script>