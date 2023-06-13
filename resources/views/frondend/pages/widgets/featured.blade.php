@php
    use App\Models\Category;
    $categories = Category::get();
    
    use App\Models\Product;
    $featured_products = Product::where('is_featured', 1)->get();
@endphp
<div class="row m-5">
    <section class="my-5">
        <div class="container m-5">
            <h4 class="categories-bar text-center">BROWSE PRODUCT CATEGORIES</h4>

            <div class="row">
                @foreach ($categories as $category)
                    <span class="badge badge-warning">
                        <a href="{{ route('category.products', $category->id) }}">
                            <h4>{{ $category->title }}</h4>
                        </a>
                    </span>
                @endforeach

            </div>
        </div>

    </section>
</div>


<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section new-arriavls">

    <h3 class="section-title">Featured Products <a href="{{ route('all.featured.products', 'featured') }}"
            class="btn btn-warning">Show All</a>
    </h3>

    <div class="row">

        @foreach ($featured_products as $featured_product)
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="main-product-inner-wrapper text-center">
                    <a href="{{ route('productdetails.page', $featured_product->product_slug) }}">

                        <img src="{{ asset('uploads/product') }}/{{ $featured_product->product_image }}" alt="product">
                    </a>
                    @if ($featured_product->product_offer_price > 0)
                        <h5 style="text-decoration: line-through;color: #b8b8b8">৳
                            {{ $featured_product->product_offer_price }}</h5>
                    @endif

                    <h3 class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $featured_product->product_price }}
                    </h3>
                    <h5 class="mb-0 prod_name"><a
                            href="{{ route('productdetails.page', $featured_product->product_slug) }}">{{ $featured_product->product_name }}</a>
                    </h5>
                    <form action="{{ route('add-to.cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_slug" value="{{ $featured_product->product_slug }}">
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
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
