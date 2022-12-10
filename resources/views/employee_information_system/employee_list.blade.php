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
                      </tr>
                    </thead>
                    <tbody class="text-center">

                    @unless (count($Lists) == 0)
                    
                      @foreach ($Lists as $List)
                        @if ($List->deleted_at == null)
                          <tr>
                            <td><a href="/employee_information_system/profile/{{$List->id}}" style="text-decoration: none; color: #000">{{$List->last_name}} {{$List->first_name}}</a></th>
                            <td>{{$List->id}}</td>
                            <td>{{$List->gender}}</td>
                            <td>{{$List->address}}</td>
                            <td>{{$List->birthday}}</td>
                            <td>{{$List->email}}</td>
                            <td>{{$List->contact_number}}</td>
                            <td class="d-flex"><a href="/employee_information_system/edit/{{$List->id}}"><i class="fa-solid fa-pen-to-square text-primary pe-3"></i></a>
                            <form action="/employee_information_system/delete/{{$List->id}}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" style="background: none; border: none;"><i class="fa-solid fa-trash text-danger"></i></button>
                            </form>
                            </td>
                          </tr>
                        @endif
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

