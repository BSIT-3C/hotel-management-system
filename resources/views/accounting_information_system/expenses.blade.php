@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <div class="container rounded px-5 py-5" style="background: #fff;margin-top: 130px; width: 90%">


        <section class="mt-5">
            <div class="row mb-5">
                <div class="col-8 ">
                    <h1>Expenses</h1>
                </div>
                <div class="col gap-3 d-flex justify-content-end align-items-center ">
                    <a href="/accounting/expensesEdit/" class="btn btn-primary">See All</a>
                    <a href="/accounting/expensesEdit/new" class="btn btn-primary">Add
                        New</a>
                </div>
            </div>
            <table id="table" class="table text-center shadow-sm">
                <thead>
                    <tr>
                        <th scope="col" class="col-2 text-center">Year</th>
                        <th scope="col" class="col-2 text-center">Month</th>
                        <th scope="col" class="col-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($list != null)
                        @foreach ($list as $index => $value)
                            <tr>
                                <td>{{ $value['year'] }}</td>
                                @php
                                    $dateObj = DateTime::createFromFormat('!m', $value['month']);
                                    $monthName = $dateObj->format('F'); // March
                                @endphp
                                <td>{{ $monthName }}</td>
                                <td>
                                    <div class="d-inline-flex gap-3">
                                        <a href="/accounting/expenses/{{ $value['year'] . '-' . $value['month'] }}"
                                            class="btn btn-outline-secondary"><i class="bi bi-eye"></i>
                                            View</a>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    @endif


                </tbody>
            </table>
        </section>
    </div>
@endsection
