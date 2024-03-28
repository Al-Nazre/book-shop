@extends('layouts.master')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-8">
           <!-- ============== COMPONENT 1 =============== --> 
           <article class="card">
              <div class="card-body">
                 <h5 class="card-title">Basic Details</h5>
                 <div class="row">
                    <div class="col-6 mb-3"> <label class="form-label">First name</label> <input type="text" class="form-control" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-6"> <label class="form-label">Last name</label> <input type="text" class="form-control" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-lg-6 mb-3"> <label class="form-label">Phone</label> <input type="text" value="+998" class="form-control" placeholder=""> </div>
                    <!-- col end.// --> 
                    <div class="col-lg-6 mb-3"> <label class="form-label">Email</label> <input type="text" class="form-control" placeholder="example@gmail.com"> </div>
                    <!-- col end.// --> 
                 </div>
                 <hr class="my-4">
                 <h5 class="card-title"> Shipping info </h5>
                 <div class="row">
                    <div class="col-sm-8 mb-3"> <label class="form-label">Address</label> <input type="text" class="form-control" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 mb-3">
                       <label class="form-label">City*</label> 
                       <select class="form-select" id="city*" aria-label="City*">
                          <option value="1">New York</option>
                          <option value="2">Moscow</option>
                          <option value="3">Samarqand</option>
                       </select>
                    </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">House</label> <input type="text" class="form-control" placeholder="Type here"> </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">Postal code</label> <input type="text" class="form-control" placeholder=""> </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">Zip</label> <input type="text" class="form-control" placeholder=""> </div>
                    <!-- col end.// --> 
                    <div class="col-sm-4 col-6 mb-3"> <label class="form-label">Pin</label> <input type="password" class="form-control" placeholder=""> </div>
                 </div>
                 <!-- row.// --> <label class="form-check mb-4"> <input class="form-check-input" type="checkbox" value=""> <span class="form-check-label"> Save this address </span> </label> <button class="btn btn-primary">Continue</button> <button class="btn btn-light">Cancel </button> 
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
                 <dl class="dlist-align">
                    <dt>Total price:</dt>
                    <dd class="text-end"> $1403.97</dd>
                 </dl>
                 <dl class="dlist-align">
                    <dt>Discount:</dt>
                    <dd class="text-end text-danger"> - $60.00 </dd>
                 </dl>
                 <dl class="dlist-align">
                    <dt>Shipping cost:</dt>
                    <dd class="text-end"> + $14.00 </dd>
                 </dl>
                 <hr>
                 <dl class="dlist-align">
                    <dt> Total: </dt>
                    <dd class="text-end"> <strong class="text-dark">$1357.97</strong> </dd>
                 </dl>
                 <div class="input-group my-4"> <input type="text" class="form-control" name="lorem" placeholder="Promo code"> <button class="btn btn-light text-primary">Apply</button> </div>
                 <hr>
                 <h5 class="mb-4">Items in cart</h5>
                 <div class="itemside align-items-center mb-4">
                    <div class="aside"> <b class="badge bg-secondary rounded-pill">2</b> <img src="./Ecommerce templates for Figma and Sketch_files/2.jpg" class="img-sm rounded border"> </div>
                    <div class="info">
                       <a href="https://bootstrap-ecommerce.com/components.html#" class="title">Canon Cmera EOS, 10x zoom</a> 
                       <div class="price text-muted">Total: $12.99</div>
                       <!-- price .// --> 
                    </div>
                 </div>
                 <div class="itemside align-items-center mb-4">
                    <div class="aside"> <b class="badge bg-secondary rounded-pill">2</b> <img src="./Ecommerce templates for Figma and Sketch_files/8.jpg" class="img-sm rounded border"> </div>
                    <div class="info">
                       <a href="https://bootstrap-ecommerce.com/components.html#" class="title">Leather Wallet for Men Original</a> 
                       <div class="price text-muted">Total: $12.99</div>
                       <!-- price .// --> 
                    </div>
                 </div>
                 <div class="itemside align-items-center mb-4">
                    <div class="aside"> <b class="badge bg-secondary rounded-pill">2</b> <img src="./Ecommerce templates for Figma and Sketch_files/9.jpg" class="img-sm rounded border"> </div>
                    <div class="info">
                       <a href="https://bootstrap-ecommerce.com/components.html#" class="title">Product name goes here</a> 
                       <div class="price text-muted">Total: $12.99</div>
                       <!-- price .// --> 
                    </div>
                 </div>
              </div>
           </article>
           <!-- ============== COMPONENT SUMMARY .// =============== --> 
        </aside>
        <!-- col.// -->
    </div>
</div>



@endsection