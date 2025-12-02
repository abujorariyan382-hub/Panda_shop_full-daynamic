@include('common-section.navbar')


<div class="container-fluid">

    <div class="container mt-3">
        <div class="row row-cols-1 row-cols-md-2 align-items-center">
            <div class="col">
                <img src="{{ asset('storage/' . $product->product_image) }}" alt="" class="img-fluid">
                <div class="img-des">
                    <h4>Description</h4>
                    <h5>{{ $product->title }}</h5>
                </div>
            </div>
            <div class="col">
                <div class="details-card">
                    <div class="title">
                        <h1 class="fs-3 fw-bold">{{ $product->title }} (Big Size)</h1>
                    </div>
                    <div class="price d-flex ">
                        <h4>Price: <span>TK {{$product->price}}</span></h4>
                        <h6 class="mx-2"> <sub> <span> TK <del>{{$product->price}}</del></sub> </span></h6>
                    </div>
                    <div class="discount_price">
                      <h4>Discount price: <span>TK{{$product->discount_price}}</span></h4>


                    </div>
                    <div class="category mt-2">
                        <h4>Category: <span c>{{$product->catagory}}</span></h4>

                    </div>
                    
                    <div class="status">
                        <h4>Status: <span class="text-success">In Stock</span> <sub><span>(100<sub>pcs</sub>)</span></sub></h4>
                    </div>
                    <div class="Quantity">
                        <h5>Quantity: <span>{{$product->quantity}}</span></h5>
                    </div>

                    <div class="btn-group mt-3">
                       <form action="{{ route('add_cart.page',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="number" value="1" min="1">
                        <input type="submit" value="Add to cart" class="btn btn-success">
                      
                      </form>

                        <div><a class="btn btn-outline-success mx-3" href="{{ route('cheackout.page') }}" target="_blank">BUY NOW</a></div>
                         
                    </div>

                    <div>
                        <div class="description mt-3" style="width: 70%;">
                        <p>{{$product->description}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



@include('common-section.Footer')