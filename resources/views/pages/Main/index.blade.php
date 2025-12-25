@include('common-section.navbar')

  <!-- hero start -->
   <div class="container">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @if (count($hero) > 0)
    @foreach ($hero as $hero)
      <div class="carousel-item active">
        
    <div class="row row row-cols-1 row-cols-md-2 align-items-center g-3 justify-content-between" style="background-color: #FEEAE9;">
        <div class="col">
          <div class="m-4" >
  <div class="card-body">
    <h1 class="card-title">{{$hero->title}}</h1>
    <p class="card-text">{{$hero->description}}</p>
    <h1 class="text-primary">${{$hero->price}}</h1>
    <a href="" class="btn btn-primary mt-5">BUY NOW</a>
    
  </div>
</div>

        </div>
        <div class="col">
          <a href="">
          <img class="img-fluid d-none d-md-block" src="{{ asset('storage/' . $hero->hero_image) }}" alt="" style="height: 460px;width: 431px;">
          </a>
        </div>
    </div>
    </div>
    @endforeach
      
    @endif
    
  
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<!-- hero end -->

<!-- card strt -->

<div class="container mt-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 justify-content-center g-5">
    <div class="col">
      <div class="card-items d-flex justify-content-between align-items-center" style="background-color: orange;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"> <H1 class="text-white "><a class="text-decoration-none" href="{{ route('watch.page') }}">Watch</H1></a></div>
       <a href="watch.html"> <div class="img"><img src="{{ asset('img/watch.png') }}" alt=""></div></a>
      </div>
    </div>
      <div class="col ">
      <div class="card-items d-flex justify-content-between align-items-center" style="background-color: #DB7093;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"><H1 class="text-white"><a class="text-decoration-none" href="{{ route('beg.page') }}"> Beg</H1></a></div>
     <a href="beg.html">  <div class="img"><img src="{{asset('img/bag.png')}}" alt=""></div> </a> 
      </div>
    </div>
      <div class="col">
      <div class="card-items d-flex  justify-content-between align-items-center" style="background-color: #87CEFA;width: 356px;height: 160px;padding: 5px;border-radius: 10px; ">
        <div class="titel"><H1 class="text-white"><a class="text-decoration-none" href="{{ route('shoe.page') }}">Shoes</H1></a> </div>
       <a href="shoe.html"> <div class="img"><img src="{{ asset('img/shoes.png') }}" alt=""></div> </a>
      </div>
    </div>
    
  </div>
</div>
 <!-- card end -->

 <!-- shoes start -->

 @if(!empty($shoes))
   <div class="container mt-5">
    <h1>Shoes</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">  
      @foreach ($shoes as $shoe)  
        {{--  {{ dd($shoe) }}  --}}

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
                <a class="btn btn-primary fw-bold" href="{{ route('add-to-cart', $shoe->id) }}">BUY NOW</a>
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
