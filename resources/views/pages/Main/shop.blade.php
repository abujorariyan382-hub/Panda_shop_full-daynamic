@include('common-section.navbar')


<!-- shoes start -->

 @if(!empty($shoes))
 <div class="container mt-5">
  <h1>Shoes</h1>
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">  
    @foreach ($shoes as  $shoe)      
    <div class="col">
    <div class="card h-100">
   <a href="{{ route('product_details.page', $shoe->id) }}">
       <img src="{{ asset('storage/' . $shoe->product_image) }}" class="card-img-top" alt="...">
       </a>
      <div class="card-body">
        <h5 class="card-title">{{$shoe->title}}</h5>
        <p class="card-text">{{$shoe->description}}</p>
        <h5>${{$shoe->price}}</h5>
         <div class="btn-grou d-flex justify-content-between align-items-center ">
        <a class="btn btn-primary fw-bold" href="#">BUY NOW</a>
        <a href="{{ route('add-to-cart', $shoe->id) }}" class="btn btn-success">Add To Cart</a>
   
          </div>
      </div>
     
    </div>
  </div>
 @endforeach
   </div>
 </div>
 @endif
  <!-- shoes end -->
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