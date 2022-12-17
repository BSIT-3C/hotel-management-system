@extends('layouts.app')

@section('content')
<div class= "container" style="width: 50%; margin-top: 130px;">
    <div class="card mb-3">
        <div class="row">
            <div class="card"><br>
                <div class="card-header" style="background-color:#1840C4; color:#FFFFFF; border-radius: 5px;">
                    Room Description
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label"><strong>Room No:</strong> </label>
                        {{$view_rooms['room_number']}}
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Room Type:</strong> </label>
                        {{ $view_rooms->roomTypeBeds->room_type->room_type }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Room Status:</strong> </label>
                        {{ $view_rooms->roomStatus->room_status }}
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><strong>Room Sub Status:</strong> </label>
                        {{ $view_rooms->roomSubStatus->sub_status }}
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