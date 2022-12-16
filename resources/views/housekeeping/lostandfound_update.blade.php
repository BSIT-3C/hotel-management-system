@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/lostandfound" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    
    <div class= "container" style="width: 50%; margin-top: 30px; background-color:#FFFFFF; border-radius:10px;"><br>
        <form method="post" action="/housekeeping/lostandfound-process_update/{{$items->id}}">
            @csrf <!--Security Measure-->
            <div class="form-floating mb-2" style="width: 500px; margin:auto;"><div>
                <select class="form-control" id="floatingInput" name="item_status" style="background-color: #DFDFDF; border:cornflowerblue;" required>
                
                    <option selected="true" disabled="true">Item Status</option>
                    <option value="Claimed">Claimed</option>
                    <option value="Found">Found</option></div>
                </select>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <input class="btn btn-primary" type="submit" value="Submit" style="width: 100px; margin:auto;"><br><br>
            </div><br>
        </form>
    </div>
</div>
@endsection