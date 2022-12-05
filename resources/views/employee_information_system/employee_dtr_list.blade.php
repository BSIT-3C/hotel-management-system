@extends('layouts.app')

@section('content')
<div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%; margin-top: 130px;" >
    <div class="row justify-content-center mt-5">
        <!-- Employee Table -->
        <main class="">
          <div class="m-auto p-5">
            <div class="row mb-5" style="position: relative; left: 18%">
              <div class="col-6 mt-3 text-end" style="color: #1840C4;">
                <h5 class="fw-bold fs-3">DAILY TIME RECORDS LOGS </h5>
              </div>  
               <div class="col-6 mt-3" style="color: #1840C4">
                  <img class=" img-fluid"  src="{{asset('images/logo2.png')}}" alt="logo" style="height: 30px; width: auto;">
                </div>
            </div>
            {{-- <div class="d-flex justify-content-center m-auto search mb-5">
                <div class="pe-2">
                    <form class="d-flex" method="post" action="">
                        <label for="search" class="form-label pe-3 mt-1" ><strong>Search</strong></label>
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
            <div class="row">
                <div class="col-6 shadow p-4">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-12 mb-4 id">
                                <p class="text-center fw-bold text-uppercase f-xl text-primary fs-5 text-uppercase">id {{$list->id}}</p>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <img class="rounded-circle shadow" src="{{$list->photo ? asset('storage/' . $list->photo) : asset('iamges/logo.png')}}" height="238px" width="236px" alt="">
                            </div>
                            <div class="col-12 text-center">
                                <span class="fs-4" style="font-family: 'Ubunto', sans-serif; font-weight: 600;">{{$list->first_name}} {{$list->last_name}}</span> <br>
                            </div>
                            <div class="col-12 text-center mb-4">
                                <span class="d-block" style="margin-left: -50px;">Front Office</span>
                                <span style="margin-left: -27px;">Front Manager</span>
                            </div>
                            <div class="col-12 workHour">
                                <p class="text-center fw-bold text-primary">{{$list->work_start}} to {{$list->work_end}}</p>
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
                        <div class="col-6 d-grid gap-2">
                            <button type="submit" id="time_in" class="btn btn-primary fw-bold"><a href="/home/record/1" class="text-white text-decoration-none">Time - in</a></button>
                        </div>           
                        {{-- onclick="this.disabled=true;document.getElementById('time_out').disabled=false;" --}}
                        <div class="col-6 d-grid gap-2">
                            <button type="button" id="time_out"  class="btn btn-danger fw-bold"><a href="/home/record/2" class="text-white text-decoration-none">Time - out</a></button>
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
    
                            @unless (count($dtrs) == 0)
                            
                            @foreach ($dtrs as $dtr)

                                @if ($dtr->check_out == null)
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
                                <td>{{date('h:i:sa', strtotime($dtr->check_in))}}</td>
                                <td>@if ($dtr->check_out != null)
                                    {{date('h:i:s', strtotime($dtr->check_out))}}pm
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