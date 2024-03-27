@extends('layouts.master')
@section('content')


<div class="container">

    <div class="row">
        <div class="col-md-8 col-lg-9">
            <article class="card card-body mb-3">
                <div class="row gy-3 align-items-center">
                   <div class="col-md-6">
                      <a href="#" class="itemside d-flex align-items-center">
                         <div class="aside"> <img src="{{ asset('assets/uploads/author/1711225219.jpg')  }}" height="72" width="72" class="img-thumbnail img-sm"> </div>
                         <div class="info ms-3">
                            <p class="title">T-shirts with multiple colors, for men and lady </p>
                            <span class="text-muted">Clothes</span> 
                         </div>
                      </a>
                   </div>
                   <!-- col.// --> 
                   <div class="col-auto" style="min-width: 100px; max-width: 180px;">
                      <div class="input-group input-spinner">
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13H5v-2h14v2z"></path>
                            </svg>
                         </button>
                         <input type="text" class="form-control" value="1"> 
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                            </svg>
                         </button>
                      </div>
                      <!-- input-group.// --> 
                   </div>
                   <!-- col.// --> 
                   <div class="col d-flex">
                     <span class="pre-price position-relative"> $200.00 </span>
                     <strong class="price ms-3"> $180.00 </strong> 
                    </div>
                   <div class="col text-end"> <a href="#" class="btn btn-icon btn-light text-danger"> <i class="fa fa-trash"></i> </a> </div>
                </div>
                <!-- row.// --> 
            </article>

            <article class="card card-body mb-3">
                <div class="row gy-3 align-items-center">
                   <div class="col-md-6">
                      <a href="#" class="itemside d-flex align-items-center">
                         <div class="aside"> <img src="{{ asset('assets/uploads/author/1711225219.jpg')  }}" height="72" width="72" class="img-thumbnail img-sm"> </div>
                         <div class="info ms-3">
                            <p class="title">T-shirts with multiple colors, for men and lady </p>
                            <span class="text-muted">Clothes</span> 
                         </div>
                      </a>
                   </div>
                   <!-- col.// --> 
                   <div class="col-auto" style="min-width: 100px; max-width: 180px;">
                      <div class="input-group input-spinner">
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13H5v-2h14v2z"></path>
                            </svg>
                         </button>
                         <input type="text" class="form-control" value="1"> 
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                            </svg>
                         </button>
                      </div>
                      <!-- input-group.// --> 
                   </div>
                   <!-- col.// --> 
                   <div class="col d-flex">
                     <span class="pre-price position-relative"> $200.00 </span>
                     <strong class="price ms-3"> $180.00 </strong> 
                    </div>
                   <div class="col text-end"> <a href="#" class="btn btn-icon btn-light text-danger"> <i class="fa fa-trash"></i> </a> </div>
                </div>
                <!-- row.// --> 
            </article>

            <article class="card card-body mb-3">
                <div class="row gy-3 align-items-center">
                   <div class="col-md-6">
                      <a href="#" class="itemside d-flex align-items-center">
                         <div class="aside"> <img src="{{ asset('assets/uploads/author/1711225219.jpg')  }}" height="72" width="72" class="img-thumbnail img-sm"> </div>
                         <div class="info ms-3">
                            <p class="title">T-shirts with multiple colors, for men and lady </p>
                            <span class="text-muted">Clothes</span> 
                         </div>
                      </a>
                   </div>
                   <!-- col.// --> 
                   <div class="col-auto" style="min-width: 100px; max-width: 180px;">
                      <div class="input-group input-spinner">
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13H5v-2h14v2z"></path>
                            </svg>
                         </button>
                         <input type="text" class="form-control" value="1"> 
                         <button class="btn btn-light" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#999" viewBox="0 0 24 24">
                               <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                            </svg>
                         </button>
                      </div>
                      <!-- input-group.// --> 
                   </div>
                   <!-- col.// --> 
                   <div class="col d-flex">
                     <span class="pre-price position-relative"> $200.00 </span>
                     <strong class="price ms-3"> $180.00 </strong> 
                    </div>
                   <div class="col text-end"> <a href="#" class="btn btn-icon btn-light text-danger"> <i class="fa fa-trash"></i> </a> </div>
                </div>
                <!-- row.// --> 
            </article>
            <div class="btn-wrapper w-100 d-flex">
                <a href="#" class="btn btn-success mb-2 mx-auto">Next</a>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body">
                   <div class="input-group mb-3"> <input type="text" class="form-control" placeholder="Promo code"> <button class="btn btn-light text-primary">Apply</button> </div>
                   <dl class="dlist-align d-flex">
                      <dt>Total price:</dt>
                      <dd class="ms-auto"> $1403.97</dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>Discount:</dt>
                      <dd class="text-success ms-auto"> - $60.00 </dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>TAX:</dt>
                      <dd class="text-danger ms-auto"> + $14.00 </dd>
                   </dl>
                   <dl class="dlist-align d-flex">
                      <dt>Total:</dt>
                      <dd class="ms-auto text-dark h5"> $1357.97 </dd>
                   </dl>
                   <hr>
                   <a href="#" class="btn btn-primary mb-2 w-100">Checkout</a> <a href="#" class="btn btn-outline-primary w-100">Installment</a> 
                </div>
                <!-- card-body.// --> 
             </div>
             <!-- card.// --> 
        </div>
    </div>

</div>



@endsection