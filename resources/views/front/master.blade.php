<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:02 GMT -->
<head>
    <meta charset="utf-8">
    <title>BIZTROX @yield('title') </title>


    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  @include('front.includes.assets.css')

</head>

<body>


<!-- preloader start -->
<div class="preloader">
    <img src="{{asset('/')}}front/images/preloader.gif" alt="preloader">
</div>
<!-- preloader end -->

<!-- navigation -->
<header>
    <!-- top header -->
    @include('front.includes.top-header')
    <!-- nav bar -->
    @include('front.includes.navigation')
</header>
@yield('body')
<!-- /footer -->
@include('front.includes.footer')
@include('front.includes.assets.js')
</body>

<!-- Mirrored from demo.themefisher.com/biztrox/homepage-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Mar 2022 08:07:05 GMT -->
</html>
