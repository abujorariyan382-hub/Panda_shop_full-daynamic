@include('common-section.navbar')
<!-- watch start -->
@if (!empty($watchs))
   <div class="container mt-5">
  <h1>Watch</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    
      @foreach ($watchs as $watch)
        <div class="col">
    <div class="card h-100">
      <a href="{{ route('product_details.page', $watch->id) }}">
      <img src="{{ asset('storage/' . $watch->product_image) }}" class="card-img-top" alt="..." style="width: 414px; height:275px;">
        </a>
      <div class="card-body">
        <h5 class="card-title">{{$watch->title}}</h5>
        <p class="card-text">{{$watch->description}}</p>
        <h5>${{$watch->price}}</h5>
        <div class="btn-grou d-flex justify-content-between align-items-center ">
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
        <a href="{{ route('add-to-cart', $watch->id) }}" class="btn btn-success">Add To Cart</a>
   
          </div>
      </div>
     
    </div>
  </div>
      @endforeach
    
  
 
</div>
 </div>
 @endif
<!-- watch end -->
@include('common-section.Footer')