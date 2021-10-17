<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wishlist</title>
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
              <div class="col-12 col-md-12 col-lg-4 col-xl-3 order-2 order-md-1">
              @include('inc/main-categories.php')
              </div>
              <div class="col-12 col-md-12 col-lg-8 col-xl-9 order-1 order-md-2">
              @include('inc/main-search.php')
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End header-->
      <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="./"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link" href="./">Shop</a></li>
            <li> <a class="breadcrumb-link active" href="#">Wishlist</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="shopping-cart">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="product-table">
                <table class="table table-responsive"> 
                  <colgroup>
                    <col span="1" style="width: 15%">
                    <col span="1" style="width: 30%">
                    <col span="1" style="width: 15%">
                    <col span="1" style="width: 15%">
                    <col span="1" style="width: 15%">
                    <col span="1" style="width: 10%">
                  </colgroup>
                  <thead>
                    <tr>
                      <th class="product-iamge" scope="col">Image</th>
                      <th class="product-name" scope="col">Product name</th>
                      <th class="product-price" scope="col">Price</th>
                      <th class="product-quantity" scope="col">Quantity</th>
                      <th class="product-total" scope="col">Total</th>
                      <th class="product-clear" scope="col"> 
                        <button class="no-round-btn"><i class="icon_close"></i></button>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-iamge"> 
                        <div class="img-wrapper"><img src="assets/images/product/product03.png" alt="product image"></div>
                      </td>
                      <td class="product-name">Pure Pineapple</td>
                      <td class="product-price">₦460.00</td>
                      <td class="product-quantity"> 
                        <input class="quantity no-round-input" type="number" min="1" value="1">
                      </td>
                      <td class="product-total">₦460.00</td>
                      <td class="product-clear"> 
                        <button class="no-round-btn"><i class="icon_close"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td class="product-iamge"> 
                        <div class="img-wrapper"><img src="assets/images/product/product02.png" alt="product image"></div>
                      </td>
                      <td class="product-name">American lobster</td>
                      <td class="product-price">₦460.00</td>
                      <td class="product-quantity"> 
                        <input class="quantity no-round-input" type="number" min="1" value="1">
                      </td>
                      <td class="product-total">₦460.00</td>
                      <td class="product-clear"> 
                        <button class="no-round-btn"><i class="icon_close"></i></button>
                      </td>
                    </tr>
                    <tr>
                      <td class="product-iamge"> 
                        <div class="img-wrapper"><img src="assets/images/product/product05.png" alt="product image"></div>
                      </td>
                      <td class="product-name">Chrysanthemum</td>
                      <td class="product-price">₦460.00</td>
                      <td class="product-quantity">
                        <input class="quantity no-round-input" type="number" min="1" value="2">
                      </td>
                      <td class="product-total">₦920.00</td>
                      <td class="product-clear"> 
                        <button class="no-round-btn"><i class="icon_close"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 text-left">
              <button class="normal-btn black cart-update">Continue Shopping</button>
            </div>
          </div>
        </div>
      </div>
      <!-- End shopping cart-->
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
    <script></script>
  </body>
</html>