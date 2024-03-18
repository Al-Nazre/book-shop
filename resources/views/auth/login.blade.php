@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                    <div class="page-section mb-60">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                                    <!-- Login Form s-->
                                    <form method="POST" action="{{ route('login') }}">
                                       @csrf
                                        <div class="login-form">
                                            <h4 class="login-title">Login</h4>
                                            <div class="row">
                                                <div class="col-md-12 col-12 mb-20">
                                                    <label>Email Address*</label>
                                                    <input class="mb-0 @error('email') is-invalid @enderror" type="email" placeholder="Email Address"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-12 mb-20">
                                                    <label>Password</label>
                                                    <input class="mb-0 @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password">
                                                
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                        <input type="checkbox" id="remember_me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                        <label for="remember_me">Remember me</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-10 mb-20 text-left text-md-right">    
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">Forgotten pasward?</a>
                                                @endif
                                                                                
                                                </div>
                                                <div class="col-md-12 d-flex justify-content-center">
                                                    <button type="submit" class="register-button mt-0 w-100">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
