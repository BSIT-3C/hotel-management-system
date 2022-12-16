@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    
        <div class="row">
            <div class="card"><br>
                <div class="card-header" style="background-color:#1840C4; color:#FFFFFF; border-radius: 5px;">
                    Employee List
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="list">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Last Name</th>
                                <th>First Name</th>
                                <th>Position</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @unless (count($employees) == 0)
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>{{$employee['id']}}</td>
                                        <td>{{$employee['last_name']}}</td>
                                        <td>{{$employee['first_name']}}</td>
                                        <td>{{$employee['position_id']}}</td>
                                        <td>
                                            <a href="/housekeeping/lostandfound/{{$employee->id}}"><i class="fa-solid fa-pen-to-square text-primary "></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                  <td colspan="7">No Employee Records</td>
                                </tr>
                            @endunless
                        </tbody>
                    </table>
                    <label class="text-success">
                        @if(!empty($message))
                            {{$message}}
                        @endif
                    </label>
                </div>
            </div>
        </div>
    
</div>
@endsection
<!--<div class="container">
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
        </div>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#list').DataTable();

                $('#btnInputModal').click(function(){
                    $('#createLostandFoundModal').modal('show');
                });
            });
        </script>