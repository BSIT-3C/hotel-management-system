@extends('layouts.app')

@section('content')
<div class="container mb-5" style="margin-top: 8rem;">
<style>
    .card-body{
        background: rgb(21,56,175);
        background: linear-gradient(180deg, rgba(21,56,175,0) 93%, rgba(21,56,175,0.10437678489364499) 100%);

        box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;   
    }
    input{
        box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px;
    }

</style>
    <div class="row justify-content-center">
        <div class="col-md-7 ">
            <div class="card" style="width: 50em">
                <div class="card-header pt-3"><h4 class="fw-bold" style="color: #1840C4;">Create Account <i class="fa-solid fa-user"></i></h4></div>
                
                <div class="card-body">
                    <form method="POST" action="/registration" enctype="multipart/form-data">
                        @csrf
                    
                    <h6 class="text-center mb-1" style="color: #1840C4">Basic Information</h6>
                    <div class="row"> <!-- WORK START/END ROW -->
                        <div class="col-6">
                            <label for="work_start" class="col-form-label text-md-end">{{ __('Work Start') }}</label>

                            <div class="">
                                <input id="work_start" type="time" class="form-control @error('work_start') is-invalid @enderror" name="work_start" value="{{ old('work_start') }}" required autocomplete="work_start" autofocus>

                                @error('work_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="work_end" class="col-form-label text-md-end">{{ __('Work End') }}</label>

                            <div class="">
                                <input id="work_end" type="time" class="form-control @error('work_end') is-invalid @enderror" name="work_end" value="{{ old('work_end') }}" required autocomplete="work_end" autofocus>

                                @error('work_end')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                    </div> <!-- WORK START/END ROW -->

                    <div class="row"> <!-- FIRST and LAST NAMES ROW -->
                        <div class="col-6">
                            <label for="first_name" class="col-form-label text-md-end">{{ __('First name') }}</label>

                            <div class="">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="last_name" class="col-form-label text-md-end">{{ __('Last name') }}</label>

                            <div class="">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                    </div> <!-- FIRST and LAST NAMES ROW -->
                    

                    <div class="row"> <!-- ADDRESS AND GENDER-->
                        <div class="col-6">
                            <label for="address" class="col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>

                        
                        <div class="col-6">
                            <label class="col-form-label" for="gender">{{ __('Gender') }}</label>
                            <div class="col-form-label">
                            <input type="radio" name="gender" value="" class="invisible" checked="checked">
                            <input type="radio" name="gender" id="male" value="Male" class="form-check-input">
                            <label for="male">Male</label>
                            <input type="radio" name="gender" id="female" value="Female" class="form-check-input ms-3">
                            <label for="female">Female</label>
                            <input type="radio" name="gender" id="female" value="Cannot Specify" class="form-check-input ms-3">
                            <label for="female">Cannot Specify</label>
                            </div>
                        </div>
                    </div> <!-- ADDRESS AND GENDER-->
                    <div class="row mb-3"><!-- BIRTHDAY ROW -->
                        <div class="col-6">
                            <label for="birthday" class="col-form-label text-md-end">{{ __('Birthday') }}</label>

                            <div class="">
                                <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="address" autofocus>

                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>

                    </div><!-- BIRTHDAY ROW -->

                    <hr>
                    <h6 class="text-center mb-4" style="color: #1840C4">Contact and Work Information</h6>
                    <div class="row"><!--EMAIL AND CONTACT NUMBER ROW-->
                        <div class="col-6">
                            <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="contact_number" class="col-form-label text-md-end">{{ __('Contact Number') }}</label>

                            <div class="">
                                <input id="contact_number" type="number" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" value="{{ old('contact_number') }}" required autocomplete="contact_number" autofocus>

                                @error('contact_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>
                    </div> <!--EMAIL AND CONTACT NUMBER ROW-->


                    <div class="row"><!--PHOTO and POSITION-->
                        <div class="col-6">
                            <label for="photo" class="col-form-label text-md-end">{{ __('Photo') }}</label>

                            <div class="">
                                <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>

                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>
                        </div>


                        <div class="col-6">
                            <label  for="position" class="col-form-label text-md-end">{{ __('Position') }}</label>
                            <div class="">
                                <select name="position" type="text" id="position" class="form-select">
                                    <option value="" selected disabled>Choose your position...</option>
                                    <option value="Front Office Manager">Front Office Manager</option>
                                    <option value="Front Office Assistant">Front Office Assistant</option>
                                    <option value="Receptionist">Receptionist</option>
                                    <option value="Senior Receptionist">Senior Receptionist</option>
                                    <option value="Concierge Manager">Concierge Manager</option>
                                    <option value="Concierge Staff">Concierge Staff</option>
                                    <option value="House Keeping Manager">House Keeping Manager</option>
                                    <option value="House Keeping Staff">House Keeping Staff</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Accounting Supervisor">Accounting Supervisor</option>
                                    <option value="Auditor">Auditor</option>
                                    <option value="Senior Cashier">Senior Cashier</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="HR Manager">HR Manager</option>
                                    <option value="Senior HR Manager">Senior HR Manager</option>
                                    <option value="HR Assistant">HR Assistant</option>
                                    <option value="Reservation Accountant">Reservation Accountant</option>
                                    <option value="Senior Reservation Accountant">Senior Reservation Accountant</option>
                                    <option value="Reservation Auditor">Reservation Auditor</option>
                                    <option value="Information Security Supervisor">Information Security Supervisor</option>
                                    <option value="IT Staff">IT Staff</option>
                                </select>

                                @error('position')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div> 
                    </div><!--PHOTO and POSITION-->

                    <div class="row"><!-- DEPARTMENT AND ROLE -->
                          <div class="col-6">
                            <label  for="department" class="col-form-label text-md-end">{{ __('Department') }}</label>
                            <div class="col-form-label text-md-end">
                                <select name="department" type="text" id="position" class="form-select">
                                    <option value="" selected disabled>Choose your department...</option>
                                    <option value="Reception">Reception</option>
                                    <option value="Housekeeping">Housekeeping</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Human Resource">Human Resource</option>
                                    <option value="Back Office">Back Office</option>
                                </select>

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>


                          <div class="col-6">
                            <label class="col-form-label text-md-end" for="Role">{{ __('Role') }}</label>
                            <div class="col-form-label ">
                            <input type="radio" name="role" value="" class="invisible" checked="checked">
                            <input type="radio" name="role" id="role" value=Admin class="form-check-input">
                            <label for="male">Admin</label>
                            <input type="radio" name="role" id="role" value=Manager class="form-check-input ms-3">
                            <label for="female">Manager</label>
                            <input type="radio" name="role" id="role" value="Employee" class="form-check-input ms-3">
                            <label for="female">Employee</label>
                            </div>
                        </div>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="row"><!-- PASSWORD AND PASSWROD CONFIRMATION -->
                        <div class="col-6">
                            <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="password-confirm" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </div><!-- PASSWORD AND PASSWROD CONFIRMATION -->    

                        <div class="row mb-3 mt-4">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary" style="background-color: #1840C4">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
