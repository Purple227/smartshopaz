<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shop</title>
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
              <div class="col-12 col-md-12 col-lg-12 col-xl-12 order-1 order-md-2">
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
            <li> <a class="breadcrumb-link active" href="index">Shop</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="shop-layout">
        <div class="container">
          <div class="row">
            <div class="col-xl-3">
              <div class="shop-sidebar">
                <button class="no-round-btn" id="filter-sidebar--closebtn">Close Filter</button>
                <div class="shop-sidebar_department">
                  <div class="department_top mini-tab-title underline">
                    <h2 class="title">Categories</h2>
                  </div>
                  <div class="department_bottom">
                    <ul>
                      @foreach ($list_categories as $key => $category)
                        <li> <a href="sub-categories" class="department-link"> {{ $category->name }} </a> </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                <div class="shop-sidebar_price-filter">
                  <div class="price-filter_top mini-tab-title underline">
                    <h2 class="title">Filter By Price</h2>
                  </div>
                  <div class="price-filter_bottom">
                    <p>
                      <label for="amount">Price range:</label>
                      <div class="filter-group">
                        <input id="amount" type="text" readonly="">
                        <button class="normal-btn">Fiter</button>
                      </div>
                    </p>
                    <div id="slider-range"></div>
                  </div>
                </div>
                <div class="shop-sidebar_color-filter">
                  <div class="color-filter_top mini-tab-title underline">
                    <h2 class="title">Color</h2>
                  </div>
                  <div class="color-filter_bottom">
                    <div class="row">
                      <div class="col-6">
                        <div class="color">
                          <div class="visible-color" style="background-color: black;"></div><a href="categories">Black (12)</a>
                        </div>
                        <div class="color">
                          <div class="visible-color" style="background-color: red;"></div><a href="categories">Red (4)</a>
                        </div>
                        <div class="color">
                          <div class="visible-color" style="background-color: orange;"></div><a href="categories">Orange (8)</a>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="color">
                          <div class="visible-color" style="background-color: blue;"></div><a href="categories">Blue (4)</a>
                        </div>
                        <div class="color">
                          <div class="visible-color" style="background-color: green;"></div><a href="categories">Green (9)</a>
                        </div>
                        <div class="color">
                          <div class="visible-color" style="background-color: pink;"></div><a href="categories">Pink (12)</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="shop-sidebar_size">
                  <div class="size_top mini-tab-title underline">
                    <h2 class="title">Popular size</h2>
                  </div>
                  <div class="size_bottom">
                    <form>
                      <div class="size">
                        <input type="checkbox" id="large">
                        <label for="large">Large</label>
                      </div>
                      <div class="size">
                        <input type="checkbox" id="medium">
                        <label for="medium">Medium</label>
                      </div>
                      <div class="size">
                        <input type="checkbox" id="small">
                        <label for="small">Small</label>
                      </div>
                      <div class="size">
                        <input type="checkbox" id="tiny">
                        <label for="tiny">Tiny</label>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="shop-sidebar_tag">
                  <div class="tag_top mini-tab-title underline">
                    <h2 class="title">Product tag</h2>
                  </div>
                  <div class="tag_bottom">
                      <a class="tag-btn" href="categories">organic</a>
                      <a class="tag-btn" href="categories">vegatable</a>
                      <a class="tag-btn" href="categories">fruits</a>
                      <a class="tag-btn" href="categories">fresh meat</a>
                      <a class="tag-btn" href="categories">fastfood</a>
                      <a class="tag-btn" href="categories">natural</a>
                  </div>
                </div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div>
            <div class="col-xl-9">
              <div class="shop-grid-list">
                <div class="shop-products">
                  <div class="shop-products_top mini-tab-title underline">
                    <div class="row align-items-center">
                      <div class="col-6 col-xl-4">
                        <h2 class="title">Shop</h2>
                      </div>
                      <div class="col-6 text-right">
                        <div id="show-filter-sidebar">
                          <h5> <i class="fas fa-bars"></i>Filter</h5>
                        </div>
                      </div>
                      <div class="col-md-12 col-xl-8">
                        <div class="product-option">
                          <div class="product-filter">

                            <select class="select-form" id="sort" v-model="sortAlpha">
                              <option value="A to Z">A to Z</option>
                              <option value="Z - A">Z to A</option>
                              <option value="High to low price">High to low price</option>
                              <option value="Low to height price">Low to height</option>
                            </select>

                            <select class="select-form" id="sort" name="" v-model="productPerPage">
                              <option value="10">Show 10</option>
                              <option value="20">Show 20</option>
                              <option value="30">Show 30</option>
                              <option value="40">Show 40</option>
                              <option value="50">Show 50</option>
                              <option value="60">Show 60</option>
                            </select>

                          </div>
                          <div class="view-method">
                            <p class="active" id="grid-view"><i class="fas fa-th-large"></i></p>
                            <!-- <p id="list-view"><i class="fas fa-list"></i></p> -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Using column-->
                  </div>
                  <div class="shop-products_bottom">
                    <div class="row no-gutters-sm">
                     
                      <div class="col-6 col-md-3" v-for="product in product" :key="product.id">
                        <div class="product">
                          <div class="product-img_block"><a class="product-img" href="shop_detail"><img src="assets/images/product/product04.png" alt=""></a>
                            
                          </div>
                          <div class="product-info_block">
                            <h5 class="product-type"> @{{ product.category == null ? '' : product.category.name }}</h5><a class="product-name" href="shop__detail"> @{{ product.title }} </a>
                            <h3 class="product-price">₦@{{ product.regular_price - (product.discount / 100)  }}
                              <del>₦ @{{ product.regular_price }} 00 </del>
                            </h3>
                            <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(5)</span></h5>
                            <p class="product-describe"> @{{ product.description.substring(0,25) }} </p>
                            <button class="add-to-wishlist button-borderless"><i class="icon_heart_alt"></i></button>
                          </div>
                          <div class="product-select">
                            <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                            <button class="add-to-cart round-icon-btn" @click="addToCart(product.id, product.regular_price - (product.discount / 100), product.title, 1, product.image)">  <i class="icon_bag_alt"></i></button>
                            <button class="quickview round-icon-btn"> <i class="far fa-eye" @click="singleProductMethod(product.id)"></i></button>
                          </div>
                         
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="shop-pagination">
                    <ul>

                      <li @click="getProduct(pagination.previousPageUrl)">
                        <button class="no-round-btn smooth"> <i class="arrow_carrot-2left"></i></button>
                      </li>

                      <li>
                        <button class="no-round-btn smooth"> @{{ pagination.to }}</button>
                      </li>

                      <li>
                        <button class="no-round-btn smooth">OF</button>
                      </li>

                      <li>
                        <button class="no-round-btn smooth"> @{{ pagination.total }} </button>
                      </li>

                      <li @click="getProduct(pagination.nextPageUrl)">
                        <button class="no-round-btn smooth"> <i class="arrow_carrot-2right"></i></button>
                      </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End shop layout-->
      <div class="partner">
        <div class="container">
          <div class="partner_block d-flex justify-content-between" data-slick="{&quot;slidesToShow&quot;: 6}">
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href="#"><img src="assets/images/partner/partner_02.png" alt="partner logo"></a></div>
            <div class="partner--logo" href=""> <a href=""><img src="assets/images/partner/partner_01.png" alt="partner logo"></a></div>
          </div>
        </div>
      </div>
      <!-- End partner-->
      @include('partials/fab-button')
      @include('partials/main-footer')
      <!-- End footer-->
    </div>

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