@extends('layouts.admin')

@section('content')
<div class="pagetitle">
      <h1>Add Book Type</h1>
      {{-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav> --}}
</div> 
<section class="section">
      <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title" align='center'>Add New Book Type</h5>

                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name ='name'>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name ='slug'>
                        </div>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='status' checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='popular'>
                      <label class="form-check-label" for="flexSwitchCheckChecked">Trending</label>
                    </div>

                </div>
            </div>
        </div>
      </div>
 </section>

@endsection