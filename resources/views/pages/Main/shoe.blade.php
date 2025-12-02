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

@include('common-section.Footer')