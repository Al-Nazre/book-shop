@extends('layouts.admin')
@section('title','Admin - Book')

@section('content')

    <section class="section">    
        <div class="card border-primary">
            <div class="card-body">
                <h5 class="card-title text-success fs-2" align='center'>Add New Book</h5>
                <form action="{{ route('book.insert') }}" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-6">
                            @csrf
                            
                            <div class="mb-3 form-outline">
                                <label for="subject_id" class="mb-2 fw-bold">Subject:</label>
                                <select class="form-select" aria-label="Default select example" name='subject_id'>
                                    <option selected>Select Subject</option>

                                    @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                           
                            <div class="mb-3 form-outline">
                                <label for="sub_subject_id" class="mb-2 fw-bold">Sub-Subject:</label>
                                <select class="form-select" aria-label="Default select example" name='sub_subject_id'>
                                    <option selected>Select Sub-Subject</option>

                                    @foreach ($subSubjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                    @endforeach
                                </select>

                            </div>


                            <div class="mb-3 form-outline">
                                <label for="author_id" class="mb-2 fw-bold">Author:</label>
                                <select class="form-select"  name='author_id'>
                                    <option selected>Select Author</option>

                                    @foreach ($authors as $author)
                                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            

                            <div class="mb-3 form-outline">
                                <label for="publication_id" class="mb-2 fw-bold">Publication:</label>
                                <select class="form-select" aria-label="Default select example" name='publication_id'>
                                    <option selected>Open Subject</option>

                                    @foreach ($publications as $publication)
                                    <option value="{{ $publication->id }}">{{ $publication->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            
                            <div class="mb-3 form-outline">
                                <label for="type_id" class="mb-2 fw-bold">Book Type:</label>
                                <select class="form-select" aria-label="Default select example" name='type_id'>
                                    <option selected>Open book Type</option>

                                    @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="mb-3 form-outline">
                                <label for="name" class="mb-2 fw-bold">Name:</label>
                                <input type="text" class="form-control " name ='name' placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="Slug" class="mb-2 fw-bold">Slug:</label>
                                <input type="text" class="form-control" name ='slug' placeholder ='Slug'>
                            </div>
                            <div class="mb-3">
                                <label for="code" class="mb-2 fw-bold">Code:</label>
                                <input type="text" class="form-control" name ='code' placeholder ='Code'>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="mb-2 fw-bold">Image:</label>
                                <input class="form-control" type="file" id="formFile" name="img" placeholder="Image">
                            </div>
                            
                            <div class="mb-3">
                                <label for="short_description" class="mb-2 fw-bold">Short Description:</label>
                                <textarea class="form-control" style="height: 100px" name="short_description" placeholder="Short Description"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="short_description" class="mb-2 fw-bold">Description:</label>
                                <textarea class="form-control" style="height: 100px" name="description" placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="Price" class="mb-2 fw-bold">Price:</label>
                                <input type="number" step="any" class="form-control" name ='price' placeholder ='Price'>
                            </div>
                            <div class="mb-3">
                                <label for="Discount" class="mb-2 fw-bold">Discount:</label>
                                <input type="number" step="any" class="form-control" name ='discount' placeholder ='Discount'>
                            </div>
                            <div class="mb-3">
                                <label for="Quantity" class="mb-2 fw-bold">Quantity:</label>
                                <input type="number" class="form-control" name ='qty' placeholder ='Quantity'>
                            </div>
                            <div class="mb-3">
                                <label for="Meta_Title" class="mb-2 fw-bold">Meta Title:</label>
                                <input type="text" class="form-control" name ='meta_title' placeholder ='Meta Title'>
                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords" class="mb-2 fw-bold">Meta Keywords:</label>
                                <input type="text" class="form-control" name ='meta_keywords' placeholder ='Meta Keywords'>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description" class="mb-2 fw-bold">Meta Description:</label>
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
                                <label for="Edition" class="mb-2 fw-bold">Edition:</label>
                                <input type="text" class="form-control" name ='edition' placeholder ='Edition'>
                            </div>
                            <div class="mb-3">
                                <label for="Publish" class="mb-2 fw-bold">Publish:</label>
                                <input type="text" class="form-control" name ='publish' placeholder ='Publish'>
                            </div>
                            <div class="mb-3">
                                <label for="Country" class="mb-2 fw-bold">Country:</label>
                                <input type="text" class="form-control" name ='country' placeholder ='Country'>
                            </div>
                            <div class="mb-3">
                                <label for="Language" class="mb-2 fw-bold">Language:</label>
                                <input type="text" class="form-control" name ='language' placeholder ='Language'>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 btn-submit">Submit Form</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection