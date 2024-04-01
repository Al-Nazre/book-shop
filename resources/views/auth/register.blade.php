@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h4 class="login-title text-center mb-3">Register</h4>
                    <div class="row gx-3">
                       <div class="col mb-4"> <label class="form-label">Name</label> 
                        <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> </div>
                       <!-- col end.// --> 
                       <div class="col mb-4"> <label class="form-label">Email</label> 
                        <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email"> </div>
                       <!-- col end.// --> 
                    </div>
                    <!-- row end.// --> 
                    <div class="row">
                       <div class="col mb-3"> <label class="form-label">Password</label> 
                        <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" required autocomplete="password"> 
                    </div>
                       <!-- col end.// --> 
                       <div class="col mb-3"> <label class="form-label">Confirm password</label> 
                        <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password"> </div>
                       <!-- col end.// --> 
                    </div>
                    <!-- row end.// --> 
                    <div class="row d-flex mt-3 mb-4 align-items-center">
                       <div class="col-auto mx-auto"> <button class="btn btn-primary" type="submit">Register now</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
