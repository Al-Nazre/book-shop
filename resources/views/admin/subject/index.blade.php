@extends('layouts.admin')
@section('title','Admin - Subject')

@section('content')
@php
use App\Models\SubSubject;
@endphp
<div class="card border-primary">
            <h5 class="card-title text-success fs-2" align='center'>All Subjects</h5>
                <div class="card-body py-5">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Sub-Subject</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($subjects as $subject)
                                
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $subject->name }}</td>   
                            @php
                                
                                $allsub = SubSubject::where('subject_id',$subject->id);
                                if($allsub){
                                   $sub = $allsub->count();
                                }
                                else{
                                    $sub = 0;
                                }
                                $home = 'No';
                                if($subject->home == 1){
                                    $home = 'Yes';
                                }
                            @endphp 
                            <td>{{ $sub }}</td>    
                            <td>{{ $home }}</td>    
                            
                            <td class="d-flex align-content-center">
                                <button class="btn btn-sm btn-primary me-3">Edit</button>
                                <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $subject->id }}">Delete</button>

                                <div class="modal" id="{{ $subject->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <!-- Modal body -->
                                            <div class="modal-body py-5 text-center">
                                                <p>Are you sure?</p>
                                                <a href="{{ url('delete-subject/'.$subject->id) }}" class="btn btn-sm btn-outline-danger me-3 px-2">Yes</a>
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