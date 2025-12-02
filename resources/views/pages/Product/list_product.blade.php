@extends('layout.layout')

@section('content')
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List of product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                            <li class="breadcrumb-item active">list of product</li>
                        </ol>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Catagory</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Discount_Price</th>
                                    <th scope="col">Product_image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($product)>0)
                                @foreach ($product as $product)
                                    <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->catagory}}</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>Tk{{$product->price}}</td>
                                    <td>TK{{$product->discount_price}}</td>
                                    <td><img src="{{ asset('storage/' . $product->product_image) }}" height="100vh"></td>
                                    <td>
                                        <div class="row d-flex gap-5">
                                            <div class="col-sm-2">
                                             <a class="btn btn-primary" href="{{ route('edit.product',$product->id) }}">Edit</a>
                                              </div>
                                              <div class="col-sm-2">
                                                   <form action="{{ route('delete.product.page',$product->id) }}" method="POST">
                                                   @csrf
                                                  @method('delete')
                                                   <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                     </form>
                                                       </div>
                                                         </div>
                                    </td>
                                    
                                </tr>
                                @endforeach
                                    
                                @endif
                                
                            </tbody>


                        </table>
                       
                    </div>
                </main>
               
@endsection
             
             
             
                 