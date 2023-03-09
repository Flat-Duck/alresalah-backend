<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>{{ config('app.name', 'Alresalah BookShop') }}</title>
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="{{ asset('css/shop/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/shop/typography.css') }}">
      <link rel="stylesheet" href="{{ asset('css/shop/style.css') }}">      
      <link rel="stylesheet" href="{{ asset('css/shop/responsive.css')}}">      
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <div id="loading">
         <div id="loading-center"></div>
      </div>
      <div class="wrapper">    
         
         @include('shop.partials.nav')
         
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  @yield('content')
               </div>
            </div>
         </div>
      </div>
      
      @include('shop.partials.footer')
      
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
      {{--<script src="js/shop/owl.carousel.min.js"></script>
      <script src="js/shop/smooth-scrollbar.js"></script>
      <script src="js/shop/lottie.js"></script> --}}
      
      {{-- <script src="js/shop/animated.js"></script>
      <script src="js/shop/kelly.js"></script>
      <script src="js/shop/maps.js"></script>
      <script src="js/shop/worldLow.js"></script>
      <script src="js/shop/style-customizer.js"></script>  --}}

      {{-- <script src="js/shop/jquery.min.js"></script>
      <script src="js/shop/popper.min.js"></script>
      <script src="js/shop/bootstrap.min.js"></script>
      <script src="js/shop/jquery.appear.js"></script>
      <script src="js/shop/countdown.min.js"></script>
      <script src="js/shop/waypoints.min.js"></script>
      <script src="js/shop/jquery.counterup.min.js"></script>
      <script src="js/shop/wow.min.js"></script>
      <script src="js/shop/apexcharts.js"></script>
      <script src="js/shop/slick.min.js"></script>
      <script src="js/shop/select2.min.js"></script>
      <script src="js/shop/owl.carousel.min.js"></script>
      <script src="js/shop/jquery.magnific-popup.min.js"></script>
      <script src="js/shop/smooth-scrollbar.js"></script>
      <script src="js/shop/lottie.js"></script>
      <script src="js/shop/core.js"></script>
      <script src="js/shop/charts.js"></script>
      <script src="js/shop/animated.js"></script>
      <script src="js/shop/kelly.js"></script>
      <script src="js/shop/maps.js"></script>
      <script src="js/shop/worldLow.js"></script>
      <script src="js/shop/style-customizer.js"></script>
      <script src="js/shop/chart-custom.js"></script>
      <script src="js/shop/custom.js"></script> --}}
   </body>
</html>