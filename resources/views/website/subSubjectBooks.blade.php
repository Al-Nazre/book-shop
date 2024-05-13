@extends('layouts.master')
@section('title')
@section('title', $sub_subject->name )

@endsection
@section('content')


<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Home / {{ $sub_subject->subject->name }} / {{ $sub_subject->name }}</h6>
    </div>
</div>

<div class="container">
    <div class="row g-4 my-5">
        @foreach ($books as $book )
            
        <div class="col-lg-3 col-md-4 col-sm-6 content">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="{{ url('/book/'.$book->slug) }}">
                            <img class="lazyload" data-src="{{ asset('assets/uploads/book/'.$book->img) }}" alt="Products title goes here">
                        </a>
                        <span class="onsale"> {{ $book->discount }}% <br>ছাড়</span>
                        <div class="functional-btn">
                            <a href="#">
                                <i class="fal fa-heart"></i>
                            </a>
                            <input type="hidden" value = "{{ $book->id }}" class ='book-id'>
                            @if($book->qty > 0)                                               
                            <a href="" class="addToCart">
                                <i class="fal fa-shopping-cart"></i>
                            </a>
                            @else
                            @endif
                        </div>
                    </figure>
                    <div class="p-10px pt-3">
                        <div class="border-bottom pb-2 mb-2">
                            <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                <a href="{{ url('/book/'.$book->slug) }}">{{ $book->name }}</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">{{ $book->author->name }}</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>{{ $book->price }} &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                $discount = 100 - $book->discount;
                                $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>{{ $d_price }} &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.addToCart').click(function (e) { 
            e.preventDefault();
             var book_id = $(this).closest('.content').find('.book-id').val();
            //  alert(book_id);
                
        $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
             $.ajax({
                method: "POST",
                url: '{{ route('addToCart') }}',
                data: {
                    'book_id' : book_id,
                },
                
                success: function (response) {
                    swal(response.status);
                }
             });
        });
    });
</script>

@endsection