<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Panda</title>
</head>

<body>

  @php
    $cart = session()->get('cart', []);
    $byenow = session()->get('byenow', []);

   @endphp
  <!-- nav start -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container">
      <a class="navbar-brand" href="{{ route('index.page') }}"><img src="{{ asset('img/logo.png') }}" alt=""
          style="width: 150px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('index.page') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shoe.page') }}">Shoes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('beg.page') }}">Beg</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('watch.page') }}">Watch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('shop.page') }}">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.page') }}">Contact Us</a>
          </li>

        </ul>

        <form class="d-flex " role="search">
          <a href="{{ route('weitch.page') }} " class="me-3 fs-4">
            <i class="fa-solid fa-heart " style="color: black;" id=></i>
          </a>
          <a href="{{ route('cart.page') }}" class="me-2 fs-4 position-relative" style="text-decoration: none">
            <i class="fa-solid fa-cart-shopping" style="color: black;"></i>
            <span class=" text-white btn btn-danger mb-3 "
              style="width: 20px; height: 20px; font-size: 10px; text-decoration:  none; padding: 5px;">{{ count($cart) ?? 0 }}</span>
          </a>
          <a class="btn btn-outline-success" href="{{ route('register') }}">Rejester</a>
          <a class="btn btn-outline-success mx-2" href="{{ route('login') }}">Login</a>
        </form>
      </div>
    </div>
  </nav>
  <!-- nav end -->