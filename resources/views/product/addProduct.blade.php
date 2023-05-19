<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO - Multi Purpose HTML Template</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/ionicons.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/jquery-ui.min.css"> -->

    <!-- Plugin CSS -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/venobox.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="assets/css/plugins/aos.min.css"> -->
          @include('user.css')
    <!-- Main CSS -->
    <!-- <link rel="stylesheet" href="assets/sass/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
   

</head>

<body>
    <!-- Start Header Area -->
    @include('user.header')
    <!-- Start Header Area -->

    <!-- Start Mobile Header -->
   
    <!-- End Mobile Header -->

    <!--  Start Offcanvas Mobile Menu Section -->
    @include('user.mobile_hamburger')
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    @include('user.desktop_hamburger')
    <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Addcart Section -->
    @include('user.cart_click')
   <!-- End  Offcanvas Addcart Wrapper -->

     <!-- End  Offcanvas Addcart Section -->

    <!-- Start Offcanvas Mobile Menu Section -->
    @include('user.wishlist_click')
    <!-- End Offcanvas Mobile Menu Section -->

    <!-- Start Offcanvas Search Bar Section -->
   
    <!-- End Offcanvas Search Bar Section -->
      @include('user.search_bar_click')
    <!-- Offcanvas Overlay -->
    <div class="offcanvas-overlay"></div>

    <!-- Start Hero Slider Section-->
   <div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <p><b>Success :{{session()->get('message')}} </b></p>
    </div>
    @endif
   
    <div class="row">
        <div class="col-12 w-50 mx-auto my-5">
            <div class="product_to_add ">
                <h2> Add Poducts</h2>
                <form action="{{url('add_the_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="default-form-box">
                          <label>Title <span>*</span></label>
                          <input type="text" name="title">
                      </div>
                      <div class="default-form-box">
                          <label>Description <span>*</span></label>
                          <input type="text"name="description">
                      </div>
                      <div class="default-form-box">
                          <label>Link <span>*</span></label>
                          <input type="text"name="link">
                      </div>
                      <div class="default-form-box">
                          <label>Image <span>*</span></label>
                          <input type="file"name="image">
                      </div>
                     <input type="submit" class="btn btn-md btn-black-default-hover mb-4" value="Add Product">
                     
                  </form>
              </div>
        </div>
    </div>
   </div>
 
    <!-- Start Footer Section -->
    @include('user.footer')
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Start Modal Add cart -->
     <!-- End Modal Add cart -->

    <!-- Start Modal Quickview cart -->
  <!-- End Modal Quickview cart -->

    <!-- ::::::::::::::All JS Files here :::::::::::::: -->
    <!-- Global Vendor, plugins JS -->
    <!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.min.js"></script>  -->

    <!--Plugins JS-->
    <!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/material-scrolltop.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/venobox.min.js"></script>
    <script src="assets/js/plugins/jquery.waypoints.js"></script>
    <script src="assets/js/plugins/jquery.lineProgressbar.js"></script>
    <script src="assets/js/plugins/aos.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramFeed.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    @include('user.script')
</body>



</html>