@extends('frondend.layouts.master')

@section('frontend_title', 'Checkout Page')
@push('frontend_style')
@endpush
@section('frontend_content')

    <!-- checkout-area start -->
    {{-- <div class="checkout-area ptb-100">
        <div class="container">
            <form action="{{ route('customar.placeorder') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-form form-style">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p>Full Name *</p>
                                    <input type="text" name="fullname">
                                    @error('fullname')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-12">
                                    <p>Email Address *</p>
                                    <input type="email" name="email">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-12">
                                    <p>Phone No. *</p>
                                    <input type="text" name="phone">
                                    @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-12 mb-3">
                                    <p>Selete a District *</p>
                                    <select name="district_id" id="district_id"
                                        class="form-control js-example-basic-single">
                                        <option value="" disabled selected>Select a District</option>
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('district_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 col-12 mb-3">
                                    <p>Selete a Upazila*</p>
                                    <select name="upazila_id" id="upazila_id" class="form-control js-example-basic-single">
                                        <option value="" disabled selected>Seletct a Upazila</option>
                                    </select>
                                    @error('upazila_id')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <p>Your Address *</p>
                                    <input type="text" name="address">
                                    @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <p>Order Notes </p>
                                    <textarea name="note" placeholder="Notes about Your Order, e.g.Special Note for Delivery"></textarea>
                                    @error('note')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order-area">
                            <h3>Your Order</h3>
                            <ul class="total-cost">
                                @foreach ($carts as $item)
                                    <li>{{ $item->name }} X {{ $item->qty }} <span class="pull-right">$
                                            {{ $item->price * $item->qty }}</span></li>
                                @endforeach

                                @if (Session::has('coupon'))
                                    <li>Discount <span class="pull-right"><strong> (-) $
                                                {{ Session::get('coupon')['discount_amount'] }}</strong></span></li>
                                    <li>Total<span class="pull-right">$ {{ Session::get('coupon')['balance'] }} <del
                                                class="text-danger">$
                                                {{ Session::get('coupon')['cart_total'] }}</del></span></li>
                                @else
                                    <li>Total<span class="pull-right">$ {{ $total }}</span></li>
                                    <li>Subtotal <span class="pull-right"><strong>$ {{ $total }}</strong></span>
                                    </li>
                                @endif
                            </ul>
                            <ul class="payment-method">
                                <li>
                                    <input id="delivery" type="checkbox">
                                    <label for="delivery">Cash on Delivery</label>
                                </li>
                            </ul>
                            <button type="submit">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> --}}
    <section>
        <div class="cart-section">
            <div class="container m-t-20">
                <div class="row">
                    <div class="col-md-5 col-12 mb-md-0 mb-4">
                        <div class="card" style="border: none">
                            <div class="card-body p-2" style="font-size: 14px;">
                                <p class="text-center"><b>অর্ডারটি কনফার্ম করতে আপনার নাম, ঠিকানা, মোবাইল নাম্বার, লিখে
                                        <span class="text-danger">অর্ডার কনফার্ম করুন</span> বাটনে ক্লিক করুন</b></p>
                                <form action="{{ route('customar.placeorder') }}" method="POST" id="checkout_form"
                                    class="checkout_form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="customer_name">আপনার নাম </label>
                                        <input type="text" onkeyup="saveValue(this);" class="form-control" id="name"
                                            name="name" placeholder="আপনার নাম লিখুন" required="">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="customer_address">আপনার ঠিকানা</label>
                                        <input type="text" onkeyup="saveValue(this);" class="form-control" id="address"
                                            name="address" placeholder="আপনার ঠিকানা লিখুন" required="">

                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="customer_phone">আপনার মোবাইল</label>
                                        <input type="text" onkeyup="saveValue(this);" class="form-control" id="phone"
                                            name="phone" placeholder="আপনার মোবাইল লিখুন" required="">

                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="shipping_method">আপনার এরিয়া সিলেক্ট করুন</label>
                                        <select name="shipping_method" id="shipping_method" class="form-control"
                                            required="">

                                            <option value="out_dhaka">ঢাকার বাইরে </option>

                                            <option value="in_dhaka">ঢাকার ভিতরে </option>
                                        </select>

                                        @error('shipping_method')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="sub_total" value="1890">
                                    <button type="submit" class="btn btn-success w-100 mb-2" style="height: 50px"
                                        id="conf_order_btn">অর্ডার কনফার্ম করুন</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7 col-12 col-xs-12>
                        <div class=" card"=""
                        style="border: 1px solid #e9e9e9">
                        <h3 class="font-weight-bold card-header"><b> &nbsp; &nbsp; আপনার অর্ডার </b></h3>
                        <div class="card-body p-2" id="order_info_table">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($data['carts'] as $cart)
                                        {{-- @foreach ($items as $cart) --}}
                                        {{-- @dd($cart) --}}
                                        <tr>
                                            <td>
                                                <a href="{{ route('removecartitem', $cart->rowId) }}"><i
                                                        class="fa fa-trash text-danger"></i></a>
                                            </td>
                                            <td class="text-left">

                                                <a style="font-size: 15px"
                                                    href="{{ route('productdetails.page', Str::slug($cart->name)) }}">
                                                    {{ $cart->name }} </a>
                                            </td>
                                            <td>
                                                <h4> {{ $cart->price }} </h4>
                                            </td>

                                            <td width="15%" class="cart_qty arrows">
                                                <form id="decrement" action="{{ route('decrement') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="d_product_id" value="{{ $cart->rowId }}">
                                                    <input type="hidden" name="d_qty" value="{{ $cart->qty }}">
                                                    <button type="submit" class="b-none">
                                                        <i class="fa fa-minus qty_minus decrement" data-id="7001"></i>
                                                    </button>
                                                </form>

                                                <input type="text" name="order_qty" id="qty" min="1"
                                                    class="qty7001 order_qty" data-id="7001" value="{{ $cart->qty }}"
                                                    readonly="" style="text-align: center; font-weight: bold;">
                                                <form id="decrement" action="{{ route('increment') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="d_product_id"
                                                        value="{{ $cart->rowId }}">
                                                    <input type="hidden" name="d_qty" value="{{ $cart->qty }}">
                                                    <button type="submit" class="b-none">
                                                        <i class="fa fa-plus qty_plus increment" data-id="7001"></i>
                                                    </button>

                                                </form>
                                            </td>

                                            <td class="c_price7001">
                                                <h4> {{ $cart->qty * $cart->price }} </h4>
                                            </td>
                                        </tr>
                                        {{-- @endforeach --}}
                                    @endforeach



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-right pr-2">
                                            <h4>Sub Total:</h4>
                                        </th>
                                        <td><span id="sub_total">
                                                <h4> {{ round($data['subtotal']) }} </h4>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4" class="text-right pr-2">
                                            <h4>Shiping Cost:</h4>
                                        </th>
                                        <td><span id="cart_shipping_cost">
                                                <h5 class="shippingCharge">{{ $shipping_charge->out_side_dhaka }} </h5>
                                            </span></td>
                                    </tr>
                                    <tr>
                                        <th colspan="4" class="text-right pr-2">
                                            <h4><b>Total:</b></h4>
                                        </th>
                                        <td><span id="net_total">
                                                <h4><b class="net_total">
                                                        {{ round($data['total']) + $shipping_charge->out_side_dhaka }} </b>
                                                </h4>
                                            </span></td>
                                    </tr>


                                </tfoot>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- checkout-area end -->

@endsection
@push('frontend_script')
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('#shipping_method').change(function() {
                let shippingCharge = '{!! $shipping_charge !!}';
                shippingCharge = JSON.parse(shippingCharge);
                let shipping_method = $('#shipping_method').val();
                if (shipping_method == 'in_dhaka') {
                    let shiping_charg = '{{ $shipping_charge->in_side_dhaka }}';
                    $('#cart_shipping_cost').html('<h5 class="shippingCharge"> ' + shiping_charg + '</h5>');
                    let total_amount = '{{ $data['total'] }}'
                    $('.net_total').text(parseInt(total_amount) + parseInt(shiping_charg));
                }
                if (shipping_method == 'out_dhaka') {
                    let shiping_charg = '{{ $shipping_charge->out_side_dhaka }}';
                    $('#cart_shipping_cost').html('<h5 class="shippingCharge"> ' + shiping_charg + '</h5>');
                    let total_amount = '{{ $data['total'] }}'
                    $('.net_total').text(parseInt(total_amount) + parseInt(shiping_charg));
                }
            });

            $('.b-none').on('click', function() {
                preventDefault();
                $('.')

            });
        });
    </script>
@endpush
