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
                   {{-- <li class="breadcrumb-item"><a href="index.html">Read The World</a></li> --}}
                   <li class="breadcrumb-item active" aria-current="page">Read The World</li>
                </ul>
             </nav>
          </div>
          <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
               <li class="breadcrumb-item"><a href="#"><i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
               <li class="breadcrumb-item"><a href="#">Library</a></li>
               <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ul>
         </nav>
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
                {{-- <li class="nav-item nav-icon">
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
                </li> --}}
                {{-- <li class="nav-item nav-icon dropdown">
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
                </li> --}}
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
                         <h6 class="mb-1 line-height">{{ Auth::user()->name }}</h6>
                         <p class="mb-0 text-primary">$20.32</p>
                      </div>
                   </a>
                   <div class="iq-sub-dropdown iq-user-dropdown">
                      <div class="iq-card shadow-none m-0">
                         <div class="iq-card-body p-0 ">
                            <div class="bg-primary p-3">
                               <h5 class="mb-0 text-white line-height">Hello {{ Auth::user()->name }}</h5>
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