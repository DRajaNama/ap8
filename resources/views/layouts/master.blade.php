<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Road Transport</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="{{asset('css/front/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('css/front/all.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/front/animate.css')}}" type="text/css" media="all">
<link rel="stylesheet" href="{{asset('css/front/thumbslider.css')}}" type="text/css" media="all">
<link rel="stylesheet" type="text/css" media="all" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<link href="{{asset('css/front/style.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/front/responsive.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('js/front/jquery-2.2.3.min.js')}}"></script>
@yield('per_page_style')
</head>
<body>
        <!--header-->
    @include('partials.front.header')
    <!--header-->
    @yield('content')

<!--footer-->
@include('partials.front.footer')
<!--footer-->
<div id="back-top"><a href="#top"><img src="{{asset('img/html-images/back-to-top.png')}}" alt="top"></a></div>
<script src="{{asset('js/front/bootstrap.bundle.js')}}"></script>
<script src="{{asset('js/front/owl.carousel-min.js')}}"></script>
<script src="{{asset('js/front/viewportchecker.js')}}"></script>
<script src="{{asset('js/front/jquery.waypoints.js')}}"></script>
<script src="{{asset('js/front/jquery.rcounterup.js')}}"></script>
<script src="{{asset('js/front/active.js')}}"></script>
<script src="{{asset('js/front/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/front/custom.js')}}"></script>
@yield('per_page_script')
</body>
</html>
