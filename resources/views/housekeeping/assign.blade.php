@extends('layouts.app')

@section('content')
    <a href="/home" class="inline-block text-black ml-4 mb-4">
        <button class="btn btn-light mb-2"><i class="fa-solid fa-arrow-left"></i></i> Back</button>
    </a>
    <div class="container">
        <h1>Employees List</h1>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Employee ID</td>
                <td>Employee Name</td>
                <td>Employee Position</td>
                <td>Employee Status</td>
            </tr>
            <tr>
            @foreach ($employee as $d)
                <td>{{$d->id}}</td>
                <td>{{$d->employee_id}}</td>
                <td>{{$d->employee_name}}</td>
                <td>{{$d->employee_position}}</td>
                <td>{{$d->employee_status}}</td>
            @endforeach
            </tr>
        </table>
    </div>
    <div class="footer">
    <p class="footer-text-left">
        <a href="/home" class="menu text-black"><i class="fa-solid fa-house-user"></i></a>
        <a href="https://css.sammy-codes.com/about.html" class="menu text-black"><i class="fa-solid fa-address-card"></i></a> 
        <a href="https://css.sammy-codes.com/credits.html" class="menu text-black"><i class="fa-solid fa-phone"></i></a>
    </p>
    <div class="footer-content-right">
        <a href="https://github.com/digitalocean"><img src="images/Github.png" class="icon-style" alt="Github icon"></a>
        <a href="https://www.twitter.com/DigitalOcean"><img src="images/Twitter.png" class="icon-style" alt="Twitter icon"></a>
        <a href="https://www.twitter.com"><img src="images/Email.png" class="icon-style" alt="Emailicon"></a>
    </div>
</div>
@endsection