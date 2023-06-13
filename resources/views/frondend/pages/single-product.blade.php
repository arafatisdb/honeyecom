@extends('frondend.layouts.master')

@section('frontend_title', 'Product Details')
@section('frontend_content')
    {{-- @include('frondend.layouts.inc.breadcumb',['pagename'=>"$product->product_name"]) --}}

    <!-- single-product-area start-->
    {{-- <div class="single-product-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-single-img">
                        <div class="product-active owl-carousel">
                            <div class="item">
                                <img src="{{ asset('uploads/product') }}/{{ $product->product_image }}" alt="">
                            </div>
                            @foreach ($product->productImages as $image)
                                <div class="item">
                                    <img src="{{ asset('uploads/product') }}/{{ $image->multiple_product_image }}"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="product-thumbnil-active owl-carousel">
                            <div class="item">
                                <img src="{{ asset('uploads/product') }}/{{ $product->product_image }}" alt="">
                            </div>
                            @foreach ($product->productImages as $image)
                                <div class="item">
                                    <img src="{{ asset('uploads/product') }}/{{ $image->multiple_product_image }}"
                                        alt="">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-single-content">
                        <h3>{{ $product->product_name }}</h3>
                        <div class="rating-wrap fix">
                            <span class="pull-left">${{ $product->product_price }}</span>
                            <ul class="rating pull-right">
                                @for ($i = 0; $i < $product->product_rating; $i++)
                                    <li><i class="fa fa-star"></i></li>
                                @endfor
                                <li>(0{{ $product->product_rating }} Customar Review)</li>
                            </ul>
                        </div>
                        <p>{{ $product->product_short_description }}</p>
                        <ul class="input-style">
                            <form action="{{ route('add-to.cart') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_slug" value="{{ $product->product_slug }}">
                                <li class="quantity cart-plus-minus">
                                    <input type="text" name="order_qty" value="1" />
                                </li>
                                <li>
                                    <button class="btn btn-danger" type="submit">Add to Cart</button>
                                </li>
                            </form>
                        </ul>
                        <ul class="cetagory">
                            <li>Categories:</li>
                            <li><a href="{{ route('shop.page') }}">{{ $product->category->title }}</a></li>
                        </ul>
                        <ul class="socil-icon">
                            <li>Share :</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12">
                    <div class="single-product-menu">
                        <ul class="nav">
                            <li><a class="active" data-toggle="tab" href="#description">Description</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <div class="description-wrap">
                                <p>{{ $product->product_long_description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- single-product-area end-->
    <!-- related-product-area start -->
    {{-- <div class="featured-product-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-left">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($relatedProducts as $relatedProduct)
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="featured-product-wrap">
                        <div class="featured-product-img">
                            <img src="{{asset('uploads/product')}}/{{$relatedProduct->product_image}}" alt="">
                        </div>
                        <div class="featured-product-content">
                            <div class="row">
                                <div class="col-7">
                                    <h3><a href="{{route('productdetails.page',$relatedProduct->product_slug)}}">{{$relatedProduct->product_name}}</a></h3>
                                    <p>${{$relatedProduct->product_price}}</p>
                                </div>
                                <div class="col-5 text-right">
                                    <ul>
                                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                                        <li><a href="cart.html"><i class="fa fa-heart"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- related-product-area end -->

    <div class="body-content outer-top-xs">
        <div class="container">
            <div class="row single-product">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="detail-block">
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">

                                    <div id="owl-single-product" class="owl-carousel owl-theme"
                                        style="opacity: 1; display: block;">
                                        <div class="owl-wrapper-outer">
                                            <div class="owl-wrapper" style="width: 6768px; left: 0px; display: block;">
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide1">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="{{ asset('uploads/product') }}/{{ $product->product_image }}">
                                                            <img class="img-responsive" alt=""
                                                                src="{{ asset('uploads/product') }}/{{ $product->product_image }}">
                                                        </a>
                                                    </div>
                                                </div>
                                                {{-- <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide2">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="{{ asset('assets/frontend') }}/images/products/p2.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="{{ asset('assets/frontend') }}/images/products/p2.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide3">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p3.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p3.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide4">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p4.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p4.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide5">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p5.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p5.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide6">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p6.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p6.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide7">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p7.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p7.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide8">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p8.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p8.jpg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="owl-item" style="width: 376px;">
                                                    <div class="single-product-gallery-item" id="slide9">
                                                        <a data-lightbox="image-1" data-title="Gallery"
                                                            href="assets/images/products/p9.jpg">
                                                            <img class="img-responsive" alt=""
                                                                src="assets/images/products/p9.jpg">
                                                        </a>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div><!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        <!-- /.single-product-gallery-item -->

                                        {{-- <div class="owl-controls clickable">
                                            <div class="owl-pagination">
                                                <div class="owl-page active"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                                <div class="owl-page"><span class=""></span></div>
                                            </div>
                                        </div> --}}
                                    </div><!-- /.single-product-slider -->



                                </div><!-- /.single-product-gallery -->
                            </div><!-- /.gallery-holder -->
                            <div class="col-sm-12 col-md-8 col-lg-8 product-info-block">
                                <div class="product-info">
                                    <h1 class="name">{{ $product->product_name }}</h1>


                                    <div class="price-container info-container m-t-30">
                                        <div class="row">


                                            <div class="col-sm-6 col-xs-6">
                                                <div class="price-box">
                                                    <span class="price">৳ {{ $product->product_price }}</span>
                                                    @if ($product->product_offer_price > 0)
                                                        {{-- < style="text-decoration: line-through;color: #b8b8b8">৳ --}}
                                                        <span class="price-strike">৳
                                                            {{ $product->product_offer_price }}</span>
                                                    @endif
                                                </div>
                                            </div>


                                        </div><!-- /.row -->
                                    </div><!-- /.price-container -->

                                    <div class="quantity-container info-container">
                                        <div class="row">

                                            <div class="qty">
                                                <span class="label">পরিমান :</span>
                                            </div>
                                            <form action="{{ route('add-to.cart') }}" method="post" class="inline">
                                                @csrf

                                                <div class="qty-count">
                                                    <div class="cart-quantity">
                                                        <div class="quant-input">
                                                            <div class="arrows">
                                                                <div id="increment" class="arrow plus gradient"><span
                                                                        class="ir"><i
                                                                            class="icon fa fa-sort-asc"></i></span></div>
                                                                <div id="decrement" class="arrow minus gradient"><span
                                                                        class="ir"><i
                                                                            class="icon fa fa-sort-desc"></i></span></div>
                                                            </div>
                                                            <input name="order_qty" type="text" value="1">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="add-btn">

                                                    <input type="hidden" name="product_slug"
                                                        value="{{ $product->product_slug }}">
                                                    <button class="btn btn-lg btn-success" type="submit"><i
                                                            class="bi bi-cart-check-fill">
                                                        </i>
                                                        অর্ডার করুন</button>
                                            </form>

                                            <form action="{{ route('add-to.cart') }}" method="post" class="inline">
                                                @csrf
                                                <input name="order_qty" type="hidden" value="1">
                                                <input type="hidden" name="product_slug"
                                                    value="{{ $product->product_slug }}">

                                                <button type="submit" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart inner-right-vs"></i>কার্টে রাখুন</button>
                                            </form>

                                            <a href="#" class="btn btn-info btn-lg"><i class="bi bi-telephone"></i>
                                                {{ $product->phone }}</a>
                                        </div>

                                    </div><!-- /.row -->

                                    <div class="row">

                                        <div class="container">

                                            <table class="table" style="color: #08c !important; font-size: 15px;">
                                                <tbody>
                                                    <tr>
                                                        <td style="padding-left: 0; border-bottom: 1px solid #ddd;">
                                                            ঢাকার বাইরে ডেলিভারি খরচ
                                                        </td>
                                                        <td style="border-bottom: 1px solid #ddd;">
                                                            <h4>৳{{ $shipping_charge->out_side_dhaka }}</h4>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding-left: 0; border-bottom: 1px solid #ddd;">
                                                            ঢাকার ভিতরে ডেলিভারি খরচ
                                                        </td>
                                                        <td style="border-bottom: 1px solid #ddd;">
                                                            <h4>৳{{ $shipping_charge->in_side_dhaka }}</h4>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div><!-- /.quantity-container -->

                            </div><!-- /.product-info -->
                        </div><!-- /.col-sm-7 -->
                    </div><!-- /.row -->
                </div>

                <div class="product-tabs inner-bottom-xs">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                            </ul><!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-sm-12 col-md-9 col-lg-9">

                            <div class="tab-content">

                                <div id="description" class="tab-pane in active">
                                    <div class="product-tab">
                                        <p class="text">{{ $product->product_long_description }}</p>
                                    </div>
                                </div><!-- /.tab-pane -->



                            </div><!-- /.tab-content -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.product-tabs -->

                <!-- ============================================== RELATED PRODUCTS ============================================== -->

                <section class="section new-arriavls">
                    <h3 class="section-title">Related Products
                    </h3>

                    <div class="row">
                        @foreach ($relatedProducts as $relatedProduct)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="main-product-inner-wrapper text-center">
                                    <a href="{{ route('productdetails.page', $relatedProduct->product_slug) }}">
                                        <img src="{{ asset('uploads/product') }}/{{ $relatedProduct->product_image }}"
                                            alt="">
                                    </a>
                                    <h5 style="text-decoration: line-through;color: #b8b8b8">৳
                                        {{ $relatedProduct->product_offer_price }}</h5>
                                    <h3 class="font-weight-bold mb-0" style="color: #fca204">৳
                                        {{ $relatedProduct->product_price }}</h3>
                                    <h5 class="mb-0 prod_name"><a
                                            href="{{ route('productdetails.page', $relatedProduct->product_slug) }}">{{ $relatedProduct->product_name }}</a>
                                    </h5>
                                    <button type="submit" class="btn btn-lg btn-success"><i
                                            class="bi bi-cart-check-fill">
                                        </i> অর্ডার করুন</button>

                                </div>
                            </div>
                        @endforeach

                    </div>

                </section><!-- /.section -->
                <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

            </div><!-- /.col -->
            <div class="clearfix"></div>
        </div><!-- /.row -->

        <!-- /.container -->
    </div><!-- /.body-content -->



@endsection
