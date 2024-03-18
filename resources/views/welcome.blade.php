@extends('layouts.master')
@section('content')
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
@endsection
