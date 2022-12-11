@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    <div class="card border-primary" style="max-width: 70%; margin:auto; border-radius: 15px;">
        <div class="container">
            <br>
            <h1 style="text-align:center;">Lost and Found Items</h1>
            <br>
            <div class="row">
                <form action="">
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <input type="number" min="1" max="50" class="form-control" id="floatingInput" placeholder="room_number" style="background-color: #DFDFDF;" required />
                        <label for="floatingInput">Room Number</label>
                    </div>
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <input type="number" min="1"class="form-control" id="floatingInput" placeholder="item_quantity" style="background-color: #DFDFDF;" required />
                        <label for="floatingInput">Item Quantity</label>
                    </div>
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <input type="text" class="form-control" id="floatingInput" placeholder="item_name" style="background-color: #DFDFDF;" required />
                        <label for="floatingInput">Item Name</label>
                    </div>
                    <div class="form-floating mb-2" style="width: 500px; margin:auto;">
                        <input type="date" class="form-control" id="floatingInput" placeholder="date" style="background-color: #DFDFDF;" required />
                        <label for="floatingInput">Date & Time</label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <input class="btn btn-primary" type="submit" value="Submit" style="width: 100px; margin:auto;"><br><br>
                    </div><br>
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection