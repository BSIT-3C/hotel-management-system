@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>

    <form method="post" action="/housekeeping/lostandfound-process_update/{{$items->id}}">
        @csrf <!--Security Measure-->
        <div class="form-floating mb-2" style="width: 500px; margin:auto;">
            <input type="text" class="form-control" id="floatingInput" name="item_status" placeholder="item_status" value="{{$items->item_status}}" style="background-color: #DFDFDF;" required />
            <label for="floatingInput">Item Status</label>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <input class="btn btn-primary" type="submit" value="Submit" style="width: 100px; margin:auto;"><br><br>
        </div><br>
        
    </form>
</div>
@endsection