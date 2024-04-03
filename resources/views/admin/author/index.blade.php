@extends('layouts.admin')
@section('title','Admin - Author')

@section('content')

    <div class="card border-primary">
            <h5 class="card-title text-success fs-2" align='center'>All Authors</h5>
                <div class="card-body py-5">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($authors as $author)
                                
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>
                                <div class="ratio ratio-1x1" style="width= 20px;">
                                    <img  src="{{ asset('assets/uploads/author/'.$author->img) }}" class="img-fluid" alt="img">
                                </div>
                            </td>
                            <td>{{ $author->name }}</td>
                            <td>{{ $author->description }}</td>
                            
                            <td class="d-flex align-content-center">
                                <button class="btn btn-sm btn-primary me-3">Edit</button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $author->id }}">Delete</button>

                                <div class="modal" id="{{ $author->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body py-5 text-center">
                                                <p>Are you sure?</p>
                                                <a href="{{ url('delete-author/'.$author->id) }}" class="btn btn-sm btn-outline-danger me-3 px-2">Yes</a>
                                                <button class="btn btn-sm btn-outline-light text-dark px-3">No</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
    </div>
@endsection