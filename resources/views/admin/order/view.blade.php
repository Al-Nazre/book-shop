@extends('layouts.admin')

@section('content')
    
    <div class="card border-primary">
            <h5 class="card-title text-success fs-2" align='center'></h5>
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="fs-3 font-bold">
                                Basic Details
                            </h4><hr>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">Order No.</label><p class="fs-3">{{ $order->order_no }}</p></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">Tracking No.</label> <p class="fs-3">{{ $order->tracking_no }}</p></div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">Name</label><p class="fs-5">{{  $order->name }}</p></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">Contact</label> <p class="fs-5">{{ $order->phone }}</p></div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">E-Mail</label><p class="fs-5">{{ $order->email }}</p></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">Order Date</label> <p class="fs-5">{{ $order->order_date }}</p></div>
                                </div>
                            </div>
                            <h4 class="fs-3 mt-5 font-bold">
                                Shipping Details
                            </h4><hr>
                            <div class="my-2"><label class="form-label">Address</label><p class="fs-5">{{ $order->house }}, {{ $order->address }}, {{ $order->city }}</p></div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">City</label><p class="fs-5">{{ $order->city }}</p></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="my-2"><label class="form-label">ZIP</label> <p class="fs-5">{{ $order->zip }}</p></div>
                                </div>
                            </div>
                           
                        </div>

                        <div class="col-md-6">
                            <h4 class="fs-3 font-bold">
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

                            <form action="{{ url('/admin-order-update/'.$order->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="my-3">
                                    @php
                                        $x = '';
                                        if($order->status)
                                    @endphp
                                    <label class="form-label mb-3">Order Detail:</label> 
                                    <select class="form-select" name="status" aria-label="Status">
                                        <option value="Pending" {{ $order->status == 'Pending' ? 'selected':'' }}>Pending</option>
                                        <option value="Processing" {{ $order->status == 'Processing' ? 'selected':'' }}>Processing</option>
                                        <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected':'' }}>Shipped</option>
                                    </select>
                                    <div class="d-flex mt-3">
                                        <button type="submit" class="btn btn-primary ms-auto">Continue</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div>

@endsection