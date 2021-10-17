<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="smartshoppers, smartshoppers, smartshoppaz, free shopping, online shopping, online shopping nigeria, best online shops in nigeria, wholesalers in nigeria,  retailers in nigeria, best wholesaler, best wholesalers in nigeria">
    <meta name="author" content="Smartshoppers | Development Team">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom_bootstrap.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/elegant.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/scroll.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="shortcut icon" href="assets/images/shortcut_logo.png">
  </head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <body>
    <div id="main">
    <header>
        @include('inc/main-topbar.php')
        @include('inc/main-desktop-nav.php')
        @include('inc/main-mobile-nav.php')
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
              @include('inc/main-categories.php')
              </div>
              <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
              @include('inc/main-search.php')
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End header-->
      <!-- <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link active" href="#">Register</a></li>
          </ul>
        </div>
      </div> -->
      <!-- End breadcrumb-->
      <div class="account">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 mx-auto">
              <h1 class="title">Register</h1>
              <form>
                <label for="user-name">Username or email address *</label>
                <input class="no-round-input" id="user-name" type="text">
                <label for="password">Password *</label>
                <input class="no-round-input" id="password" type="text">
                <label for="confirm">Comfirm password *</label>
                <input class="no-round-input" id="confirm" type="text">
                <div class="account-function">
                  <button class="no-round-btn">Register</button><a class="create-account" href="login">Or login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- End account-->
      @include('inc/fab-button.php')

      @include('inc/main-footer.php')
      <!-- End footer-->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.easing.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/jquery.zoom.min.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/numscroller-1.0.js"></script>
    <script src="assets/js/vanilla-tilt.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>