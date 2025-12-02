@include('common-section.navbar')
  <!-- beg start -->
   @if(!empty($bags))
     
   
     <div class="container mt-5">
  <h1>Beg</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    @foreach ($bags as $bag)
      <div class="col">
    <div class="card h-100">
       <a href="{{ route('product_details.page', $bag->id) }}">
      <img src="{{ asset('storage/' . $bag->product_image) }}" class="card-img-top" alt="...">
        </a>
      <div class="card-body">
        <h5 class="card-title">{{$bag->title}}</h5>
        <p class="card-text">{{$bag->description}}</p>
        <h5>${{$bag->price}}</h5>
         <div class="btn-grou d-flex justify-content-between align-items-center ">
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
        <a href="{{ route('add-to-cart', $bag->id) }}" class="btn btn-success">Add To Cart</a>
   
          </div>
      </div>
     
    </div>
  </div>
    @endforeach
  
 
  </div>
</div>
 </div>
 @endif
    <!-- beg end -->

 @include('common-section.Footer')