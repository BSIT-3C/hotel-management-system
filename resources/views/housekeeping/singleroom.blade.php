@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <div class="card border-primary mb-3" style="max-width: 100%; height: 520px; margin-left: 10px; border-radius: 15px;">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Room Description
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Room No.:</strong> </label>
                        {{$view_rooms['room_number']}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Room Type:</strong> </label>
                        {{$view_rooms['room_number']}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Room Status:</strong> </label>
                        {{$view_rooms['room_number']}}
                    </div>
                    <a href="/housekeeping/viewall" class="inline-block text-black ml-4 mb-4">
                        <button class="btn btn-primary mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection