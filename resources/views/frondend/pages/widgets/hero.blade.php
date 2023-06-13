@php
    use App\Models\Testimonial;
    $testimonials = Testimonial::where('is_active', 1)->get();
    
@endphp
{{-- @dd($testimonial) --}}
<div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        @foreach ($testimonials as $testimonial)
            <div class="item"
                style="background-image: url({{ asset('uploads/testimonial') }}/{{ $testimonial->client_image }});">
                <div class="container-fluid">
                    <div class="caption bg-color vertical-center text-left">
                        {{-- <div class="slider-header fadeInDown-1">Top Brands</div>
                        <div class="big-text fadeInDown-1"> New Collections </div>
                        <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit.</span> </div>
                        <div class="button-holder fadeInDown-3"> <a href="index6c11.html?page=single-product"
                                class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop
                                Now</a> </div> --}}
                    </div>
                    <!-- /.caption -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.item -->
        @endforeach



    </div>
    <!-- /.owl-carousel -->
</div>
