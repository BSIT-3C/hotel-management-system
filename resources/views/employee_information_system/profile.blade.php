@extends('layouts.app')

@section('content')
    <div class="container shadow-sm mb-5 bg-body rounded" style="width: 90%">
        <div class="col-11 mx-auto p-3 mb-5 rounded" style="margin-top: 7rem">
            <div class="row">
                <div class="col-6 mt-3" style="color: #1840C4">
                    <h5 class="fw-light">EMPLOYEE PROFILE</h5>
                </div>
                <div class="col-6 mt-3 text-end" style="color: #1840C4">
                    <img class=" img-fluid" src="{{ asset('images/logo2.png') }}" alt="logo"
                        style="height: 30px; width: auto;">
                </div>
            </div>
            <div class="row ms-4 py-3 mt-3">

                <!--LEFT CARD-->
                <div class="shadow-sm rounded col-5" style="background-color: #d1d9f3;">


                    <div class="mt-3 ms-3" style="color: ;">
                        <a href="/employee_information_system/edit/{{ Auth::user()->id }}"><i
                                class="fa-solid fa-pen-to-square fa-xl" style="color: #1840C4;"></i></a>
                    </div>

                    <div class="text-center mt-3 mb-3">
                        <img class="rounded-5 shadow-sm"
                            src="{{ $list->photo ? asset('storage/' . $list->photo) : asset('images/logo.png') }}"
                            alt="" style="object-fit: cover; height: 297px; width: 250px;">
                    </div>

                    <div class="text-center" style="color: #1840C4;">
                        <h3>{{ $list->first_name }} {{ $list->last_name }}</h3>
                        <h5 class="fw-light">ROLE:
                            @foreach ($list->roles as $role_index => $key)
                                <span>{{ $key->role->role }}
                                    @if (count($list->roles) > 1 && !($role_index == count($list->roles) - 1))
                                        <span>,</span>
                                    @endif
                                </span>
                            @endforeach
                        </h5>
                        <h5 class="fw-light">ID:<span class="fw-bold">{{ $list->id }}</span></h5>
                    </div>

                    <p class="text-center fw-light" style="color:#1840C4; margin-top: 25%;">JOINED {{ $list->created_at }}
                    </p>
                </div>
                <!--LEFT CARD-->


                <div class="col-7">
                    <!--RIGHT CARD-->
                    <div class="row mt-5 ms-3">
                        <h2 class="fw-bold"> {{ $list->first_name }} {{ $list->last_name }} </h2>

                        <div col-12 style="color: #1840C4;">
                            <i class="fa-solid fa-envelope fa-lg" style=""></i><span class="ms-2 fs-5">
                                {{ $list->email }}</span>
                            <i class="fa-solid fa-house fa-lg ms-4" style=""></i><span class="ms-2 fs-5">
                                {{ $list->address }}</span>
                        </div>
                    </div>

                    <div class="row ms-3 mt-5">
                        <div class="col-4">
                            <h5 class="fw-light" style="color: #4a66c1;">Job Information</h5>
                            <h5> {{ $list->department }}</h5>
                            <h5> {{ $list->position }}</h5>
                        </div>
                        <div class="col-8">
                            <h5 class="fw-light" style="color: #4a66c1;">Basic Information</h5>
                            <h5>{{ $list->contact_number }}</h5>
                            <h5>{{ $list->birthday }}</h5>
                        </div>
                    </div>

                    <div class="row ms-3" style="margin-top: 100px;">
                        <h3 class="fw-bold">Work hours</h3>

                        <h1 class="text-center fw-light" style="color: #1840C4;">{{ $list->work_start }} -
                            {{ $list->work_end }}</h1>

                        <div class="d-grid gap-2 my-5">
                            <a class="shadow-sm btn rounded-pill text-white fw-bold mx-5"
                                href="/employee_information_system/profile/dtr/{{ Auth::user()->id }}"
                                style="background-color:#1840C4;">DTR</a>
                        </div>

                    </div>
                </div>
                <!--RIGHT CARD-->

            </div>
        </div>
    @endsection
