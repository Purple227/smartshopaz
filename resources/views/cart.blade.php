<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cart | Smartshoppers</title>
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
<div id="app">

    <div id="main">
      <header>
        @include('partials/main-topbar')
        @include('partials/main-desktop-nav')
        @include('partials/main-mobile-nav')
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 col-xl-3 order-2 order-md-1">
              @include('partials/main-categories')
              </div>
              <div class="col-12 col-md-12 col-lg-8 col-xl-9 order-1 order-md-2">
              @include('partials/main-search')
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- End header-->
      <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="index"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link" href="index">Shop</a></li>
            <li> <a class="breadcrumb-link active" href="index">Shoping cart</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="order-step">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="order-step_block">
                <div class="row no-gutters">
                  <div class="col-12 col-md-4">
                    <div class="step-block active">
                      <div class="step">
                        <h2>Shopping Cart</h2><span>01</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="step-block">
                      <div class="step">
                        <h2>Check Out</h2><span>02</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="step-block">
                      <div class="step">
                        <h2>Order Completed</h2><span>03</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End order step-->
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
                    <tr v-for="(item, index) in cart" :key="index">
                      <td class="product-iamge"> 
                        <div class="img-wrapper"><img src="assets/images/product/product03.png" alt="product image"></div>
                      </td>
                      <td class="product-name"> @{{ item.name }}</td>
                      <td class="product-price">₦ @{{ item.price }} </td>
                      <td class="product-quantity"> 
                        <input class="quantity no-round-input" type="number" min="1" v-model="item.count" @click="itemCounterMethod(item.id, item.count * item.price, item.name, item.count)">
                      </td>
                      <td class="product-total">₦ @{{ item.count * item.price  }}</td>
                      <td class="product-clear" @click="removeFromCart(item.id)"> 
                        <button class="no-round-btn"><i class="icon_close"></i></button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-12 col-sm-8">
              <div class="coupon">
                <form action="" method="post">
                  <input class="no-round-input" type="text" placeholder="Coupon code">
                  <button class="no-round-btn smooth">Apply coupon</button>
                </form>
              </div>
            </div>
            <div class="col-12 col-sm-4 text-right">
              <button class="no-round-btn black cart-update">Upadate cart</button>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="cart-total_block">
                <h2>Cart total</h2>
                <table class="table">
                  <colgroup>
                    <col span="1" style="width: 50%">
                    <col span="1" style="width: 50%">
                  </colgroup>
                  <tbody>
                    <tr>
                      <th>SUBTOTAL</th>
                      <td>NGN169.00</td>
                    </tr>
                    <tr>
                      <th>SHIPPING</th>
                      <td>
                        <p>Free shipping</p>
                        <p>Calculate shipping</p>
                      </td>
                    </tr>
                    <tr>
                      <th>TOTAL</th>
                      <td>NGN169.00</td>
                    </tr>
                  </tbody>
                </table>
                <div class="checkout-method">
                  <button class="normal-btn">Proceed to Checkout</button><span>- or -</span><a href="shop_checkout">Check out with PayPal</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End shopping cart-->
      @include('partials/fab-button')
      @include('partials/main-partners')
      <!-- End partner-->
    @include('partials/main-footer')
    </div>

</div>
    <script src="{{ asset('js/app.js') }}" defer></script>
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