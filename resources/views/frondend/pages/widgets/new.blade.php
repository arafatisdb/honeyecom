@php
    use App\Models\Product;
    $products = Product::latest('id')->get();
@endphp

<div class="row">
    <div class="col">

        <!-- ============================================== CONTENT ============================================== -->

        <!-- ============================================== NEW PRODUCTS ============================================== -->
        <section class="section new-arriavls">
            <h3 class="section-title">New Products
            </h3>

            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="main-product-inner-wrapper text-center">
                            <a href="{{ route('productdetails.page', $product->product_slug) }}">
                                <img src="{{ asset('uploads/product') }}/{{ $product->product_image }}" alt="product">
                            </a>
                            @if ($product->product_offer_price > 0)
                                <h5 style="text-decoration: line-through;color: #b8b8b8">৳
                                    {{ $product->product_offer_price }}</h5>
                            @endif

                            <h3 class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product->product_price }}
                            </h3>
                            <h5 class="mb-0 prod_name">
                                <a
                                    href="{{ route('productdetails.page', $product->id) }}">{{ $product->product_name }}</a>
                            </h5>
                            <form action="{{ route('add-to.cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_slug" value="{{ $product->product_slug }}">
                                <input type="hidden" name="order_qty" value="1" />
                                <button class="btn btn-lg btn-success" type="submit"><i class="bi bi-cart-check-fill">
                                    </i>
                                    অর্ডার করুন</button>
                            </form>
                            {{-- <button type="submit" class="btn btn-lg btn-success"><i class="bi bi-cart-check-fill"> </i>
                                অর্ডার করুন</button> --}}
                        </div>
                    </div>
                @endforeach

            </div>

        </section>
        <!-- /.section -->
        <!-- ============================================== NEW PRODUCTS : END ============================================== -->


        <!-- ============================================== CONTENT : END ============================================== -->

        <!-- /.row -->



    </div>
</div>
