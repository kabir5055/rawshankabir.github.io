<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('frontEndAsset') }}/pic/Rr.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/bootstrap.min.css">
    <!--icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEndAsset') }}/css/all.css">
    <!--slick css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEndAsset') }}/css/slick.css">
    <!--venobox css-->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/venobox.css">
    <!--headhesive css-->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/headhesive.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/animate.css">
    <!--animated_text css-->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/animated_text.css">
    <!--main css-->
    <link rel="stylesheet" href="{{ asset('frontEndAsset') }}/css/style.css">


    <title>@yield('title')</title>
</head>
<body>
<!--header start-->

@include('frontEnd.include.header')

<!--header end-->


<!--content start-->

@yield('content')

<!--content end-->


<!-- footer part html start -->

@include('frontEnd.include.footer')

<!-- footer part html end -->



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('frontEndAsset') }}/js/jquery-3.4.1.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/jquery-1.12.4.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/popper.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/bootstrap.min.js"></script>
<!--waypoints scripts -->
<script src="{{ asset('frontEndAsset') }}/js/waypoints.min.js"></script>
<!-- slick scripts -->
<script src="{{ asset('frontEndAsset') }}/js/slick.min.js"></script>
<!--headhesive scripts -->
<script src="{{ asset('frontEndAsset') }}/js/headhesive.js"></script>
<!--venobox scripts -->
<script src="{{ asset('frontEndAsset') }}/js/venobox.min.js"></script>
<!--isotope scripts -->
<script src="{{ asset('frontEndAsset') }}/js/isotope-docs.min.js"></script>

<!--counterup scripts -->
<script src="{{ asset('frontEndAsset') }}/js/jquery.counterup.min.js"></script>
<!-- particles scripts -->
<script src="{{ asset('frontEndAsset') }}/js/particles.min.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/app.js"></script>
<!--animated test scripts -->
<script src="{{ asset('frontEndAsset') }}/js/modernizr.js"></script>
<script src="{{ asset('frontEndAsset') }}/js/main.js"></script>
<!--wow scripts -->
<script src="{{ asset('frontEndAsset') }}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!--custom scripts -->
<script src="{{ asset('frontEndAsset') }}/js/custom.js"></script>

</body>
</html>

