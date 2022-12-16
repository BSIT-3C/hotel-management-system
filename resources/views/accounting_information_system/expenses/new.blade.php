@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <div class="container rounded px-5 py-5" style="background: #fff;margin-top: 130px; width: 90%">
        <h1>Edit Item</h1>


        <section class="py-5">
            <form action="/accounting/expensesEdit" method="POST">
                @csrf

                <div class="col-6">
                    <div class="mb-3">
                        <label for="" class="">{{ __('Date') }}</label>

                        <div class="">
                            <input type="text" class="form-control" name="date" id="datepicker" />

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>

                        <div class="">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="">Expenses Type</label>
                        <select class="form-select" name="type" aria-label="Default select example">
                            <option value="" selected>-- SELECT --
                            </option>
                            <option value="Maintenance">Maintenance
                            </option>
                            <option value="Room Type">Room Type
                            </option>
                            <option value="Utility costs">Utility Cost
                            </option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="unit_price" class="col-form-label text-md-end">{{ __('Unit Price') }}</label>
                        <div class="">
                            <input id="unit_price" type="number"
                                class="form-control @error('unit_price') is-invalid @enderror" name="unit_price"
                                value="" min="0" required autocomplete="unit_price" autofocus>

                            @error('unit_price')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="mb3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>

        </section>
    </div>

    <script>
        $("#datepicker").datepicker({
            format: 'yyyy-mm',
            icons: {
                time: 'fa fa-time',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-screenshot',
                clear: 'fa fa-trash',
                close: 'fa fa-remove'
            },
            startView: "months",
            minViewMode: "months"
        });
    </script>
@endsection
