@include('common-section.navbar')

<!-- cheackout page start -->

<div class="container main-aria mt-5">
    <div class="cheackout-box ">
        <div class="header">
            <h1 class="text-center">Checkout</h1>
        </div>

        <div class="your-address mt-5">
            <div class="row row-cols-md-2 ">
                <div class="cold-md-6">
                    <div class="header-youraddress">
                        <h2>Your Address</h2>
                    </div>
                    <form action="" method="post">
                        <div class="col-md-12">
                            <label for="full name">full name*</label>
                            <input type="text" name="full_name" id="full_name" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label for="number">number*</label>
                            <input type="text" name="number" id="number" class="form-control">
                        </div>
                         <div class="col-md-12">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        
                         
                        <div class="form-check col-md-12">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
  <label class="form-check-label" for="radioDefault1">
    In Side Of Dhaka 80 ৳
  </label>
</div>
<div class="form-check col-md-12">
  <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
  <label class="form-check-label" for="radioDefault2">
    Out Side Of Dhaka 120 ৳
  </label>
</div>

<div class="mt-3 col-md-12">
    <label for="address"><h3>Address</h3></label>
  <textarea class="form-control" placeholder="Address" id="address" name="address" style="height: 100px"></textarea>
  
</div>
<div class=" mt-3 col-md-12">
    <label for="address"><h3>Message</h3></label>
  <textarea class="form-control" placeholder="Address" id="address" name="address" style="height: 100px"></textarea>
  
</div>
<input type="submit" class="btn btn-danger mt-5">
                    </form>
                </div>
                <div class="cold-md-4">
                    <div class="your-card me-5 ">
                        <div class="header-your-cart">
                            <h3>Your Cart</h3>
                        </div>

                        <div class="your-cart-box ">
                            <div class="iteam m-3  ">
                            <div class="sub-total d-flex justify-content-between card-iteam">
                                <h5>sub Total</h5>
                                <h5>0TK</h5>
                            </div>
                              <div class="sub-total d-flex justify-content-between card-iteam">
                                <h5>sub Total</h5>
                                <h5>0TK</h5>
                            </div>
                              <div class="sub-total d-flex justify-content-between card-iteam">
                                <h5>sub Total</h5>
                                <h5>0TK</h5>
                            </div>
                            
                            </div>

                        </div>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cheackout page end -->



@include('common-section.Footer')