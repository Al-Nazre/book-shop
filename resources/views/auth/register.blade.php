@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                    <form method="POST" action="{{ route('register') }}">
                                @csrf
                            <div class="login-form">
                                <h4 class="login-title">Register</h4>
                                <div class="row d-flex">
                                    <div class="col-md-6 col-12 mb-20">
                                        <label>Name</label>
                                        <input class="mb-0 @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 mb-20">
                                        <label>Email Address*</label>
                                        <input class="mb-0 @error('email') is-invalid @enderror" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label>Password</label>
                                        <input class="mb-0  @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="password">
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <label>Confirm Password</label>
                                        <input class="mb-0" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="register-button mt-0">Register</button>
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
@endsection
