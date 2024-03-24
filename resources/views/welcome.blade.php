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

            <section class="pb-4 products-area">
                <div class="container">

                    <div class="pb-4">
                        <div class="p-10px mb-3 d-flex align-items-center gap-3 rounded-1 bg-white rounded-3 shadow-md">
                            <h5 class="h5 ps-2 mb-0 text-primary flex-grow-1">বইমেলা ২০২২ এর নতুন বই</h5>
                            <div class="flex-shrink-0">
                                <a class="btn btn-primary fs-14 pb-1" href="./category.html">এই বিষয়ে সকল বই</a>
                            </div>
                        </div>
                        <div class="bg-white p-sm-3 p-2 rounded-3 shadow-md">
                            <div class="carousel" data-items="6" data-xl-items="5" data-lg-items="5" data-md-items="4" data-sm-items="3" data-xs-items="2" data-arrows="true" data-infinite="true" data-loop="true"
                                data-autoplay="true">
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/1.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 17% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">ইতিহাসের আয়নায় ইহুদি-খৃষ্টান</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম জাওযিয়্যাহ রহ</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/2.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 22% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">দ্যা আলমানাক অব নাভাল রাভিকান্ত</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/3.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 25% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">হাউ টু উইন ফ্রেন্ড অ্যান্ড ইনফ্লুয়েন্স পিপল</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম জাওযিয়্যাহ রহ</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/4.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 35% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">ইসলামি সভ্যতায় চিকিৎসাবিজ্ঞানের ইতিহাস</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">স্বপ্নচারী টিম</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/5.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 29% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">মামলুক সালতানাতের ইতিহাস</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আহমাদ হুসাইন রিফায়ী</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/6.webp" alt="Products title goes here">
                                            </a>
                                            <span class="onsale"> 24% <br>ছাড়</span>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">যাদুস সালেকিন : ইসলাহে নফসের পথ ও পাথেয় (হার্ডকভার)</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">মুহিউস সুন্নাহ আল্লামা মাহমুদুল হাসান</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/7.webp" alt="Products title goes here">
                                            </a>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">ইতিহাসের আয়নায় ইহুদি-খৃষ্টান</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম জাওযিয়্যাহ রহ</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/8.webp" alt="Products title goes here">
                                            </a>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">ইতিহাসের আয়নায় ইহুদি-খৃষ্টান</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম জাওযিয়্যাহ রহ</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-item p-1">
                                    <div class="single-product border border-light">
                                        <figure class="mb-0 position-relative overflow-hidden">
                                            <a href="./single-product.html">
                                                <img class="lazyload" data-src="./assets/images/products/9.webp" alt="Products title goes here">
                                            </a>
                                            <div class="functional-btn">
                                                <a href="#">
                                                    <i class="fal fa-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="fal fa-shopping-cart"></i>
                                                </a>
                                            </div>
                                        </figure>
                                        <div class="p-10px pt-3">
                                            <div class="border-bottom pb-2 mb-2">
                                                <h6 class="h6 mb-1 text-truncate-2 lh-1-5 hov-text-primary" style="height: 46px;">
                                                    <a href="./single-product.html">ইতিহাসের আয়নায় ইহুদি-খৃষ্টান</a>
                                                </h6>
                                            </div>
                                            <div class="fs-14 mb-1" style="height: 42px;">
                                                <span class="">লেখক : </span>
                                                <a href="./category.html">আল্লামা ইবনুল কায়্যিম জাওযিয়্যাহ রহ</a>
                                            </div>
                                            <div class="fs-16 fw-500" style="font-family: sans-serif;">
                                                <del aria-hidden="true" style="color: #898b92;">
                                                    <bdi>600&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </del>
                                                <ins class="text-primary text-decoration-none ms-3">
                                                    <bdi>420&nbsp; <span class="fw-500">৳</span>
                                                    </bdi>
                                                </ins>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Area -->

                    <div class="pb-4">
                        <div class="row g-md-3 g-2">
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">সুন্নাত ও শিষ্টাচার</a>
                            </div>
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">ঈমান ও আকীদা</a>
                            </div>
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">পরিবার ও সামাজিক জীবন</a>
                            </div>
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">ইসলামী সাহিত্য</a>
                            </div>
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">শিশু কিশোরদের বই</a>
                            </div>
                            <div class="col-lg col-md-4 col-6">
                                <a class="btn btn-cat" href="#">ইসলামি ইতিহাস ও ঐতিহ্য</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                    <!-- End Single Area -->

            
@endsection
