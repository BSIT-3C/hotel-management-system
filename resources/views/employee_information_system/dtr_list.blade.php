@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
<div class="row justify-content-center mt-5">
    <!-- Daily Time Records Table -->
    <main class="">
      <div class="m-auto p-5">
        <div class="row mb-5" style="margin-left: 7rem">
          <div class="col-6 mt-3 text-end" style="color: #1840C4">
            <h5 class="fw-bold fs-3">DAILY TIME RECORDS </h5>
          </div>  
            <div class="col-6 mt-3" style="color: #1840C4">
              <img class=" img-fluid"  src="{{asset('images/logo2.png')}}" alt="logo" style="height: 30px; width: auto;">
            </div>
        </div>
            {{-- <div class="d-flex justify-content-center m-auto search mb-4">
                <div class="pe-2">
                    <form class="d-flex" method="post" action="">
                        <label for="search" class="form-label pe-3 mt-1"><strong>Search</strong></label>
                        <input type="search" class="form-control shadow-sm" id="search" style="width: 700px; height: auto;">
                    </form>
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle text-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background: none; border: none;">
                      Filter <i class="fa-solid fa-filter"></i>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Actions</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
            </div> --}}

            <div class="dtr_Tables rounded p-2">
                <table id="table" class="table table-hover table-primary table-striped text-center shadow-sm">
                    <thead class="text-center">
                      <tr>
                        <th scope="col">Employee Name</th>
                        <th scope="col">ID Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time-in</th>
                        <th scope="col">Time-out</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">

                    @unless (count($Lists) == 0)
                    
                      @foreach ($Lists as $List)
                        <tr>
                          <td>{{$List->last_name}} {{$List->first_name}}</th>
                          <td>{{$List->id}}</td>
                          <td>{{$List->date}}</td>
                          <td>{{date('h:i:sa', strtotime($List->check_in))}}</td>
                          <td>{{date('h:i:s', strtotime($List->check_out))}}pm</td>
                        </tr>
                      @endforeach
                        
                    @else
                        <tr>
                          <td class="text-center">No Daily Time Records</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                    @endunless

                    </tbody>
                  </table>
            </div>
      </div>
    </main>
     <!-- Daily Time Records Table -->
</div>
@endsection