@extends('layouts.master')

@section('content')


<div class="container my-5">
    <h4 class="fs-4 mb-5 fw-bold text-secondary text-center">Lorem Ipsum</h4>
    <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Order Date</th>
            <th class="text-center">Tracking Number</th>
            <th class="text-center">Total Price</th>
            <th class="text-center">Status</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">22/12/2024</td>
            <td class="text-center">#9475377</td>
            <td class="text-center">22500/-</td>
            <td class="text-center">Null</td>
            <td class="d-flex justify-content-center"><button class="btn btn-sm btn-success px-3" data-bs-toggle="modal" data-bs-target="#view">View</button></td>

            <!-- The Modal -->
            <div class="modal" id="view">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Order View</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body my-4">
                            <div class="row g-4">
                                <div class="col-md-6">

                                </div>
                            </div>
                        </div>
                
                
                    </div>
                </div>
            </div>
          </tr>
        </tbody>
    </table>
</div>

@endsection
