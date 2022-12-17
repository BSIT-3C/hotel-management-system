@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
<div class="row justify-content-center mt-5">
    <!-- Department Table -->
    <main class="">
      <div class="m-auto p-5">
        <div class="row mb-5">
          <div class="col-6 mt-3 text-end" style="color: #1840C4">
            <h5 class="fw-bold fs-3">Departments </h5>
          </div>  
            <div class="col-6 mt-3" style="color: #1840C4">
              <img class=" img-fluid"  src="{{asset('images/logo2.png')}}" alt="logo" style="height: 30px; width: auto;">
            </div>
        </div>

            <div class="dtr_Tables rounded p-2">
                <table id="table" class="table table-hover table-primary table-striped text-center shadow-sm">
                    <thead>
                      <tr class="text-center">
                        <th class="text-center" scope="col">Employee Name</th>
                        <th class="text-center"scope="col">ID Number</th>
                        <th class="text-center"scope="col">Role</th>
                        <th class="text-center"scope="col">Position</th>
                        <th class="text-center"scope="col">Departemnt</th>
                      </tr>
                    </thead>
                    <tbody class="text-center">

                    @unless (count($Lists) == 0)
                    
                      @foreach ($Lists as $List)
                        <tr>
                            <td>{{$List->last_name}} {{$List->first_name}}</th>
                            <td>{{$List->id}}</td>
                            <td>{{$List->role}}</td>
                            <td>{{$List->position->position}}</td>
                            <td>{{$List->position->department->department}}</td>
                        </tr> 
                      @endforeach
                        
                    @else
                        <tr>
                          <td>No Employee Records</td>
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
     <!-- Department table -->
</div>
<script>
  
</script>
@endsection

