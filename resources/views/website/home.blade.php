@extends('layouts.master')
@section('title')
    Book Shop
@endsection
@section('content')
@php
    use App\Models\SubSubject;
    use App\Models\Book;
    use Illuminate\Support\Facades\Auth;

if (Auth::check()) {
    // User is logged in
    echo "User is logged in";
} else {
    // User is not logged in
    echo "User is not logged in";
}
    $sessionId = session()->getId();

// You can then use $sessionId as needed, such as printing it out
echo $sessionId;
@endphp

          <section class="slider-area py-3">
                <div class="container">
                    <div class="carousel" data-items="1" data-autoplay="true" data-loop="true" data-infinite="true" data-dots="true" data-fade="true">
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" src="{{ asset('frontend/assets/images/slider/1.webp') }}" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="{{ asset('frontend/assets/images/slider/mobile1.jpg') }}" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="{{ asset('frontend/assets/images/slider/2.webp') }}" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="{{ asset('frontend/assets/images/slider/mobile2.jpg') }}" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="{{ asset('frontend/assets/images/slider/3.webp') }}" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="{{ asset('frontend/assets/images/slider/mobile3.jpg') }}" alt="Slide Image">
                        </div>
                        <div class="single-item">
                            <img class="lazyload w-100 img-fit d-md-block d-none" data-src="{{ asset('frontend/assets/images/slider/4.webp') }}" alt="Slide Image">
                            <img class="lazyload w-100 img-fit d-md-none" data-src="{{ asset('frontend/assets/images/slider/mobile2.jpg') }}" alt="Slide Image">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Slider Area -->

            <section class="pb-4 products-area">
                <div class="container">

            @foreach ($trend_subjects as $subject)
    
                    <div class="pb-4">
                        <div class="p-10px mb-3 d-flex align-items-center gap-3 rounded-1 bg-white rounded-3 shadow-md">
                            <h5 class="h5 ps-2 mb-0 text-primary flex-grow-1">{{ $subject->name }}</h5>
                            <div class="flex-shrink-0">
                                <a class="btn btn-primary fs-14 pb-1" href="{{ url('/category-books/'.$subject->slug) }}">এই বিষয়ে সকল বই</a>
                            </div>
                        </div>
                        <div class="bg-white p-sm-3 p-2 rounded-3 shadow-md">
                            <div class="carousel" data-items="6" data-xl-items="5" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-arrows="true" data-infinite="true" data-loop="true"
                                data-autoplay="true">
                                @php
                                    $books = Book::where('subject_id', $subject->id)->where('status', 1 )->get();
                                @endphp
                                @foreach ($books as $book)
                                    <input type="hidden" value = "{{ $book->id }}" class = 'book_id'>
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
                                                <a class="addToCart">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">{{ $book->name }}</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">{{ $book->author->name }}</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>{{ $book->price }}&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    @php
                                                    $discount = 100 - $book->discount;
                                                    $d_price = ($book->price/100)*$discount;
                                                    @endphp
                                                    <bdi>{{ $d_price }}&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                
                    <!-- End Single Area -->
            @php
                $trend_sub_subjects = SubSubject::where('subject_id', $subject->id)
                                        ->where('popular',1)
                                        ->get();
            @endphp
                        <div class="pb-4">
                            <div class="row g-md-3 g-2">
                                
                                @if($trend_sub_subjects)
                                @foreach ($trend_sub_subjects as $sub_subject)
                                <div class="col-lg col-md-4 col-6">
                                    <a class="btn btn-cat" href="{{ url('/category-books/'.$subject->slug.'/'.$sub_subject->slug) }}">{{ $sub_subject->name }}</a>
                                </div>                       
                                @endforeach
                                @else
                            </div>
                        </div>
            
            @endif
            @endforeach

                    
                </div>
            </section>
                    <!-- End Single Area -->
@endsection

@section('scripts')
<script>

   
   
</script>
@endsection
