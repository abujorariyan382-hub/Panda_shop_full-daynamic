@include('common-section.navbar')

<!-- cheackout page start -->

<div class="container main-aria mt-5">
    <div class="cheackout-box ">
        <div class="header">
            <h1 class="text-center">Checkout</h1>
            @include('alart.message')
        </div>

        <div class="your-address mt-5">
            <div class="row row-cols-md-2 ">
                <div class="cold-md-6">
                    <div class="header-youraddress">
                        <h2>Your Address</h2>
                    </div>
                    <form action="{{ route('your.address') }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <label for="full name">full name*</label>
                            <input type="text" name="full_name" id="full_name" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="number">number*</label>
                            <input type="text" name="number" id="number" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email*</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                            <label class="form-check-label" for="radioDefault1">
                                Insideof Dhaka 80 TK
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                            <label class="form-check-label" for="radioDefault2">
                                Out side of Dhaka 150 Tk
                            </label>
                        </div>

                        <div class="mt-3 col-md-12">
                            <label for="address">
                                <h3>Address</h3>
                            </label>
                            <textarea class="form-control" placeholder="Address" id="address" name="address"
                                style="height: 100px"></textarea>

                        </div>
                        <div class=" mt-3 col-md-12">
                            <label for="message">
                                <h3>Message</h3>
                            </label>
                            <textarea class="form-control" placeholder="Message" id="message" name="message"
                                style="height: 100px"></textarea>

                        </div>
                        <input type="submit" class="btn btn-danger mt-5">
                    </form>
                </div>
                <div class="cold-md-4">
                    <div class="your-card me-5 ">
                        <div class="header-your-cart">
                            <h3>Your Cart</h3>
                        </div>

                        <div class="your-cart-box ">
                            <div class="iteam m-3  ">
                                <table class="tabl">
                                    <thead>
                                        @php
                                            $i = 1;
                                            $sub_total = 0;
                                        @endphp

                                        @forelse ($cheackout as $key => $item)
                                            {{--  {{ dd( $cheackout) }}  --}}

                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    <img width="80" src="{{ asset('storage/' . $item['photo']) }}" alt="">
                                                </td>
                                                <td>{{ $item['name'] }}</td>
                                                <td>{{ $item['price'] }}</td>
                                                <td>x</td>
                                                
                                                <td>{{ $item['quantity'] }}</td>
                                                <td>{{ $item['price'] * $item['quantity'] }}</td>

                                                <td>

                                                    <a href="{{ route('payment.delete', $item['id']) }}" "><i class="
                                                        fa-solid fa-x"></i></a>
                                                </td>

                                            </tr>

                                            @php
                                                $i++;
                                                $sub_total += $item['price'] * $item['quantity'];
                                            @endphp
                                        @empty
                                            <tr>
                                                <td colspan="9" class="text-center">No items in checkout</td>
                                            </tr>
                                        @endforelse

                                    </thead>
                                    <tbody>






                                    </tbody>

                                </table>
                                <div class="col-md-12 col-lg-4">

                                    <div class="cheackout">
                                        <div class="sub d-flex ">
                                            <div>
                                                <h4>Subtotal: </h4>
                                            </div>
                                            <div>
                                                <h4 style="margin-left:150px">{{$sub_total }}</h4>
                                            </div>
                                        </div>
                                        <div class="shpping d-flex">
                                            <h4 class="">Shipping: </h4>
                                            <h4 style="margin-left:150px;">{{ $shipping = 150 }}</h4>
                                        </div>
                                        <div class="Total d-flex">
                                            <h4>Total:</h4>
                                            <h4 style="margin-left:180px;">{{ $sub_total + $shipping }}</h4>
                                        </div>

                                    </div>




                                </div>


                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cheackout page end -->



@include('common-section.Footer')