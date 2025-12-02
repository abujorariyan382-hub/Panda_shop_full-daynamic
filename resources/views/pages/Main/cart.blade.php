@include('common-section.navbar')
<main class="page mt-5">
	<section class="shopping-cart dark">
		<div class="container">
			<div class="block-heading">
				<h2 class="text-center">Shopping Cart</h2>

			</div>
			<div class="content mt-3">
				<div class="row">
					<div class="col-md-12 col-lg-8">
						<table class="table">
							<thead>
								<tr>
									<th>S.N</th>
									<th>Image</th>
									<th>Name</th>
									<th>Price</th>
									<th>Quantity</th>
									<th>Total Price</th>

									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@php
									$i = 1;
								@endphp
								@foreach ($cart as $item)
									<tr>
										<td>{{ $i }}</td>
										<td>
											{{-- <img width="80" src="{{ asset('storage/'. $item['image']) }}" alt=""> --}}
										</td>
										<td>{{ $item['name'] }}</td>
										<td>{{ $item['price'] }}</td>
										<td>{{ $item['quantity'] }}</td>
										<td>{{ $item['price'] * $item['quantity'] }}</td>

										<td>

											<a href="{{ route('add-tocart-delete', $item['name']) }}"
												class="btn btn-danger">Delete</a>
										</td>

									</tr>

									@php
										$i++;
									@endphp
								@endforeach

							</tbody>
						</table>

						<a href="{{ route('clear-cart') }}" class="bg-danger text-white py-2 px-4">Clear Cart</a>
					</div>



					<div class="col-md-12 col-lg-4">



						<div class="summary">
							<h3>Summary</h3>
							<div class="summary-item"><span class="text">Subtotal</span><span
									class="price">{{ $item['price'] += $item['price'] }}</span></div>
							<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span>
							</div>
							<div class="summary-item"><span class="text">Shipping</span><span
									class="price">{{ $shipping = 150 }}</span></div>
							<div class="summary-item"><span class="text">Total</span><span
									class="price">{{ $item['price'] += $shipping }}</span></div>
							<a href="{{ route('cheackout.page') }}" class="text-decoration-none"> <button type="button"
									class="btn btn-primary btn-lg btn-block">Checkout</button> </a>
						</div>

					</div>



				</div>
			</div>
		</div>
	</section>
	<!-- footer start -->

	<div class="container text-center py-5">
		<h1>LET'S STAY IN TOUCH</h1>
		<p>Get updates on sales, specials and more</p>
		<a class="btn btn-danger text-uppercase fw-bold" href="#">Subscribe Now</a>
	</div>

	<footer>
		<div class="container text-center mt-5">
			<p>© Panda Commerce with Bootstrap 2025 All right reserved <span class="text-primary"> Abujor </span></p>
		</div>
	</footer>

	<!-- footer end -->

</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</body>

</html>