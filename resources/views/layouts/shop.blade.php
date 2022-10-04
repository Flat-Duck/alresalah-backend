<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>sss - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <link rel="shortcut icon" href="images/favicon.ico" />
      <link rel="stylesheet" href="css/shop/bootstrap.min.css">
      <link rel="stylesheet" href="css/shop/typography.css">
      <link rel="stylesheet" href="css/shop/style.css">
      <link rel="stylesheet" href="css/shop/responsive.css">
   </head>
   <body class="sidebar-main-active right-column-fixed">
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <div class="wrapper">                  
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-menu-bt d-flex align-items-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="las la-bars"></i></div>
                     </div>                     
                  </div>
                  <div class="navbar-breadcrumb">
                     <h4 class="mb-0">Alresalah Bookshop</h4>
                     <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                        </ul>
                     </nav>
                  </div>
                  <nav class="navbar navbar-expand-lg bg-light">
                     <div class="container-fluid">
                       <a class="navbar-brand" href="#">Navbar</a>
                       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                           <li class="nav-item">
                             <a class="nav-link active" aria-current="page" href="#">Home /</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">Features /</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link" href="#">Pricing /</a>
                           </li>
                           <li class="nav-item">
                             <a class="nav-link disabled">Disabled </a>
                           </li>
                         </ul>
                       </div>
                     </div>
                   </nav>
                  {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                       <li class="breadcrumb-item"><a href="#">Library</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Data</li>
                    </ol>
                 </nav>              --}}
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item nav-icon search-content">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                              <i class="ri-search-line"></i>
                           </a>
                           <form action="#" class="search-box p-0">
                              <input type="text" class="text search-input" placeholder="Type here to search...">
                              <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                           </form>
                        </li>
                        <li class="nav-item nav-icon">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-notification-2-fill"></i>
                           <span class="bg-primary dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">{{ Auth::user()->name }}</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="fa fa-envelope" aria-hidden="true"></i>
                           <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">{{ Auth::user()->name }}</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item nav-icon dropdown">
                           <a href="#" class="search-toggle iq-waves-effect text-gray rounded">
                           <i class="ri-shopping-cart-2-line"></i>
                           <span class="badge badge-danger count-cart rounded-circle">4</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 toggle-cart-info">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Carts<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card">
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="rounded" src="images/cart/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Night People book</h6>
                                             <p class="mb-0">$32</p>
                                          </div>
                                          <div class="float-right font-size-24 text-danger"><i class="ri-close-fill"></i></div>
                                       </div>
                                    </a>
                                    <div class="d-flex align-items-center text-center p-3">
                                       <a class="btn btn-primary mr-2 iq-sign-btn" href="#" role="button">View Cart</a>
                                       <a class="btn btn-primary iq-sign-btn" href="#" role="button">Shop now</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="line-height pt-3">
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src="images/user/1.jpg" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-1 line-height">{{$user->name}}</h6>
                                 <p class="mb-0 text-primary">$20.32</p>
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello {{$user->name}}</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>

                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>         
         <div id="content-page" class="content-page">            
            <div class="container-fluid">
               {{-- @if ($errors->all())
               <ul class="alert alert-danger">
                   @foreach ($errors->all() as $message)
                       <li>{{ $message }}</li>
                   @endforeach
               </ul>
               @endif     --}}
               <div class="toast fade show bg-primary text-white border-0" style="position: absolute; top: 120px; right: 40px;" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header bg-primary text-white">
                     <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
                        <rect width="100%" height="100%" fill="#fff"></rect>
                     </svg>
                     <strong class="mr-auto text-white">Bootstrap</strong>
                     <small>11 mins ago</small>
                     <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="toast-body">
                     Hello, world! This is a toast message.
                  </div>
               </div>
                @yield('content')     
            </div>
         </div>
      </div>
      
      <footer class="iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Booksto</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <script src="js/shop/jquery.min.js"></script>
      <script src="js/shop/popper.min.js"></script>
      <script src="js/shop/bootstrap.min.js"></script>      
      <script src="js/shop/jquery.appear.js"></script>
      <script src="js/shop/countdown.min.js"></script>
      <script src="js/shop/waypoints.min.js"></script>
      <script src="js/shop/jquery.counterup.min.js"></script>
      <script src="js/shop/wow.min.js"></script>      
      <script src="js/shop/slick.min.js"></script>
      <script src="js/shop/select2.min.js"></script>
      <script src="js/shop/jquery.magnific-popup.min.js"></script>
      <script src="js/shop/core.js"></script>
      {{-- <script src="js/shop/custom.js"></script>  --}}
      {{-- <script type="text/javascript">
         window.onload = function() {
            var myToastEl = document.getElementById('myToast');
            myToastEl.show();
            myToastEl.addEventListener('shown.bs.toast', function () {
               // do something...
               
            })
      };
      </script> --}}
      {{--<script src="js/shop/owl.carousel.min.js"></script>
      <script src="js/shop/smooth-scrollbar.js"></script>
      <script src="js/shop/lottie.js"></script>
      
      <script src="js/shop/animated.js"></script>
      <script src="js/shop/kelly.js"></script>
      <script src="js/shop/maps.js"></script>
      <script src="js/shop/worldLow.js"></script>
      <script src="js/shop/style-customizer.js"></script>--}}  

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