@extends('layouts.master')
@section('title','Cart')

@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-8 col-lg-9">

      @if($cart_items->count()==0)
      <article class="card card-body text-center mb-3 content">
         <div class="row gy-3 align-items-center">
            <h2>Your <i class="fa fa-shopping-cart"></i> cart is empty</h2>
         </div>
      </article>
      @else
      @foreach ($cart_items as $item)
            
            <article class="card card-body mb-3 content">
                <div class="row gy-3 align-items-center">
                   <div class="col-md-6">
                      <a href="{{ url('/book/'.$item->book->slug) }}" class="itemside d-flex align-items-center">
                         <div class="aside"> <img src="{{ asset('assets/uploads/book/'.$item->book->img)  }}" height="72" width="72" class="img-thumbnail img-sm"> </div>
                         <div class="info ms-3">
                            <p class="title">{{ $item->book->name }}</p>
                            <span class="text-muted">By {{ $item->book->author->name }}</span> 
                         </div>
                      </a>
                   </div>
                   <!-- col.// --> 
                   <div class="col-auto" style="min-width: 100px; max-width: 180px;">
                      <div class="input-group input-spinner">
                         <button class="btn btn-light qty-decrement" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13H5v-2h14v2z"></path>
                            </svg>
                         </button>
                               <input type="hidden" class="form-control stock-qty" value="{{ $item->book->qty }}"> 
                         <input type="text" class="form-control text-end qty" style="border: 2px solid #f8f9fa;" value="{{ $item->qty }}"> 
                         <button class="btn btn-light qty-increment" type="button" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                            </svg>
                         </button>
                      </div>
                      <!-- input-group.// --> 
                   </div>
                   <!-- col.// --> 
                           @php
                                $discount = 100 - $item->book->discount;
                                $d_price = ($item->book->price/100)*$discount;
                           @endphp
                           <div class="col-auto">
                               <input type="hidden" class="form-control price" value="{{ $d_price }}"> 
                               <input type="text" class="form-control outline item-price text-end" style="border: 2px solid #f8f9fa;"  value="{{ $d_price*$item->qty }}"> 
                               </div>


                   <div class="col d-flex">
                     <del class="pre-price position-relative"> ৳ {{ $item->book->price }} </del>
                     <strong class="price ms-3"> ৳ {{ $d_price }} </strong> 
                    </div>
                  <input type="hidden" value="{{ $item->id }}" class="item-id">
                   <div class="col text-end"> <a href="" class="btn btn-icon btn-light text-danger delete-item"> <i class="fa fa-trash"></i> </a> </div>
                </div>
                <!-- row.// --> 
            </article>

      @endforeach
      @endif
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                   
                   <dl class="dlist-align d-flex">
                      <dt>Total price:</dt>
                      <dd class="ms-auto totalPrice">  {{ $totalPrice }} </dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>Quantity:</dt>
                      <dd class="text-success ms-auto totalPrice" ><input class="totalQty text-end" style="border: none;" value="{{ $qty }}"> </dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>Discount:</dt>
                      <dd class="text-danger ms-auto"> </dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>Total:</dt>
                      <dd class="ms-auto text-dark h5"> {{ $totalPrice }} </dd>
                   </dl>
                   <hr>
                   <a href="{{ route('checkout') }}" class="btn btn-primary mb-2 w-100">Checkout</a> 
                   
                </div>
                <!-- card-body.// --> 
             </div>
             <!-- card.// --> 
        </div>
    </div>

</div>

@endsection
@section('scripts')
<script>
   $(document).ready(function () {
      $('.qty-decrement').click(function (e) { 
         e.preventDefault();

         var price = $(this).closest('.content').find('.price').val();
         var item_id = $(this).closest('.content').find('.item-id').val();
         var qty = $(this).closest('.content').find('.qty').val();
         var value = parseInt(qty, 10);
         // alert(value);
         value = isNaN(value) ? 0 : value;
         if(value>1)
         {
            value--;
            $(this).closest('.content').find('.qty').val(value);
           
         }
         var item_price = price*value;
         $(this).closest('.content').find('.item-price').val(item_price);
         
         $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            var $this = $(this);
         $.ajax({
            method: "POST",
            url: "/updae-cart-qty/",
            data: {
               'item_id': item_id,
               'qty': value,
            },
           
         });
      });


      $('.qty-increment').click(function (e) { 
         e.preventDefault();
         var price = $(this).closest('.content').find('.price').val();
         var item_id = $(this).closest('.content').find('.item-id').val();
         var stock_qty = $(this).closest('.content').find('.stock-qty').val();
         var qty = $(this).closest('.content').find('.qty').val();
         var value = parseInt(qty, 10);
         // alert(value);
         value = isNaN(value) ? 0 : value;
         if(value<10 && stock_qty>value)
         {
            value++;
            $(this).closest('.content').find('.qty').val(value);
           
         }
         else{
            swal('Out of stock');
         }
          var item_price = price*value;
            $(this).closest('.content').find('.item-price').val(item_price);

            $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            var $this = $(this);
         $.ajax({
            method: "POST",
            url: "/updae-cart-qty/",
            data: {
               'item_id': item_id,
               'qty': value,
            },
            
            success: function (response) {
                    swal(response.status);
            }
         });
      });


      $('.delete-item').click(function (e) { 
         e.preventDefault();
         var item_id = $(this).closest('.content').find('.item-id').val()
         // alert(item_id);
         $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
            var $this = $(this);
         $.ajax({
            method: "POST",
            url: "/delete-cart-item/",
            data: {
               'item_id': item_id,
            },
            success: function (response) {
            $this.closest('.content').remove();
                    swal(response.status);


               // window.location.reload();
               // swal("",response.status,"success");
            }
         });
      });
   });
</script>
@endsection