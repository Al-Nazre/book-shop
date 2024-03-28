@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5">
                <form>
                    <h4 class="login-title text-center mb-3">Register</h4>
                    <div class="row gx-3">
                       <div class="col mb-4"> <label class="form-label">First name</label> <input type="text" class="form-control" placeholder=""> </div>
                       <!-- col end.// --> 
                       <div class="col mb-4"> <label class="form-label">Last name</label> <input type="text" class="form-control" placeholder=""> </div>
                       <!-- col end.// --> 
                    </div>
                    <!-- row end.// --> 
                    <div class="row">
                       <div class="col mb-3"> <label class="form-label">Create password</label> <input class="form-control" type="password"> </div>
                       <!-- col end.// --> 
                       <div class="col mb-3"> <label class="form-label">Repeat password</label> <input class="form-control" type="password"> </div>
                       <!-- col end.// --> 
                    </div>
                    <!-- row end.// --> 
                    <div class="row d-flex mt-3 mb-4 align-items-center">
                       <div class="col-auto mx-auto"> <button class="btn btn-primary" type="button">Register now</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
