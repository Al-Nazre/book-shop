@extends('layouts.master')
@section('title')
    Checkout
@endsection

@section('content')
@php
use Illuminate\Support\Facades\Auth;
    
@endphp
<div class="container">
    <div class="row">
        <div class="col-lg-8">
           <!-- ============== COMPONENT 1 =============== --> 
           <article class="card">
              <div class="card-body">
                 <h5 class="card-title">Basic Details</h5>
                 <form action="{{ route('order.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                 <div class="row">
                    <div class="col-6 mb-3"> <label class="form-label">First name</label> <input type="text" class="form-control" placeholder="Type here" name="first_name" value="{{ Auth::user()->name }}"> </div>
                    <!-- col end.// --> 
                    <div class="col-6"> <label class="form-label">Last name</label> <input type="text" class="form-control" name="last_name" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-lg-6 mb-3"> <label class="form-label">Phone</label> <input type="text" value="+998" class="form-control" name="phone" placeholder=""> </div>
                    <!-- col end.// --> 
                    <div class="col-lg-6 mb-3"> <label class="form-label">Email</label> <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="example@gmail.com"> </div>
                    <!-- col end.// --> 
                 </div>
                 <hr class="my-4">
                 <h5 class="card-title"> Shipping info </h5>
                 <div class="row">
                    <div class="col-sm-8 mb-3"> <label class="form-label">Address</label> <input type="text" class="form-control" name="address" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 mb-3">
                       <label class="form-label">City*</label> 
                       <select class="form-select" id="city*" name="city" aria-label="City*">
                          <option value="1">New York</option>
                          <option value="2">Moscow</option>
                          <option value="3">Samarqand</option>
                       </select>
                    </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label"  >House</label> <input type="text" name="house" class="form-control" placeholder="Type here"> </div>
        
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">Zip</label> <input type="text" name="zip" class="form-control" placeholder=""> </div>
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">Messeage Here</label> <input type="text" name="message" class="form-control" placeholder=""> </div>
                    <!-- col end.// --> 
                 </div>
                 <hr>
                 
                 <!-- row.// --> <label class="form-check mb-4"> <input class="form-check-input" type="checkbox" value=""> <span class="form-check-label"> Save and use as new Address</span> </label> 
                 <!-- row.// --> <label class="form-check mb-4"> <input class="form-check-input" type="checkbox" value="" checked> <span class="form-check-label"> Cash on Delivery </span> </label> 
                 <button type="submit" class="btn btn-primary">Place Order</button> 
                 </form>
              </div>



              
              <!-- card-body end.// -->
           </article>
           <!-- card end.// --><!-- ============== COMPONENT 1 .// =============== --> 
        </div>
        <!-- col.// --> 
        <aside class="col-lg-4">
           <!-- ============== COMPONENT SUMMARY =============== -->
           <article class="card">
              <div class="card-body">
                 <h5 class="card-title">Summary</h5>
                 <dl class="dlist-align d-flex">
                  <dt>Total price:</dt>
                  <dd class="ms-auto text-dark h5"> ${{ $totalPrice }}</dd>
                  </dl>
                  
                  <dl class="dlist-align d-flex">
                     <dt>Total Quantity:</dt>
                     <dd class="text-danger ms-auto"> {{ $qty }} </dd>
                  </dl>
                 <hr>
                 <h5 class="mb-4">Items in cart</h5>
                 @foreach ($cart_items as $item)
                
                 <div class="itemside align-items-center mb-4 w-100 position-relative d-flex">
                    <div class="aside position-relative"> <b class="badge bg-secondary rounded-pill check-img-q">{{ $item->qty  }}</b> <img src="{{ asset('assets/uploads/author/1711225219.jpg')  }}" height="72" width="72" class="img-sm rounded border"> </div>
                    <div class="info ms-3">
                       <a href="#" class="title">{{ $item->book->name }}</a> 
                       <div class="text-muted">{{ $item->book->author->name }}</div>
                       @php
                                $discount = 100 - $item->book->discount;
                                $d_price = ($item->book->price/100)*$discount;
                           @endphp
                       <div class="price text-muted">Price: {{ $d_price }}</div>
                       <!-- price .// --> 
                    </div>
                 </div>

                 @endforeach
              </div>
           </article>
           <!-- ============== COMPONENT SUMMARY .// =============== --> 
        </aside>
        <!-- col.// -->
    </div>
</div>



@endsection