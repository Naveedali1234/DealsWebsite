<!DOCTYPE html>
<html>
 @include('user.partials.head')
  <body>
    <div class="page">
      <!-- Main Navbar-->
      @include('user.partials.main-menu')
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        @include('user.partials.sidebar')
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
          </header>
          <!-- Dashboard Counts Section-->
          @include('user.partials.dashboard-analytics')
          <!-- Dashboard Header Section    -->
         @yield('main-content')
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
   @include('user.partials.js-libraries')
  </body>
</html>