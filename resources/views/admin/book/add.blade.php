@extends('layouts.admin')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-success fs-2" align='center'>Add New Book</h5>

                        <form action="{{ route('book.insert') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                               
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='subject_id'>
                                    <option selected>Select Subject</option>

                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            <div class="row mb-3">
                               
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='sub_subject_id'>
                                    <option selected>Select Sub-Subject</option>

                                    @foreach ($subSubjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='author_id'>
                                    <option selected>Select Author</option>

                                    @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Publication</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='publication_id'>
                                    <option selected>Open Subject</option>

                                    @foreach ($publications as $publication)
                                    <option value="{{ $publication->id }}">{{ $publication->name }}</option>
                                    @endforeach
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Book Type</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name='type_id'>
                                    <option selected>Open book Type</option>

                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
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
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='code' placeholder ='Code'>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" id="formFile" name="img" placeholder="Image">
                            </div>
                            
                            <div class="mb-3">
                                <textarea class="form-control" style="height: 100px" name="short_description" placeholder="Short Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" style="height: 100px" name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="any" class="form-control" name ='price' placeholder ='Price'>
                            </div>
                            <div class="mb-3">
                                <input type="number" step="any" class="form-control" name ='discount' placeholder ='Discount'>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" name ='qty' placeholder ='Quantity'>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='meta_title' placeholder ='Meta Title'>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='meta_keywords' placeholder ='Meta Keywords'>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" style="height: 80px" name="meta_description" placeholder="Meta Description"></textarea>
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
                            
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='edition' placeholder ='Edition'>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='publish' placeholder ='Publish'>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='country' placeholder ='Country'>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name ='language' placeholder ='Language'>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-submit">Submit Form</button>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </section>

@endsection