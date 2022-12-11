@extends('layouts.app')

@section('content')
<div class= "container" style="width: 100%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    
        <div class="container ">

            <h1 style="display: flex; justify-content:center; align-items:center;">Filter Room Status</h1><br>
           

            <div class="row" style="display: flex; justify-content:center; align-items:center;">
                
                    <div class="card border-primary col-md-3 mb-3" style="width:250px; height: 250px; margin-left: 10px; margin-right: 10px;">
                        <div class="card-body" style="text-align:center;">
                            <i class="fa-solid fa-square-check fa-5x"></i>
                            <h5 class="card-title">Clean</h5><br>
                            <br>
                            <a href="{{ route('manage-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">View Rooms</a>
                        </div>
                    </div>

                    <div class="card border-primary col-md-3 mb-3" style="width:250px; height: 250px; margin-left: 10px; margin-right: 10px;">
                        <div class="card-body" style="text-align:center;">
                            <i class="fa-solid fa-brush fa-5x"></i>
                            <h5 class="card-title">Undergoing Cleaning</h5><br>
                            <br>
                            <a href="{{ route('select-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">View Rooms</a>
                        </div>
                    </div>

                    <div class="card border-primary col-md-3 mb-3" style="width:250px; height: 250px; margin-left: 10px; margin-right: 10px;">
                        <div class="card-body" style="text-align:center;">
                            <i class="fa-solid fa-trash fa-5x"></i>
                            <h5 class="card-title">Dirty</h5><br>
                            <br>
                            <a href="{{ route('manage-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">View Rooms</a>
                        </div>
                    </div>

                    <div class="card border-primary col-md-3 mb-3" style="width:250px; height: 250px; margin-left: 10px; margin-right: 10px;">
                        <div class="card-body" style="text-align:center;">
                            <i class="fa-solid fa-hammer fa-5x"></i>
                            <h5 class="card-title">Under Maintenance</h5><br>
                            <br>
                            <a href="{{ route('select-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">View Rooms</a>
                        </div>
                    </div>

            </div>


            
        </div>
</div>
@endsection