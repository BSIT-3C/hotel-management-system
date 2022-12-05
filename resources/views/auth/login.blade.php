@extends('layouts.app')

@section('content')
<div class="row" style="margin-top: 3rem">
    <div class="col-12" style="">
        <div class="row" style="margin: 5% 20% 20% 20%;">
            <div class="col-6 container-fluid container-lg rounded-start shadow" style="background-color: #1840C4 ;">
                <div class="text-center" style="margin-top: 15%;">
                    <img class="img-fluid" src="{{asset('images/header_logo.jpg')}}" alt="" style="height: 70px; width: auto;">
                </div>
                <div class="my-5 border-bottom">
                    <h3 class="text-center fw-lighter text-white">WELCOME TO TRANQUIL</h3>
                    <h4 class="text-center fw-bolder text-white">LOG IN TO YOUR ACCOUNT</h4>
                </div>
                <p class="text-white text-center fw-light">BSIT 3C's Best Hotel</p>
            </div>
            <div class="col-6 container-fluid container-lg rounded-end shadow" style="background-color: white;">
                <form method="POST" action="/login/auth" class="mx-5 my-5">
                    @csrf
                    <h3 class="text-center mb-5 fw-bolder">Log in</h3>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      <label class="form-label" for="email">Email address</label>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-1">
                      <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      <label class="form-label" for="password">Password</label>

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col-12 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="remember" name="remember" checked {{ old('remember') ? 'checked' : '' }}>
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>

                    
                    <div class="col-12 text-center">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                      </div>
                    </div>

                    @error('auth')
                      <p class="text-danger font-italic text-center">{{ $message }}</p>
                    @enderror
                   
                    <!-- Submit button -->
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary rounded-pill text-white fw-bold" style="background-color: #1840C4;" type="submit">Log in</button>
                    </div>
          
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>
 </div>

@endsection