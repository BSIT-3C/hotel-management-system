@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    
        <div class="row">
            <div class="card"><br>
                <div class="card-header" style="background-color:#1840C4; color:#FFFFFF; border-radius: 5px;">
                    Lost and Found Items List
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="createLostandFoundModal" id="btnInputModal">Add Items</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="list">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Item Quantity</th>
                                <th>Room No. Found at</th>
                                <th>Item Status</th>
                                <th>Date and Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item['id']}}</td>
                                        <td>{{$item['item_name']}}</td>
                                        <td>{{$item['item_quantity']}}</td>
                                        <td>{{$item['room_no_found_at']}}</td>
                                        <td>{{$item['item_status']}}</td>
                                        <td>{{$item['date_and_time']}}</td>
                                        <td>
                                            <div class="row d-flex">
                                                
                                                <div class="col d-flex justify-content-center align-items-center">
                                                    <form action="/housekeeping/lostandfound/delete/{{$item->id}}" method="post" class="d-flex m-auto">

                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn"><i class="fa-solid fa-trash text-danger "></i></button>
                                                    </form>
                                                <a href="/housekeeping/lostandfound/{{$item->id}}" class="col d-flex justify-content-center my-2"><i class="fa-solid fa-pen-to-square text-primary "></i></a>
                                            
                                                </div>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
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
<!--Modal for adding Lost and Found Items-->
<div id="createLostandFoundModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content" style="max-width: 100%; margin:auto; border-radius: 15px;">
            <div class="modal-header" style="background-color:cornflowerblue;">
                <h4>Add New Items</h4>
            </div>
            <div class="modal-body" style="max-width: 100%; margin:auto;">
                <h1 style="text-align:center;">Lost and Found Items</h1>
                <br>
                <div class="row">
                    <form method="post" action="/housekeeping/lostandfound">
                        @csrf <!--Security Measure-->
                        <div class="form-floating mb-2" style="width: 400px; margin:auto;">
                            <input type="number" min="1" max="50" class="form-control" id="floatingInput" name="room_number" placeholder="room_number" style="background-color: #DFDFDF;" required />
                            <label for="floatingInput">Room Number</label>
                        </div>
                        <div class="form-floating mb-2" style="width: 400px; margin:auto;">
                            <input type="text" class="form-control" id="floatingInput" name="item_name" placeholder="item_name" style="background-color: #DFDFDF;" required />
                            <label for="floatingInput">Item Name</label>
                        </div>
                        <div class="form-floating mb-2" style="width: 400px; margin:auto;">
                            <input type="number" min="1"class="form-control" id="floatingInput" name="item_quantity" placeholder="item_quantity" style="background-color: #DFDFDF;" required />
                            <label for="floatingInput">Item Quantity</label>
                        </div>
                        <div class="form-floating mb-2" style="width: 400px; margin:auto;">
                            <input type="text" class="form-control" id="floatingInput" name="item_status" placeholder="item_status" style="background-color: #DFDFDF;" required />
                            <label for="floatingInput">Item Status</label>
                        </div>
                        <div class="form-floating mb-2" style="width: 400px; margin:auto;">
                            <input type="date" class="form-control" id="floatingInput" name="date_and_time" placeholder="date" style="background-color: #DFDFDF;" required />
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