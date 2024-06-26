@extends('layouts.master')

@section('title',$book->name)
    


@section('content')
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Home / {{ $book->subject->name }} / {{ $book->subSubject->name }} / {{ $book->name }}</h6>
    </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="">
                    <div class="row g-4">
                        <aside class="col-xl-4 col-md-4"> <a href="#" class="img-wrap"> <img height="240" width="180" src="{{ asset('assets/uploads/book/'.$book->img) }}"> </a> </aside>
                            <!-- col.// --> 
                            <div class="col-xl-8 col-md-8">
                                <div class="card-body">
                                    <h1>
                                        <a href="#" class="h3 mb-2 title"> {{ $book->name }}</a> 
                                    </h1>
                                    <p class="mb-2 h5 text-muted">Author: {{ $book->author->name }}</p>
                                    
                                    <div class="price-wrap mb-2"> <strong class="price h5">{{ $book->price }} </strong> </div>
                                    <!-- price-wrap // --> 
                                    <p class="mb-2 h5 text-muted">Publication: Asaxiy</p>
                                
                                <input type="hidden" value="{{ $book->id }}" class="book-id">

                                    <div class="row row-cols-auto gx-2 gy-3 align-items-center">
                                        <div> <button  class="btn btn-primary addToCart"> <i class="fa fa-shopping-cart me-1"></i> Add to cart </button> </div>
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
                    <p>{{$book->detail->description}} </p>
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
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row my-3 g-3">
                        <div class="col-md-4 col-lg-3">
                            <div class="ratio ratio-1x1">
                                <img class="img-fluid" src="{{ asset('assets/uploads/author/1711225219.jpg')  }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-9">
                            <h6>Jule Verne</h6>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem expedita, laudantium necessitatibus temporibus perferendis nemo ad placeat rerum unde pariatur. Id quo nulla veritatis. Consectetur labore eligendi nisi, eius dolorem expedita ex sint necessitatibus. Mollitia totam in accusantium consequuntur consectetur sapiente explicabo voluptatibus fuga recusandae at, molestiae vitae nemo nihil nam nisi. Earum voluptatem animi ipsam neque minus odio esse odit optio reiciendis exercitationem, excepturi veritatis tenetur? Corrupti, beatae repudiandae dolorem ullam recusandae fugiat fuga accusantium tenetur pariatur amet ipsam laborum perferendis quam dignissimos nam, sapiente qui maxime, quibusdam voluptatum cumque assumenda excepturi id! Ad accusamus eius quis vel explicabo.</p>
                        </div>
                    </div>
                </div>
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
    </div>

@endsection

@section('scripts')

<script>
  
    $(document).ready(function () {
         $('.addToCart').click(function (e) { 
            e.preventDefault();
             var book_id = $('.book-id').val();
                
        $.ajaxSetup({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
            });
             $.ajax({
                method: "POST",
                url: "/add-to-cart/",
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