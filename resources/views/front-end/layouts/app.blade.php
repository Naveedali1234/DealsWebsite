

<!doctype html>
<html class="no-js" lang="{ str_replace('_', '-', app()->getLocale()) }}">
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
   @include('front-end.partials.head')
   @yield('css')
   <body class="">
      <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
      <div class="preloader"></div>
     @include('front-end.partials.main-menu')
      <!-- =========================
         Slider Section
         ============================== -->
      <!-- <section id="main-slider-section" class="shop-slider-section">
         <div id="shop-slider" class="owl-carousel owl-theme product-review">
            <div class="item bc-slider-bg">
               <div class="container">
                  <div class="row">
                     <div class="slider-text col-12">
                        <h1 class="slider-title">Deals for the <span class="strong">Amazing Gamer</span></h1>
                        <p class="slider-content">Comparison Your Product with Best Review from Multi-Vendor Store <br> Hurry to go affiliate on this day successfully with BLURB Theme.</p>
                        <a href="shop-left-sidebar.html" class="btn btn-primary wd-shop-btn slider-btn">
                        Go to store <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="item bc-slider-bg-2">
               <div class="container">
                  <div class="row">
                     <div class="slider-text col-12">
                        <h1 class="slider-title">Make your day <span class="strong">Elipkart</span></h1>
                        <p class="slider-content">Comparison Your Product with Best Review from Multi-Vendor Store <br> Hurry to go affiliate on this day successfully with BLURB Theme.</p>
                        <a href="shop-left-sidebar.html" class="btn btn-primary wd-shop-btn slider-btn">
                        Go to store <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- =========================
         Product Section
         ============================== -->
      <div class="product-view-modal modal fade bd-example-modal-lg-product-1" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content">
               <!-- ====================================
                  Product Details Gallery Section
                        ========================================= -->
               <div class="row">
                  <div class="product-gallery col-12 col-md-12 col-lg-6">
                     <!-- ====================================
                        Single Product Gallery Section
                                    ========================================= -->
                     <div class="row">
                        <div class="col-md-12 product-slier-details">
                           <div id="product-view-model" class="product-view owl-carousel owl-theme">
                              <div class="item">
                                 <img src="{{URL::asset('assets/img/product-img/product-view-img-1.jpg')}}" class="img-fluid" alt="Product Img">
                              </div>
                              <div class="item">
                                 <img src="{{URL::asset('assets/img/product-img/product-view-img-2.jpg')}}" class="img-fluid" alt="Product Img">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-6 col-12 col-md-12 col-lg-6">
                     <div class="product-details-gallery">
                        <div class="list-group">
                           <h4 class="list-group-item-heading product-title">
                              Vigo SP111-31N-P2GH Spin 1
                           </h4>
                           <div class="media">
                              <div class="media-left media-middle">
                                 <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                 </div>
                              </div>
                              <div class="media-body">
                                 <p>3.7/5 <span class="product-ratings-text"> -1747 Ratings</span></p>
                              </div>
                           </div>
                        </div>
                        <div class="list-group content-list">
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 100% Original product</p>
                           <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Manufacturer Warranty</p>
                        </div>
                     </div>
                     <div class="product-store row">
                        <div class="col-12 product-store-box">
                           <div class="row">
                              <div class="col-3 p0 store-border-img">
                                 <img src="{{URL::asset('assets/img/product-store/product-store-img1.jpg')}}" class="figure-img img-fluid" alt="Product Img">
                              </div>
                              <div class="col-5 store-border-price text-center">
                                 <div class="price">
                                    <p>$234</p>
                                 </div>
                              </div>
                              <div class="col-4 store-border-button">
                                 <a href="#" class="btn btn-primary wd-shop-btn pull-right">
                                 Buy it now
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 product-store-box">
                           <div class="row">
                              <div class="col-3 p0 store-border-img">
                                 <img src="{{URL::asset('assets/img/product-store/product-store-img2.jpg')}}" class="figure-img img-fluid" alt="Product Img">
                              </div>
                              <div class="col-5 store-border-price text-center">
                                 <div class="price">
                                    <p>$535</p>
                                 </div>
                              </div>
                              <div class="col-4 store-border-button">
                                 <a href="#" class="btn btn-primary wd-shop-btn pull-right red-bg">
                                 Buy it now
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 product-store-box">
                           <div class="row">
                              <div class="col-3 p0 store-border-img">
                                 <img src="{{URL::asset('assets/img/product-store/product-store-img3.jpg')}}" class="figure-img img-fluid" alt="Product Img">
                              </div>
                              <div class="col-5 store-border-price">
                                 <span class="badge badge-secondary wd-badge text-uppercase">Best</span>
                                 <div class="price text-center">
                                    <p>$198</p>
                                 </div>
                              </div>
                              <div class="col-4 store-border-button">
                                 <a href="#" class="btn btn-primary wd-shop-btn pull-right orange-bg">
                                 Buy it now
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 product-store-box">
                           <div class="row">
                              <div class="col-3 p0 store-border-img">
                                 <img src="{{URL::asset('assets/img/product-store/product-store-img4.jpg')}}" class="figure-img img-fluid" alt="Product Img">
                              </div>
                              <div class="col-5 store-border-price text-center">
                                 <div class="price">
                                    <p>$634</p>
                                 </div>
                              </div>
                              <div class="col-4 store-border-button">
                                 <a href="#" class="btn btn-primary wd-shop-btn pull-right green-bg">
                                 Buy it now
                                 </a>
                              </div>
                           </div>
                        </div>
                        <div class="col-12 product-store-box">
                           <div class="row">
                              <div class="col-3 p0 store-border-img">
                                 <img src="{{URL::asset('assets/img/product-store/product-store-img5.jpg')}}" class="figure-img img-fluid" alt="Product Img">
                              </div>
                              <div class="col-5 store-border-price text-center">
                                 <div class="price">
                                    <p>$234</p>
                                 </div>
                              </div>
                              <div class="col-4 store-border-button">
                                 <a href="#" class="btn btn-primary wd-shop-btn pull-right blue-bg">
                                 Buy it now
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @yield('content')
     
      <!-- =========================
         Subscribe Section
         ============================== -->
      <section id="subscribe">
         <div class="container">
            <!-- <div class="col-md-1"></div> -->
            <div class="row subscribe-body">
               <div class="col-12 col-md-12 col-lg-5">
                  <h4 class="subscribe-title">Sign up for the latest updates</h4>
               </div>
               <div class="col-12 col-md-9 col-lg-5">
                  <div class="input-group">
                     <input type="text" class="form-control" aria-label="Text input with segmented button dropdown">
                  </div>
               </div>
               <div class="col-12 col-md-3 col-lg-2">
                  <button type="button" class="btn btn-primary wd-shop-btn subscribe-btn">
                  Subscribe
                  </button>
               </div>
            </div>
         </div>
      </section>
     @include('front-end.partials.footer')
      @include('front-end.partials.js-libraries')
      @yield('js')
   </body>
</html>

