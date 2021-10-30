<nav class="navigation d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-2"><a class="logo" href="./"><img src="assets/images/logo.png" width="200px" alt=""></a></div>
              <div class="col-8">
                <div class="navgition-menu d-flex align-items-center justify-content-center">
                  <ul class="mb-0">
                    <li class="toggleable"> <a class="menu-item" href="./">Home</a></li>
                    <li class="toggleable"> <a class="menu-item" href="shop">Shop </a>
                      <!-- <ul class="sub-menu shop d-flex">
                        <div class="nav-column">
                          <h2>Layout shop</h2>
                          <li><a href="shop_grid+list_fullwidth "></a></li>
                          <li><a href="shop_grid+list_fullwidth"></a></li>
                          <li><a href="shop_grid+list_3col"></a></li>
                          <li><a href="shop_grid+list_3col"></a></li>
                        </div>
                        <div class="nav-column">
                          <h2>Detail shop</h2>
                          <li><a href="shop_detail_fullwidth"></a></li>
                          <li><a href="shop_detail"></a></li>
                        </div>
                        <div class="nav-column">
                          <h2>Pages shop</h2>
                          <li><a href="checkout">checkout</a></li>
                          <li><a href="order-complete">order complete</a></li>
                          <li><a href="wishlist">wishlist</a></li>
                          <li><a href="cart">cart</a></li>
                        </div>
                      </ul> -->
                    </li>
                    <li class="toggleable"><a class="menu-item" href="#">Help <i class="arrow_carrot-down"></i></a>
                      <ul class="sub-menu">
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                      </ul>
                    </li>
                    <!-- <li class="toggleable"><a class="menu-item" href="#">Help</a></li> -->
                    <li class="toggleable"> <a class="menu-item" href="#">Sell on Smartshoppers</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-2">
                <div class="product-function d-flex align-items-center justify-content-end">
                  <div id="wishlist"><a class="function-icon icon_heart_alt" href=""></a></div>
                  <div id="cart"><a class="function-icon icon_bag_alt" href="/cart"><span>NGN @{{ sumInCart == null ? '0.00' : sumInCart}}</span></a></div>
                </div>
              </div>
            </div>
          </div>
        </nav>