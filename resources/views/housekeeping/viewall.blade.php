@extends('layouts.app')

@section('content')
<div class= "container" style="width: 90%; margin-top: 130px;">
    <a href="/housekeeping/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    <div class="card border-primary mb-3" style="max-width: 100%; height: 540px; margin-left: 10px; border-radius: 15px;">
        <div class="container">
            <h1>Rooms List</h1>
            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Employee ID</td>
                    <td>Employee Name</td>
                    <td>Employee Position</td>
                    <td>Employee Status</td>
                </tr>
            </table>
    </div>
</div>
@endsection