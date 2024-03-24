@extends('layouts.master')
@section('content')


{{-- <div class="container">
    <div class="row">
        <div class="col-lg-8">
            <article class="">
                <div class="row g-4">
                    <aside class="col-xl-4 col-md-4"> <a href="#" class="img-wrap"> <img height="240" width="180" src="./Ecommerce templates for Figma and Sketch_files/book2.jpg"> </a> </aside>
                        <!-- col.// --> 
                        <div class="col-xl-8 col-md-8">
                            <div class="card-body">
                                <h1>
                                    <a href="#" class="h3 mb-2 title"> The Power of Now </a> 
                                </h1>
                                <p class="mb-2 h5 text-muted">Author: Eckhart Tolle</p>
                                
                                <div class="price-wrap mb-2"> <strong class="price h5"> $182.50 </strong> </div>
                                <!-- price-wrap // --> 
                                <p class="mb-2 h5 text-muted">Publication: Asaxiy</p>
                               
                               
                                <div class="row row-cols-auto gx-2 gy-3 align-items-center">
                                    <div> <a href="#" class="btn btn-primary"> <i class="fa fa-shopping-cart me-1"></i> Add to cart </a> </div>
                                    <div> <a href="#" class="btn btn-outline-primary"> <i class="fa fa-heart me-1"></i> Wishlist </a> </div>
                                </div>
                            </div>
                            <!-- info-div.// --> 
                        </div>
                        <!-- col.// --> 
                    </div>
                <!-- row.// -->
            </article>
        </div>
    </div>
    <br><br>
    <div class="card mb-5">
        <header class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation"> <a href="#" class="nav-link active"  id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</a> </li>
                <li class="nav-item" role="presentation"> <a href="#" class="nav-link"  id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Specs</a> </li>
                <li class="nav-item" role="presentation"> <a href="#" class="nav-link"  id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Author</a> </li>
            </ul>
        </header>
        <div class="tab-content card-body" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <ul class="list-check cols-two">
                    <li>Some great feature name here </li>
                    <li>Lorem ipsum dolor sit amet, consectetur </li>
                    <li>Duis aute irure dolor in reprehenderit </li>
                    <li>Optical heart sensor </li>
                    <li>Easy fast and ver good </li>
                    <li>Some great feature name here </li>
                    <li>Modern style and design</li>
                </ul>
                <hr>
                <dl class="row">
                    <dt class="col-sm-3">Display</dt>
                    <dd class="col-sm-9">13.3-inch LED-backlit display with IPS</dd>
                    <dt class="col-sm-3">Processor</dt>
                    <dd class="col-sm-9">2.3GHz dual-core Intel Core i5</dd>
                    <dt class="col-sm-3">Camera</dt>
                    <dd class="col-sm-9">720p FaceTime HD camera</dd>
                    <dt class="col-sm-3">Memory</dt>
                    <dd class="col-sm-9">8 GB RAM or 16 GB RAM</dd>
                    <dt class="col-sm-3">Graphics</dt>
                    <dd class="col-sm-9">Intel Iris Plus Graphics 640</dd>
                </dl>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="list-check cols-two">
                    <li>Title : সাজিদ বান্ডেল </li>
                    <li>Author : বইবাজার কালেকশন </li>
                    <li>ISBN :</li>
                </ul>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
           <h5 class="card-title">Reviews </h5>
           <hr>
           <blockquote class="border-bottom">
              <div class="float-lg-end d-flex mb-3">
                 <div class="btn-group d-inline-flex me-2"> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                 <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i> </button> 
              </div>
              <div class="icontext">
                 <img src="#" class="img-xs icon rounded-circle"> 
                 <div class="text">
                    <h6 class="mb-0"> Michael Jonathan </h6>
                    
                 </div>
              </div>
              <!-- icontext.// --> 
              <div class="mt-3">
                 <p> It used to be great, finding almost every song, but now i dont know what happened (they might be hacked even) that it can not find any song and it just makes up a different song to thats all and all the best Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </p>
              </div>
           </blockquote>
           <blockquote class="border-bottom">
              <div class="float-lg-end d-flex mb-3">
                 <div class="btn-group d-inline-flex me-2"> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                 <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i> </button> 
              </div>
              <div class="icontext">
                 <img src="#" class="img-xs icon rounded-circle"> 
                 <div class="text">
                    <h6 class="mb-0"> Michael Jonathan </h6>
                 </div>
              </div>
              <!-- icontext.// --> 
              <div class="mt-3">
                 <p> It used to be great, finding almost every song, but now i dont know what happened (they might be hacked even) that it can not find any song and it just makes up a different song to thats all and all the best Just makes up a different song to thats all and all the best </p>
              </div>
           </blockquote>
           <blockquote class="border-bottom">
              <div class="float-lg-end d-flex mb-3">
                 <div class="btn-group d-inline-flex me-2"> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Like"> <i class="fa fa-thumbs-up"></i> </button> <button class="btn btn-light btn-sm float-end" data-bs-toggle="tooltip" data-bs-title="Dislike"> <i class="fa fa-thumbs-down"></i> </button> </div>
                 <button class="btn btn-light btn-sm float-end "> <i class="fa fa-ellipsis-v"></i> </button> 
              </div>
              <div class="icontext">
                 <img src="./Ecommerce templates for Figma and Sketch_files/avatar3.jpg" class="img-xs icon rounded-circle"> 
                 <div class="text">
                    <h6 class="mb-0"> John Alex </h6>
                 </div>
              </div>
              <!-- icontext.// --> 
              <div class="mt-3">
                 <p> It used to be great, finding almost every song, but now i dont know what happened (they might be hacked even) that it can not find any song and it just makes up a different song to thats all and all the best It used to be great, finding almost every song, but now i dont know what happened (they might be hacked even) </p>
              </div>
           </blockquote><br>
           <button class="btn btn-success ms-auto">Write Review</button>
        </div>
    </div>
</div> --}}

<div class="container">
    <div class="row g-4 my-5">
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="single-item p-1">
                <div class="single-product border border-light">
                    <figure class="mb-0 position-relative overflow-hidden">
                        <a href="./single-product.html">
                            <img class="lazyload" data-src="#" alt="Products title goes here">
                        </a>
                        <span class="onsale"> 10% <br>ছাড়</span>
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
                                <a href="./single-product.html">#</a>
                            </h6>
                        </div>
                        <div class="fs-14 mb-1" style="height: 42px;">
                            <span class="">লেখক : </span>
                            <a href="./category.html">#</a>
                        </div>
                        <div class="fs-16 fw-500" style="font-family: sans-serif;">
                            <del aria-hidden="true" style="color: #898b92;">
                                <bdi>200 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </del>
                            <ins class="text-primary text-decoration-none ms-3">
                                @php
                                // $discount = 100 - $book->discount;
                                // $d_price = ($book->price/100)*$discount;
                                @endphp
                                <bdi>500 &nbsp; <span class="fw-500">৳</span>
                                </bdi>
                            </ins>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection