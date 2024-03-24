@extends('layouts.admin')

@section('content')
  <div class="pagetitle">
        <h1>Add Subject</h1>
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
            <div class="col-lg-6">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-success fs-2" align='center'>Add New Subject</h5>

                        <form action="{{ route('subject.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 form-outline">
                                <input type="text" class="form-control " name ='name' placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='slug' placeholder ='Slug'>
                            </div>
                            
                            <div class="d-flex mb-3">  
                                <div class="form-check form-switch me-3">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='status' checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                </div>
                            </div>
                            <div class="d-flex mb-3">  
                            
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='popular'>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Trending</label>
                                </div>
                            </div>
                            <div class="d-flex mb-3">  
        
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='home'>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Add to Home</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </section>

@endsection