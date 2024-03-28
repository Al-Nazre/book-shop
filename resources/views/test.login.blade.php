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
                                    <!-- Login Form s-->
                                    <h4 class="mb-4 text-center">Login</h4>
                                    <form>
                                        <div class="mb-3"> <label class="form-label">Email</label> <input name="lorem" class="form-control" placeholder="ex. name@gmail.com" type="email"> </div>
                                        <!-- col end.// --> 
                                        <div class="mb-3"> <label class="form-label">Password</label> <a class="float-end" href="#">Forgot?</a> <input class="form-control" placeholder="******" type="password"> </div>
                                        <!-- col end.// --> 
                                        <div class="mb-3"> <label class="form-check"> <input class="form-check-input" type="checkbox" value="" checked=""> <span class="form-check-label"> Remember </span> </label> </div>
                                        <button class="btn w-100 btn-primary" type="button"> Login </button> 
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
