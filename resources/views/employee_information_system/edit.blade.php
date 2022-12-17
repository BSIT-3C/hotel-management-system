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
                    <div class="card-header pt-3"><h4 class="fw-bold" style="color: #1840C4;">Update Profile <i class="fa-solid fa-pen-to-square"></i></h4></div>
                    
                    <div class="card-body">
                        <form method="POST" action="/employee_information_system/{{$list->id}}">
                            @csrf
                            @method('PATCH')
                        
                        <h6 class="text-center mb-1" style="color: #1840C4">Basic Information</h6>
                        <div class="row"> <!-- WORK START/END ROW -->
                            <div class="col-6">
                                <label for="work_start" class="col-form-label text-md-end">{{ __('Work Start') }}</label>

                                <div class="">
                                    <input id="work_start" type="time" class="form-control" @error('work_start') is-invalid @enderror name="work_start" value="{{$list->work_start}}" required autocomplete="work_start" autofocus>

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
                                    <input id="work_end" type="time" class="form-control" @error('work_end') is-invalid @enderror name="work_end" value="{{$list->work_end}}" required autocomplete="work_end" autofocus>

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

                                <div>
                                    <input id="first_name" type="text" class="form-control" @error('first_name') is-invalid @enderror name="first_name" value="{{$list->first_name}}" required autocomplete="first_name" autofocus>

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
                                    <input id="last_name" type="text" class="form-control" @error('last_name') is-invalid @enderror name="last_name" value="{{$list->last_name}}" required autocomplete="last_name" autofocus>

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
                                    <input id="address" type="text" class="form-control" @error('address') is-invalid @enderror name="address" value="{{$list->address}}" required autocomplete="address" autofocus>

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
                                <input type="radio" name="gender" id="male" value="male" @if( $list->gender =="male") checked @endif class="form-check-input">
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female" @if( $list->gender =="female") checked @endif  class="form-check-input ms-3">
                                <label for="female">Female</label>

                                <input type="radio" name="gender" id="not_specified" value="not_specified" @if( $list->gender =="not_specified") checked @endif class="form-check-input">
                                <label for="male">Prefer not to specify</label>
                                
                                
                                </div>
                            </div>
                        </div> <!-- ADDRESS AND GENDER-->
                        <div class="row mb-3"><!-- BIRTHDAY ROW -->
                            <div class="col-6">
                                <label for="birthday" class="col-form-label text-md-end">{{ __('Birthday') }}</label>

                                <div class="">
                                    <input id="birthday" type="date" class="form-control" @error('birthday') is-invalid @enderror name="birthday" value="{{$list->birthday}}" required autocomplete="address" autofocus>

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
                                    <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror name="email" value="{{$list->email}}" required autocomplete="email">

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
                                    <input id="contact_number" type="number" class="form-control" @error('contact_number') is-invalid @enderror name="contact_number" value="{{$list->contact_number}}" required autocomplete="contact_number" autofocus>

                                    @error('contact_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror   
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                        {{-- <div class="col-6 ">
                            <label  for="department" class="col-form-label text-md-end">{{ __('Department') }}</label>
                                    <select id="department" class="form-select">
                                    @foreach ($Departments as $department )
                                        <option value="{{$department->id}}">{{$department->department}}</option>
                                    @endforeach
                                </select>
                        </div> --}}
                        

                        <div class="col-6">
                            <label for="position" class="col-form-label text-md-end">{{ __('Position') }}</label>
                                <select id="position" name="position" class="form-select form-control">
                                    <option @if(count($Positions)==0) @else  @endif value="">-- Position --</option>
                                @foreach ($Positions as $position)
                                    <option @if($position->id==$list->position_id) selected @endif value="{{$position->id}}">{{$position->position}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6 ">
                            <label for="department" class="col-form-label text-md-end">{{ __('Department') }}</label>
                                <select id="department" name="department" class="form-select">
                                    <option value="" disabled selected hidden>-- Department --</option>
                                @foreach ($Departments as $department)
                                    <option value="{{$department->id}}">{{$department->department}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-6">
                            <label class="col-form-label text-md-end" for="Role">{{ __('Role') }}</label>
                            <div class="col-form-label ">
                            <input type="radio" name="role" value="" class="invisible" checked="checked">
                            @foreach($Roles as $role)
                                @if(!$is_admin && $role->role === "Admin")
                                    @continue
                                @endif
                    
                                <input type="checkbox" name="role" id="{{$role->role}}" @if(in_array($role->id, $user_roles)) checked @endif value="{{$role->id}}" class="form-check-input">
                                <label for="{{$role->role}}">{{$role->role}}</label>
                            @endforeach
                            </div>

                        </div>
                    </div>
                   

                        <!--EMAIL AND CONTACT NUMBER ROW-->

                        {{--
                        <div class="row"><!--PHOTO and POSITION-->
                            <div class="col-6">
                                <label for="photo" class="col-form-label text-md-end">{{ __('Photo') }}</label>

                                <div class="">
                                    <input id="photo" type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') ?? Auth::user()->photo }}" required autocomplete="photo" autofocus>

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
                                        <option value="Role1">Position1</option>
                                        <option value="Role2">Position2</option>
                                        <option value="Role3">Position3</option>
                                        <option value="Role4">Position4</option>
                                    </select>
                                </div>
                            </div>
                        </div><!--PHOTO and POSITION-->

                        <div class="row"><!-- DEPARTMENT AND ROLE -->
                            <div class="col-6">
                                <label  for="department" class="col-form-label text-md-end">{{ __('Department') }}</label>
                                <div class="col-form-label text-md-end">
                                    <select name="department" type="text" id="position" class="form-select">
                                        <option value="" selected disabled>Choose your position...</option>
                                        <option value="Department1">Department1</option>
                                        <option value="Department2">Department2</option>
                                        <option value="Department3">Department3</option>
                                        <option value="Department4">Department4</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-6">
                                <label class="col-form-label text-md-end" for="Role">{{ __('Role') }}</label>
                                <div class="col-form-label ">
                                <input type="radio" name="role" value="" class="invisible" checked="checked">
                                <input type="radio" name="role" id="role" value=Admin class="form-check-input">
                                <label for="male">1 - Admin</label>
                                <input type="radio" name="role" id="role" value=Manager class="form-check-input ms-3">
                                <label for="female">2 - Manager</label>
                                <input type="radio" name="role" id="role" value=others class="form-check-input ms-3">
                                <label for="female">3 - Others</label>
                                </div>
                            </div>
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
                        --}} 
                            <div class="row mb-3 mt-4">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary" style="background-color: #1840C4">
                                        {{ __('Update') }}
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