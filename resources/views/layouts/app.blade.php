<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>{{ config('app.name', 'Alresalah Book Shop') }}</title>
        <link rel="shortcut icon" href="images/favicon.ico" />
        <link rel="stylesheet" href="{{ asset('css/shop/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shop/typography.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shop/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/shop/responsive.css')}}">
    </head>
    <body>
        <div id="loading">
            <div id="loading-center"></div>
        </div>
        <section class="sign-in-page">
            <div class="container p-0">
                <div class="row no-gutters height-self-center">
                    <div class="col-sm-12 align-self-center page-content rounded">
                        <div class="row m-0">  
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="/js/shop/jquery.min.js"></script>
        <script src="/js/shop/popper.min.js"></script>
        <script src="/js/shop/bootstrap.min.js"></script>
        <script src="/js/shop/jquery.appear.js"></script>
        <script src="/js/shop/countdown.min.js"></script>
        <script src="/js/shop/waypoints.min.js"></script>
        <script src="/js/shop/jquery.counterup.min.js"></script>
        <script src="/js/shop/wow.min.js"></script>
        <script src="/js/shop/slick.min.js"></script>
        <script src="/js/shop/select2.min.js"></script>
        <script src="/js/shop/jquery.magnific-popup.min.js"></script>
        <script src="/js/shop/core.js"></script>
        <script src="/js/shop/custom.js"></script> 
    </body>
</html>
