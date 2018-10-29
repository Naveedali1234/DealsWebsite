
 <!-- =========================
         Header Top Section
         ============================== -->
         <!-- Styles -->
     

<!-- =========================
Header Top Section
============================== -->
<section id="wd-header" class="d-flex align-items-center mob-sticky">
<div class="container">
   <div class="row">
      <!-- =========================
         Mobile Menu 
                      ============================== -->
      <div class="order-2 order-sm-1 col-2 col-sm-2 col-md-4 d-block d-lg-none">
         <div class="accordion-wrapper hide-sm-up">
            <a href="#" class="mobile-open"><i class="fa fa-bars" ></i></a>
            <!--Mobile Menu start-->
            <ul id="mobilemenu" class="accordion">
               <!-- <li class="mob-logo"><a href="index.html"><img src="{{URL::asset('assets/img/logo.png')}}" alt=""></a></li>-->
               <li><a class="closeme" href="#"><i class="fa fa-times" ></i></a></li>
               <li class="mob-logo"><a href="index.html"><img src="{{URL::asset('assets/img/logo.png')}}" alt=""></a></li>
               <li class="out-link"><a class="" href="#">All</a></li>
               <li class="out-link"><a class="" href="#">Deals</a></li>
               <li>
                  <div class="link">Menus <i class="fa fa-chevron-down"></i></div>
                  <ul class="submenu font-sky">
                     <li>
                        <a href="#">Groups <span class="fa fa-chevron-down"></span></a>
                         <ul>
                             <li><a href="#">Computer</a></li>
                             <li><a href="#">Food</a></li>
                         </ul>
                     </li>
                     <li><a href="compare-products.html">Other</a></li>
                     
                  </ul>
               </li>
               
            </ul>
            <!--Mobile Menu end-->
         </div>
      </div>
      <!--Mobile menu end-->
      <div class="order-1 order-sm-2  col-12 col-sm-4 col-md-4 col-lg-2 col-xl-2">
         <div class="blrub-logo">
            <a href="index.html">
            <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
            </a>
         </div>
      </div>
      <!-- =========================
         Search Box  Show on large device
                      ============================== -->
      <div class="col-12 order-lg-2 col-md-5 col-lg-6 col-xl-5 d-none d-lg-block">
         <div class="input-group wd-btn-group header-search-option">
            <input type="text" class="form-control blurb-search" placeholder="Search ..." aria-label="Search for...">
            <span class="input-group-btn">
            <button class="btn btn-secondary wd-btn-search" type="button">
            <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            </span>
         </div>
      </div>
      <!-- =========================
         Login and My Acount 
                      ============================== -->
      <div class="order-3 order-sm-3 col-10 col-sm-6 col-lg-4 col-md-4 col-xl-5">
         <!-- =========================
            User Account Section
                             ============================== -->
         <div class="acc-header-wraper">
            <div class="account-section">
               
               @guest
                <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg2">
               <i class="fa fa-sign-in" aria-hidden="true"></i><span>Login/Register</span> 
               </button>
               @else
               <div class="dropdown show">
                 <a class="btn dropdown-toggle" style="color: black;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ Auth::user()->name }}
                 </a>

                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                     </form>
                   <a class="dropdown-item" href="/dashboard">My Profile</a>
                   
                 </div>
               </div>
               
              @endguest
               
               @include('front-end.partials.login-signup-modal')
            </div>
            <div class="serch-wrapper">
               <div class="search">
                  <input class="search-input" placeholder="Search" type="text">
                  <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
               </div>
            </div>
            <!-- =========================
               Cart Out 
                                  ============================== -->
            <div class="header-cart">
              <!--  <a href="coupon.html" class="coupon-save"><i class="fa fa-star-o" aria-hidden="true"></i>
               <span class="count">5</span>
               </a>
               <a class="header-wishlist" href="wishlist.html">
               <i class="fa fa-heart-o" aria-hidden="true"></i>
               <span class="count">8</span>
               </a> -->
               <a href="{{route('deals.submit')}}" class="btn btn-info btn-sm">
          <span class="fa fa-plus"></span> Submit Deal
        </a>
            </div>
         </div>
      </div>
   </div>
   <!--Row End-->
</div>
<!--Container End-->
</section>
<!--Section End-->
<!-- =========================
Main Menu Section
============================== -->
<section id="main-menu" class="sticker-nav">
<div class="container">
   <div class="row">
      <div class="col-2 col-md-6 col-lg-12 ">
         <div class="menu-container wd-megamenu">
            <div class="menu" style="float: left;">
               <ul class="wd-megamenu-ul">
                  <li>
                     <a href="#" class="main-menu-list">All</a>
                     
                  </li>
                 
                  <li>
                     <a href="shop-left-sidebar.html" class="main-menu-list">Deals <i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                    
                  </li>
                  <li class="pos-inherit">
                     <a href="shop-left-sidebar.html" class="main-menu-list ">Menu <i class="fa fa-angle-down angle-down" aria-hidden="true"></i></a>
                     <ul class="single-dropdown megamenu">
                        <li>
                           <a href="#" class="menu-subtitle">Groups</a>
                           <ul class="sub-menu-list">
                              <li><a href="blurb-blog.html"><i class="fa fa-angle-double-right" aria-hidden="true"></i> blurb-blog</a></li>
                              
                           </ul>
                        </li>
                        
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-6 col-md-4 col-lg-5 text-right ext-right p0  d-none ">
         <div class="account-and-search">
            <div class="account-section">
               <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
               <i class="fa fa-sign-in" aria-hidden="true"></i>
               </button>
               <div class="modal wd-ph-modal fade bd-example-modal-lg" tabindex="-1" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="container">
                           <div class="row text-left">
                              <div class="col-md-12 p0">
                                 <div class="modal-tab-section wd-modal-tabs">
                                    <ul class="nav nav-tabs wd-modal-tab-menu text-center" id="myTab-account" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" id="login-tab-2" data-toggle="tab" href="#login-2" role="tab" aria-controls="login-2" aria-expanded="true">Login</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" id="sign-up-tab-2" data-toggle="tab" href="#sign-up-2" role="tab" aria-controls="sign-up-2">Sign up</a>
                                       </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent-account">
                                       <div class="tab-pane fade show active" id="login-2" role="tabpanel" aria-labelledby="login-tab-2">
                                          <div class="row">
                                             <div class="col-md-6 p0 brand-description-area">
                                                <img src="{{URL::asset('assets/img/login-img-1.jpg')}}" class="img-fluid" alt="">
                                                <div class="brand-description">
                                                   <div class="brand-logo">
                                                      <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
                                                   </div>
                                                   <div class="modal-description">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
                                                   </div>
                                                   <ul class="list-unstyled">
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media my-4">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="col-12 col-md-12 col-lg-6 p0">
                                                <div class="login-section text-center">
                                                   <div class="social-media ph-social-media">
                                                      <a href="#" class="facebook-bg"><i class="fa fa-facebook" aria-hidden="true"></i> Login</a>
                                                      <a href="#" class="google-bg"><i  aria-hidden="true"></i> Google Login</a>
                                                   </div>
                                                   <div class="login-form text-left">
                                                      <form>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail1">User name</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="John mist |">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*** *** ***">
                                                         </div>
                                                         <button type="submit" class="btn btn-primary wd-login-btn">LOGIN</button>
                                                         <div class="form-check">
                                                            <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input">
                                                            Save this password
                                                            </label>
                                                         </div>
                                                         <div class="wd-policy">
                                                            <p>
                                                               By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
                                                            </p>
                                                         </div>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="tab-pane fade" id="sign-up-2" role="tabpanel" aria-labelledby="sign-up-tab-2">
                                          <div class="row">
                                             <div class="col-md-12 p0 brand-login-section">
                                                <img src="{{URL::asset('assets/img/login-img-2.jpg')}}" class="img-fluid" alt="">
                                                <div class="brand-description">
                                                   <div class="brand-logo">
                                                      <img src="{{URL::asset('assets/img/logo.png')}}" alt="Logo">
                                                   </div>
                                                   <div class="modal-description">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod teoccaecvoluptatem.</p>
                                                   </div>
                                                   <ul class="list-unstyled">
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media my-4">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                      <li class="media">
                                                         <i class="fa fa-check" aria-hidden="true"></i>
                                                         <div class="media-body">
                                                            Lorem ipsum dolor sit amet, consecadipisicing elit, sed do eiusmod teoccaecvoluptatem.
                                                         </div>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="col-12 col-md-12 col-lg-6 p0">
                                                <div class="sign-up-section text-center">
                                                   <div class="login-form text-left">
                                                      <form>
                                                         <div class="form-group">
                                                            <label for="exampleInputname-login-in">First name</label>
                                                            <input type="text" class="form-control" id="exampleInputname-login-in" placeholder="First Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputname-login-in-2">Last name</label>
                                                            <input type="text" class="form-control" id="exampleInputname-login-in-2" placeholder="Last Name">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputEmail-login-in">Email</label>
                                                            <input type="text" class="form-control" id="exampleInputEmail-login-in" placeholder="Enter you email ...">
                                                         </div>
                                                         <div class="form-group">
                                                            <label for="exampleInputPassword-login-in">Password</label>
                                                            <input type="password" class="form-control" id="exampleInputPassword-login-in" placeholder="*** *** ***">
                                                         </div>
                                                         <button type="submit" class="btn btn-primary wd-login-btn">Sign Up</button>
                                                         <div class="wd-policy">
                                                            <p>
                                                               By Continuing. I conferm that i have read and userstand the <a href="#">terms of uses</a> and <a href="#">Privacy Policy</a>. Don’t have an account? <a href="#" class="black-color"><strong><u>Sign up</u></strong></a>
                                                            </p>
                                                         </div>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</section>

@if (count($errors) > 0)
<script
           src="https://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous"></script>

    <script>
        $( document ).ready(function() {
            $('.bd-example-modal-lg2').modal('show');
        });
    </script>
@endif