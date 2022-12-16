@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/manage" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>

    <div class= "container" style="width: 50%; margin-top: 30px; background-color:#FFFFFF; border-radius:10px;"><br>
        <form method="post" action="/housekeeping/manage-process_update/{{$view_rooms->id}}">
            @csrf <!--Security Measure-->
            <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                <select class="form-control" id="floatingInput" name="room_status" style="background-color: #DFDFDF; border:cornflowerblue;" required>
                    <option selected="true" disabled="true">Room Status</option>
                    <option value="4">Clean</option>
                    <option value="5">Dirty</option>
                    <option value="6">Cleaning</option>
                    <option value="7">Under Maintenance</option>
                </select>
            </div>

            <div class="d-flex justify-content-center align-items-center">
                <input class="btn btn-primary" type="submit" value="Submit" style="width: 100px; margin:auto;"><br><br>
            </div><br>
        </form>
    </div>
</div>
@endsection