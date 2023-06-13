<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>@yield('frontend_title')</title>

    @include('frondend.layouts.inc.style')
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    @include('frondend.layouts.inc.header')

    <!-- ============================================== HEADER : END ============================================== -->

    @yield('frontend_content')

    <!-- ============================================================= FOOTER ============================================================= -->
    @include('frondend.layouts.inc.footer')
    <!-- ============================================================= FOOTER : END============================================================= -->

    @include('frondend.layouts.inc.script')
</body>

</html>
