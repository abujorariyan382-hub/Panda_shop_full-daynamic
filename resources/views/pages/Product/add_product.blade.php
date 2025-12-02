@extends('layout.layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>

                        <form action="{{ route('store.product.page') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div>
                                        <label for="title">Title</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>
                                    <div>
                                        <label for="description">Description</label>
                                        <input type="text" name="description" id="description" class="form-control">
                                    </div>
                                    <div class="input-group mt-3">
                                        <label for="inputGroupSelect02" class="input-group-text">Catagory</label>
                                        <select name="catagory"class="form-select" id="inputGroupSelect02">
                                            @if (count($catagory)>0)
                                            @foreach ($catagory as $catagory)
                                                <option value="{{$catagory->add_catagory}}" selected>{{$catagory->add_catagory}}</option>
                                            @endforeach
                                                
                                            @endif
                                            
                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-4">
                                    <div>
                                        <label for="quantity">Quantity</label>
                                        <input type="text" name="quantity" id="quantity" class="form-control">
                                    </div>
                                    <div>
                                        <label for="price">Price</label>
                                        <input type="text" name="price" id="price" class="form-control">
                                    </div>
                                    <div>
                                        <label for="discount_price">Discount Price</label>
                                        <input type="text" name="discount_price" id="discount_price" class="form-control">
                                    </div>

                                </div>
                                <div class="col-md-3">
                                     <div>
                                        <h3>Product image</h3>
                                         <img style="height: 30vh" src="{{ asset('img/shoe-1.png') }}" class="img-thumbnail" id="prevImage" >
                                    <input  class="mt-3" type="file" name="product_image" oninput="prevImage.src=window.URL.createObjectURL(this.files[0])">
                                    </div>

                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary text-center mt-5" style="display: block; margin:0px auto;">
                        
                        </form>


                       
                    </div>
                </main>
               
@endsection
            
             
                 