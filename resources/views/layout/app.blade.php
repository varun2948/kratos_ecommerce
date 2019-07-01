<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Varun </title>
        <!-- <h1> Header</h1> -->
        <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->

        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}"/>

        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/pe-icon-7-stroke.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.bxslider.css')}}">

        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

        <link href="{{asset('fonts/css2277.css?family=Open+Sans:300,400,600,600i,700,700i')}}" rel="stylesheet">

        <link href="{{asset('fonts/css1b12.css?family=Roboto:300,400,400i,500,500i,700')}}" rel="stylesheet">

        <style>
        .alert.alert-sucess {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        </style>
        @yield('css')
<!--
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    </head>
    <body class="index-opt-3">



    <div class="wrapper">

        <form id="block-search-mobile" method="get" class="block-search-mobile">
            <div class="form-content">
                <div class="control">
                    <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                    <input type="text" name="search" placeholder="Search" class="input-subscribe">
                    <button type="submit" class="btn search">
                        <span><i class="fa fa-search" aria-hidden="true"></i></span>
                    </button>
                </div>
            </div>
        </form>
    @yield('body')
    @include('layout.header')
    @yield('content')

    @include('layout.footer')
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>

    <script  src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

    <script  src="{{asset('js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{url('js/jquery-ui.min.js')}}"></script>

    <script type="text/javascript" src="{{url('js/owl.carousel.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.actual.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/chosen.jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.bxslider.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.sticky.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.elevateZoom.min.js')}}"></script>

    <script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox-media.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox-thumbs.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/function.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/Modernizr.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.plugin.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery.countdown.js')}}"></script>
 @yield('js')
    </body>
</html>
