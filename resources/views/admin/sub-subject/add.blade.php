@extends('layouts.admin')
@section('title','Admin - Sub-subject')

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
                        <h5 class="card-title text-success fs-2" align='center'>Add New Sub-Subject</h5>

                        <form action="{{ route('sub-subject.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Select</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='subject_id'>
                                    <option selected>Open Subject</option>

                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
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
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='popular'>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Trending</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </section>
                {{-- <div class="row">
                    <div class="col-md-6">
                        <label for="supplier">Supplier</label>
                        <div class="form-group {{ $errors->has('vendorId') ? ' has-danger' : '' }}">
                            <select class="form-control chosen-select" name="vendorId" required="">
                                <option value=" ">Select Supplier</option>
                                @foreach ($subjects as $vendor)
                                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('vendorId'))
                                @foreach ($errors->get('vendorId') as $error)
                                    <div class="form-control-feedback">{{ $error }}</div>
                                @endforeach
                            @endif
                        </div>
                    </div>                   
                </div> --}}

@endsection