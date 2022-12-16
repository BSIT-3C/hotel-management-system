@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <div class="container rounded px-5 py-5" style="background: #fff;margin-top: 130px; width: 90%">
        <h1>Edit Item</h1>


        <section class="py-5">
            @if ($list)
                <form action="/accounting/expensesEdit/{{ $list->id }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="date" class="col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="">
                                <input id="date" type="text"
                                    class="form-control @error('date') is-invalid @enderror" name="date"
                                    value="{{ $list->date->format('F, Y') }}" readonly disabled>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ $list->name }}" required autocomplete="name" autofocus>

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
                                <option value="" @if (!$list->type) selected @endif>-- SELECT --
                                </option>
                                <option value="Maintenance" @if ($list->type == 'Maintenance') selected @endif>Maintenance
                                </option>
                                <option value="Room Type" @if ($list->type == 'Room Type') selected @endif>Room Type
                                </option>
                                <option value="Utility costs" @if ($list->type == 'Utility costs') selected @endif>Utility Cost
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="unit_price" class="col-form-label text-md-end">{{ __('Unit Price') }}</label>
                            <div class="">
                                <input id="unit_price" type="number"
                                    class="form-control @error('unit_price') is-invalid @enderror" name="unit_price"
                                    value="{{ $list->unit_price }}" min="0" required autocomplete="unit_price"
                                    autofocus>

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
            @else
                <p>Something went wrong.</p>
            @endif

        </section>
    </div>
@endsection
