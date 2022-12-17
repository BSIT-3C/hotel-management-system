@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    
    <div class="row">
        <div class="card"><br>
            <div class="card-header" style="background-color:#1840C4; color:#FFFFFF; border-radius: 5px;">
                Housekeeper Employee List
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
                                    <td>{{$employee->position->position}}</td>
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
</div><br>
@endsection
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#list').DataTable();

                $('#btnInputModal').click(function(){
                    $('#createLostandFoundModal').modal('show');
                });
            });
        </script>