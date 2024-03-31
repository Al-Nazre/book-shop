@extends('layouts.admin')

@section('content')
    
    <div class="card border-primary">
            <h5 class="card-title text-success fs-2" align='center'>All Books</h5>
                <div class="card-body py-5">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order Date</th>
                            <th>Order No</th>
                            <th>Tracking no.</th>
                            <th>Customer</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $sl = 1;
                            @endphp
                            @foreach ($all_orders as $order)
                                
                        <tr>
                            <td>{{ $sl++ }}</td>
                            <td>{{ $order->order_date }}</td>
                            <td>{{ $order->order_no }}</td>
                            <td>{{ $order->tracking_no }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td>{{ $order->status }}</td>
                            
                            <td class="d-flex">
                                <a href="{{ url('/admin-order-view/'.$order->id) }}" class="btn btn-sm btn-primary me-3">View Order</a>
                            </td>
                        </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
    </div>
@endsection