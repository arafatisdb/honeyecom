@extends('frondend.layouts.master')

@section('frontend_title', 'Home')

@section('frontend_content')
    <div class="body-content outer-top-vs" id="top-banner-and-menu">
        <div class="container">

            <div class="row">
                <div class="col-12">

                    @include('frondend.pages.widgets.hero')

                </div>
            </div>

            <div class="row">

                <div class="col">
                    <!-- ============================================== CONTENT ============================================== -->

                    <!-- ============================================== FEATURED PRODUCTS ============================================== -->
                    @include('frondend.pages.widgets.featured')
                    @include('frondend.pages.widgets.new')
                    <!-- /.section -->
                    <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->


                    <!-- ============================================== CONTENT : END ============================================== -->
                </div>
                <!-- /.row -->

            </div>
        </div>
        <!-- /.container -->
    </div>
@endsection
