@extends('layouts.app')

@section('content')
    <div class="container rounded px-5 pt-5" style="background: #fff;margin-top: 130px; width: 90%">
        <h1>Expenses</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./expenses/rooms_list">Rooms List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/asd">Maintenance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./expenses/utility_cost">Utility Cost</a>
            </li>
        </ul>
    </div>
@endsection
