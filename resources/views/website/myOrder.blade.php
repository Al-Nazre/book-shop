@extends('layouts.master')

@section('content')


<div class="container my-5">
    <h4 class="fs-4 mb-5 fw-bold text-secondary text-center">My Orders</h4>
    @if($orders->count()==0)
    <article class="card card-body text-center mb-3 content">
         <div class="row gy-3 align-items-center">
            <h2>You have no order.</h2>
         </div>
      </article>
    @else

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
        @foreach ($orders as $order )
            
        
        <tbody>
          <tr>
            <td class="text-center">{{ $order->date }}</td>
            <td class="text-center">{{ $order->tracking_no }}</td>
            <td class="text-center">{{ $order->total_price }}/td>
            <td class="text-center">{{ $order->status }}</td>
            <td class="d-flex justify-content-center"><button class="btn btn-sm btn-success px-3" data-bs-toggle="modal" data-bs-target="#detail{{ $order->id }}">View</button></td>
          </tr>
        </tbody>
        @endforeach

    </table>
    <!-- The Modal -->
            <div class="modal" id="detail{{ $order->id }}">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Order View</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                
                        <!-- Modal body -->
                        <div class="modal-body my-4">
                          <div class="row">
                              <div class="col-md-6">
                                  <h4 class="fs-3 fw-bold">
                                      Basic Details
                                  </h4><hr>
                                  <div class="row g-3">
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">Order No.</label><p class="fs-3">{{ $order->order_no }}</p></div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">Tracking No.</label> <p class="fs-3">{{ $order->tracking_no }}</p></div>
                                      </div>
                                  </div>
                                  <div class="row g-3">
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">Name</label><p class="fs-6">{{  $order->name }}</p></div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">Contact</label> <p class="fs-6">{{ $order->phone }}</p></div>
                                      </div>
                                  </div>
                                  <div class="row g-3">
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">E-Mail</label><p class="fs-6">{{ $order->email }}</p></div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">Order Date</label> <p class="fs-6">{{ $order->order_date }}</p></div>
                                      </div>
                                  </div>
                                  <h4 class="fs-3 mt-5 fw-bold">
                                      Shipping Details
                                  </h4><hr>
                                  <div class="my-2"><label class="form-label fw-bold">Address</label><p class="fs-6">{{ $order->house }}, {{ $order->address }}, {{ $order->city }}</p></div>
      
                                  <div class="row g-3">
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">City</label><p class="fs-6">{{ $order->city }}</p></div>
                                      </div>
                                      <div class="col-md-6">
                                          <div class="my-2"><label class="form-label fw-bold">ZIP</label> <p class="fs-6">{{ $order->zip }}</p></div>
                                      </div>
                                  </div>
                                
                              </div>
     
                              <div class="col-md-6">
                                  <h4 class="fs-3 fw-bold">
                                      Book Details
                                  </h4><hr>
      
                                  <table class="table table-borderless">
                                      <thead>
                                      <tr>
                                          <th>Code</th>
                                          <th>Name</th>
                                          <th>Quantity</th>
                                          <th>Price</th>
                                          <th>Image</th>
                                      </tr>
                                      </thead>
                                      @foreach($order->items as $item)
                                      @php
                                          $discount = 100 - $item->book->discount;    
                                          $d_price = ($item->book->price/100)*$discount;
                                      @endphp
                                      <tbody>
                                      <tr>
                                          <td>{{ $item->book->code }}</td>
                                          <td>{{ $item->book->name }}</td>
                                          <td>{{ $item->qty }}</td>
                                          <td>{{ $d_price }}</td>
                                          <td><div class="ratio ratio-1x1"><img src="{{ asset('assets/uploads/book/'.$item->book->img) }}" width="20px" alt="Product image"></div></td>
                                      </tr>
                                      </tbody>
                                      @endforeach
                                      
                                  </table>
                                  <div class="w-100 d-flex justify-content-between">
                                      <span class="fs-2 fw-bold">Grand Total:</span>
                                      <span class="fs-2 fw-bold">{{ $order->total_price }}</span>
                                  </div>
      
                              </div>
                          </div>
                        </div>
                
                
                    </div>
                </div>
            </div>
    @endif

</div>

@endsection
