@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    
                    <div class="page-section my-5">
                        <div class="container">
                            <div class="row d-flex">
                                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6  mx-auto">
                                    <h4 class="mb-4 text-center">Login</h4>
                                    <!-- Login Form s-->
                                    <form method="POST" action="{{ route('login') }}">
                                       @csrf
                
                                        <div class="mb-3"> 
                                            <label class="form-label">Email</label> 
                                            <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email Address"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <!-- col end.// --> 
                                        <div class="mb-3"> 
                                            <label class="form-label">Password</label> 
                                            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="current-password"> 
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <!-- col end.// --> 
                                        <div class="row">
                                            <div class="mb-3"> 
                                                <label class="form-check"> 
                                                    <input class="form-check-input" type="checkbox" id="remember_me" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                                    <span class="form-check-label">Remember me</span> 
                                                </label> 
                                            </div>
                                            <div class="text-md-right">
                                                @if (Route::has('password.request'))
                                                <a class="float-end" href="{{ route('password.request') }}">Forgot?</a> 
                                                @endif
                                                </div>
                                        </div>
                                        <button class="btn w-100 btn-primary" type="submit"> Login </button> 
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
