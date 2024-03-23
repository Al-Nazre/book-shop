@extends('layouts.admin')

@section('content')
<div class="card border-primary">
            <h5 class="card-title text-success fs-2" align='center'>All Book Types</h5>
                <div class="card-body py-5">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($types as $type)
                                
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $type->name }}</td>    
                            
                            <td class="d-flex align-content-center">
                                <button class="btn btn-sm btn-primary me-3">Edit</button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $type->id }}">Delete</button>

                                <div class="modal" id="{{ $type->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body py-5 text-center">
                                                <p>Are you sure?</p>
                                                <a href="{{ url('/delete-book-type/'.$type->id) }}" class="btn btn-sm btn-outline-danger me-3 px-2">Yes</a>
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