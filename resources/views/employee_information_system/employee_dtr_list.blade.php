@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
    <div class="row justify-content-center mt-5">
        <!-- Employee Table -->
        <main class="">
          <div class="m-auto p-5">
            <div class="row mb-5" style="position: relative; left: 18%">
              <div class="col-6 mt-3 text-end" style="color: #1840C4;">
                <h5 class="fw-bold fs-3">DAILY TIME RECORDS LOGS</h5>
              </div>  
               <div class="col-6 mt-3" style="color: #1840C4">
                  <img class=" img-fluid"  src="{{ asset('images/logo2.png') }}" alt="logo" style="height: 30px; width: auto;">
                </div>
            </div>
            <div class="row">
                <div class="col-6 shadow p-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12 mb-4 id">
                                <p class="text-center fw-bold text-uppercase f-xl text-primary fs-5 text-uppercase">id {{$employee->id}}</p>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <img class="rounded-circle shadow" src="{{$employee->photo ? asset( 'storage/' . $employee->photo) : asset('images/logo.png') }}" height="238px" width="236px" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <span class="fs-4" style="font-family: 'Ubunto', sans-serif; font-weight: 600;">{{$employee->first_name}} {{$employee->last_name}}</span> <br>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <span class="d-block" style="margin-left: -50px;">Front Office</span>
                                <span style="margin-left: -27px;">Front Manager</span>
                            </div>
                            <div class="col-12 workHour">
                                <p class="text-center fw-bold text-primary">{{$employee->work_start}} to {{$employee->work_end}}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="col-12 ms-4 fs-4 mb-5">
                                <p class="text-uppercase">Date Today</p>
                                <p class="ms-5 text-primary">{{date('Y-m-d')}}</p>
                            </div>
                            <div class="col-12 ms-4 fs-4 mb-5">
                                <p class="text-uppercase">CURRENT TIME</p>
                                <p class="ms-5 text-primary">{{date('h:i:sa')}}</p>
                            </div>
                            <div class="col-12 ms-4 fs-4">
                                <p>CURRENT INCOME</p>
                                <p class="ms-5 text-primary">Php 30,000.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row mb-3">
                        <div class="col-6 d-flex justify-content-center">
                            <form method="POST" action="/employee_information_system/record/timeIn">
                                @method('POST')
                                @csrf
                                <button type="submit" id="time_in" class="btn btn-primary fw-bold px-5">Time - in</button>
                            </form>      
                        </div>     
                    
                        <div class="col-6 d-flex justify-content-center">
                            <form method="POST" action="/employee_information_system/record/timeOut">
                                @method('POST')
                                @csrf
                                <button type="submit" id="time_out" class="btn btn-danger fw-bold px-5">Time - out</button>
                            </form>       
                        </div>
                        
                    </div>
                    <table id="table" class="table table-hover shadow table-primary table-striped text-center shadow-sm">
                        <thead>
                          <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time-in</th>
                            <th scope="col">Time-out</th>
                          </tr>
                        </thead>
                        <tbody class="text-center">
    
                            @if (!$dtrs->isEmpty())
                            
                            @foreach ($dtrs as $dtr)

                                @if (!$dtr->check_out)
                                    <script>
                                        document.getElementById('time_in').disabled = true;
                                        document.getElementById('time_out').disabled = false;
                                    </script>
                                @else
                                    <script>
                                        document.getElementById('time_out').disabled = true;
                                        document.getElementById('time_in').disabled = false;
                                    </script>
                                @endif

                                <tr>
                                <td>{{$dtr->date}}</td>
                                <td>{{ date('h:i:sa', strtotime($dtr->check_in)) }}</td>
                                <td>@if ($dtr->check_out != null)
                                    {{ date('h:i:s', strtotime($dtr->check_out)) }}pm
                                    @endif</td>
                                </tr>
                            @endforeach
                                
                            @else
                                <tr>
                                <td>No Daily Time Records</td>
                                <td></td>
                                <td></td>
                                </tr>
                            @endunless
    
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </main>
    </div>
</div>
@endsection