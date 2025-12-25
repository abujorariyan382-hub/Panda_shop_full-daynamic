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
                        <h4>Status: <span class="text-success">In Stock</span>
                            <sub><span>(100<sub>pcs</sub>)</span></sub>
                        </h4>
                    </div>
                    <div class="Quantity">
                        <h5>Quantity: <span>{{$product->quantity}}</span></h5>
                    </div>

                    <form action="{{ route('details-add-to-cart') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="wrap d-flex mb-3">
                            <div class="dec " id="dec">-</div>
                            <input type="text" name="quantity" id="quantity" value="1" class="quantity">
                            <div class="inc" id="inc">+</div>
                        </div>

                        <button type="submit" name="action" value="add_to_cart" class="btn btn-success">Add To
                            Cart</button>
                        <button type="submit" name="action" value="buy_now" class="btn btn-success">Buy Now</button>

                    </form>
                    {{-- <div class="mt-4">

                        <div class="wrap d-flex ">
                            <div class="dec " id="dec">-</div>
                            <div class="value" id="value">1</div>
                            <div class="inc" id="inc">+</div>
                        </div>
                    </div>

                    <div class="btn-group mt-3">
                        <div>
                            <a href="{{ route('add-to-cart', $product->id) }}" class="btn btn-success">Add To Cart</a>
                        </div>

                        <div>
                            <a class="btn btn-success mx-3" href="{{ route('payment', $product->id) }}">BUY NOW</a>
                        </div>

                    </div> --}}

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