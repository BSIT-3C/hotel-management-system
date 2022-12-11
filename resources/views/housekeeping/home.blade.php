@extends('layouts.app')

@section('content')
<div class="container" style="width: 90%; margin-top: 130px;">
    <div class="row">
        <div class="col-md-3" style="background-image: url('/images/housekeeping/HK.jpg'); border-radius:10px;">
            <div class="z-10">
                <h1 class="text-6xl font-bold uppercase" style="color: #1840C4">
                    House<span class="text-black">Keeping</span>
                </h1>
                <p class="paragraph"><h5>
                    Cleans and sanitizes hotel and guest rooms.<br>Vacuums and sweeps floors, carpets, and rugs.<br>
                    Makes beds and changes linens. Cleans and sanitizes bathrooms, showers, toilets, sinks, and countertops.<br>
                    Replenishes toiletries and towels.</h5>
                </p>      
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-primary mb-2" style="height: 280px; border-radius: 15px;">
                        <div class="card-body" style="text-align:center;"><br>
                            <i class="fa-solid fa-people-roof fa-5x"></i>
                            <h5 class="card-title">Manage Room Status</h5><br>
                            <br>
                            <a href="{{ route('manage-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">Manage Rooms</a>
                        </div>
                    </div>
                    <div class="card border-primary mb-2" style="height: 280px; border-radius: 15px;">
                        <div class="card-body" style="text-align:center;"><br>
                            <i class="fa-solid fa-glasses fa-5x"></i>
                            <h5 class="card-title">Report Lost & Found Items</h5><br>
                            <br>
                            <a href="{{ route('lostandfound-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">Manage L&F Items</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-primary mb-2" style="height: 280px; border-radius: 15px;">
                        <div class="card-body" style="text-align:center;"><br>
                            <i class="fa-solid fa-eye fa-5x"></i>
                            <h5 class="card-title">View All Room Status</h5><br>
                            <br>
                            <a href="{{ route('viewall-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">View Rooms</a>
                        </div>
                    </div>
                    <div class="card border-primary mb-2" style="height: 280px; border-radius: 15px;">
                        <div class="card-body" style="text-align:center;"><br>
                            <i class="fa-solid fa-pen-to-square fa-5x"></i>
                            <h5 class="card-title">Assign a Housekeeper</h5><br>
                            <br>
                            <a href="{{ route('assign-page')}}" class="btn btn-outline-primary" style="display: block; margin:0 auto;">Assign Someone</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
