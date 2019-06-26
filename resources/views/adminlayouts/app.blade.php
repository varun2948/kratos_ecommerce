<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>

    <link rel="shortcut icon" href="images/favicon.png">
    <title>BucketAdmin</title>
    <!--Core CSS -->
    <link href="{{asset('css/dashboard_css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('js/dashboard_js/jquery-ui/jquery-ui-1.10.1.custom.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard_css/bootstrap-reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('js/dashboard_js/jvector-map/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard_css/clndr.css')}}" rel="stylesheet">
    <!--clock css-->
    <link href="{{asset('js/dashboard_js/css3clock/css/style.css')}}" rel="stylesheet">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('js/dashboard_js/morris-chart/morris.css')}}">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard_css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/dashboard_css/style-responsive.css')}}" rel="stylesheet"/>

    @yield('css')
</head>
<body>
@yield('body')
@include('adminlayouts.header')
@include('adminlayouts.sidebar')
@yield('content')

<script src="{{asset('js/dashboard_js/jquery.js')}}"></script>
<script src="{{asset('js/dashboard_js/jquery-ui/jquery-ui-1.10.1.custom.min.js')}}"></script>
<script src="{{asset('js/dashboard_js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/dashboard_js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/dashboard_js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('js/dashboard_js/clndr.js')}}"></script>
<script src="{{asset('js/dashboard_js/moment-2.2.1.js')}}"></script>
<script src="{{asset('js/dashboard_js/evnt.calendar.init.js')}}"></script>

<script src="{{asset('js/dashboard_js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('js/dashboard_js/jquery.nicescroll.js')}}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<script src="{{asset('js/dashboard_js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('js/dashboard_js/scripts.js')}}"></script>
</body>
</html>
