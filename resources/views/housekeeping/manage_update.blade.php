@extends('layouts.app')

@section('content')
    <div class="container" style="width: 90%; margin-top: 130px;">
        <a href="/housekeeping/manage" class="inline-block text-black ml-4 mb-4">
            <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
        </a>

        <div class="container" style="width: 50%; margin-top: 30px; background-color:#FFFFFF; border-radius:10px;"><br>
            <form method="post" action="/housekeeping/manage-process_update/{{ $view_rooms->id }}">
                @csrf
                <!--Security Measure-->
                <div class="mb-5">
                    <label for="" class="ms-3 mb-3">Room Status</label>
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <select class="form-select" id="floatingInput" name="room_status"
                            style="background-color: #DFDFDF; border:cornflowerblue;" required>

                            @foreach ($room_statuses as $status)
                                <option value="{{ $status->id }}" @if ($view_rooms->room_status_id == $status->id) selected @endif>
                                    {{ $status->room_status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">

                    <label for="" class="ms-3 mb-3">Room Substatus</label>
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <select class="form-select" id="floatingInput" name="room_sub_status"
                            style="background-color: #DFDFDF; border:cornflowerblue;" required>
                            @foreach ($room_sub_statuses as $status)
                                <option value="{{ $status->id }}" @if ($view_rooms->room_sub_status_id == $status->id) selected @endif>
                                    {{ $status->sub_status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    <input class="btn btn-primary" type="submit" value="Submit" style="width: 100px; margin:auto;"><br><br>
                </div><br>
            </form>
        </div>
    </div>
@endsection
