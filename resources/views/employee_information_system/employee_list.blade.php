@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
<div class="row justify-content-center mt-5">
    <!-- Employee Table -->
    <main class="">
      <div class="m-auto p-5">
        <div class="row mb-5">
          <div class="col-6 mt-3 text-end" style="color: #1840C4">
            <h5 class="fw-bold fs-3">EMPLOYEES </h5>
          </div>  
            <div class="col-6 mt-3" style="color: #1840C4">
              <img class=" img-fluid"  src="{{asset('images/logo2.png')}}" alt="logo" style="height: 30px; width: auto;">
            </div>
        </div>

        {{-- SEARCH 
            <div class="d-flex justify-content-center m-auto search mb-4">
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
            </div>--}}

            <div class="dtr_Tables rounded p-2">
                <table id="table" class="table table-hover table-primary table-striped text-center shadow-sm">
                    <thead>
                      <tr>
                        <th scope="col">Employee Name</th>
                        <th scope="col">ID Number</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact #</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="text-center">

                    @unless (count($Lists) == 0)
                    
                      @foreach ($Lists as $List)
                        <tr>
                          <td><a href="/home/profile/{{$List->id}}" style="text-decoration: none; color: #000">{{$List->last_name}} {{$List->first_name}}</a></th>
                          <td>{{$List->id}}</td>
                          <td>{{$List->gender}}</td>
                          <td>{{$List->address}}</td>
                          <td>{{$List->birthday}}</td>
                          <td>{{$List->email}}</td>
                          <td>{{$List->contact_number}}</td>
                          <td><a href="/home/edit/{{$List->id}}"><i class="fa-solid fa-pen-to-square text-primary"></i></a></td>
                          <td>
                            <form action="/home/delete/{{$List->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" style="background: none; border: none;"><i class="fa-solid fa-trash text-danger"></i></button>
                              {{-- <a ><i class="fa-solid fa-trash text-danger"></i></a> --}}
                            </form>
                          </td>
                          {{-- <form id="delete-form" action="/home/delete/{{$List->id}}" method="DELETE" class="d-none">
                            @csrf
                          </form> --}}
                        </tr>
                      @endforeach
                        
                    @else
                        <tr>
                          <td colspan="7">No Employee Records</td>
                        </tr>
                    @endunless

                    </tbody>
                  </table>
            </div>
      </div>
    </main>
     <!-- Employee table -->
</div>
<script>
  
</script>
@endsection

