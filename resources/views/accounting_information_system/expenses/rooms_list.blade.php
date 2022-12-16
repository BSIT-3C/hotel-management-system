@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <div class="container rounded px-5 py-5" style="background: #fff;margin-top: 130px; width: 90%">

        <ul class="mt-3 nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./rooms_list">Rooms List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="./maintenance">Maintenance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./utility_cost">Utility Cost</a>
            </li>
        </ul>

        <section class="mt-5">
            <div class="row mb-5">
                <div class="col-8 ">
                    <h1>Rooms List</h1>
                </div>
                <div class="col d-flex justify-content-end align-items-center "><a href="new"
                        class="btn btn-primary">Add
                        New</a></div>
            </div>
            <table id="table" class="table text-center shadow-sm">
                <thead>
                    <tr>
                        <th scope="col" class="col-2 text-center">Date</th>
                        <th scope="col" class="col-4 text-center">Maintenance</th>
                        <th scope="col" class="col-3 text-center">Unit Price</th>
                        <th scope="col" class="col-3 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @unless(count($list) == 0)
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->date->format('M, Y') }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->unit_price }}</td>
                                <td>
                                    <div class="d-inline-flex gap-3">
                                        <a href="/accounting/expensesEdit/edit/{{ $item->id }}"
                                            class="btn btn-outline-secondary"><i class="bi bi-pen"></i>
                                            Edit</a>
                                        <form action="/accounting/expensesEdit/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger"><i
                                                    class="fa-solid fa-trash"></i>
                                                Delete</button>
                                        </form>
                                    </div>

                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No Records</td>
                        </tr>
                    @endunless


                </tbody>
            </table>
        </section>
    </div>
@endsection
