@extends('frondend.layouts.master')

@section('frontend_title', 'Category')

@section('frontend_content')
    {{-- @include('frondend.layouts.inc.breadcumb', ['pagename' => 'Shop']) --}}
    <!-- product-area start -->
    {{-- <section class="section new-arriavls">
        <h3 class="section-title">Featured Products</h3>
        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p10.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p10_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                                class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i>
                                        </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p2.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p2_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i
                                                class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p3.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p3_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p1.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p1_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p7.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p7_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->

            <div class="item item-carousel">
                <div class="products">
                    <div class="product">
                        <div class="product-image">
                            <div class="image">
                                <a href="detail.html">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p9.jpg" alt="">
                                    <img src="{{ asset('assets/frontend') }}/images/products/p9_hover.jpg" alt=""
                                        class="hover-image">
                                </a>

                            </div>
                            <!-- /.image -->

                            <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                            <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="description"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> <span
                                    class="price-before-discount">$ 800</span> </div>
                            <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                            <div class="action">
                                <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i
                                                class="fa fa-shopping-cart"></i>
                                        </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add
                                            to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html"
                                            title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i
                                                class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                                </ul>
                            </div>
                            <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                    </div>
                    <!-- /.product -->

                </div>
                <!-- /.products -->
            </div>
            <!-- /.item -->
        </div>
        <!-- /.home-owl-carousel -->
    </section> --}}
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- ============================================== CONTENT ============================================== -->

                <!-- ============================================== NEW PRODUCTS ============================================== -->
                <section class="section new-arriavls">
                    <h3 class="section-title">Search For "{{ $slug }}"
                    </h3>

                    <div class="row">
                        @foreach ($allproducts as $product)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="main-product-inner-wrapper text-center">
                                    <a href="{{ route('productdetails.page', $product->product_slug) }}">
                                        <img src="{{ asset('uploads/product') }}/{{ $product->product_image }}"
                                            alt="">
                                    </a>
                                    @if ($product->product_offer_price > 0)
                                        <h5 style="text-decoration: line-through;color: #b8b8b8">৳
                                            {{ $product->product_offer_price }}</h5>
                                    @endif
                                    <h3 class="font-weight-bold mb-0" style="color: #fca204">৳ {{ $product->product_price }}
                                    </h3>
                                    <h5 class="mb-0 prod_name"><a
                                            href="{{ route('productdetails.page', $product->product_slug) }}">{{ $product->product_name }}</a>
                                    </h5>
                                    <form action="{{ route('add-to.cart') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="product_slug" value="{{ $product->product_slug }}">
                                        <input type="hidden" name="order_qty" value="1" />
                                        <button class="btn btn-lg btn-success" type="submit"><i
                                                class="bi bi-cart-check-fill">
                                            </i>
                                            অর্ডার করুন</button>
                                    </form>
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
    </div>

    <!-- product-area end -->
@endsection
