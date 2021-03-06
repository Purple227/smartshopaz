<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Product Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="smartshoppers, smartshoppers, smartshoppaz, free shopping, online shopping, online shopping nigeria, best online shops in nigeria, wholesalers in nigeria,  retailers in nigeria, best wholesaler, best wholesalers in nigeria">
    <meta name="author" content="Smartshoppers | Development Team">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom_bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/shortcut_logo.png') }}">
  </head>
  <body>
    <div id="layout-wrapper">
    <header>
        @include('inc/main-topbar')
        @include('inc/main-desktop-nav')
        @include('inc/main-mobile-nav')
        <div class="navigation-filter"> 
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
              <div class="department-menu_block down">
                                <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Categories<span><i class="arrow_carrot-up"></i></span></div>
                                <div class="department-dropdown-menu down">
                                    <ul>
                                        @foreach ($list_categories as $key => $category)
                                        <li> <a href="{{ route('category',$category->slug) }}"> <i class="icon-11"> </i> {{ $category->name }} </a> </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
              </div>
              <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
              @include('inc/main-search')
              </div>
            </div>
          </div>
        </div>
    </header>
      <!-- End header-->
      <div class="ogami-breadcrumb">
        <div class="container">
          <ul>
            <li> <a class="breadcrumb-link" href="../"> <i class="fas fa-home"></i>Home</a></li>
            <li> <a class="breadcrumb-link" href="../shop">Shop</a></li>
            <li> <a class="breadcrumb-link active" > {{ $product->title }}</a></li>
          </ul>
        </div>
      </div>
      <!-- End breadcrumb-->
      <div class="shop-layout">
        <div class="container">
          <div class="row">
            <!-- <div class="col-xl-3">
              <div class="shop-sidebar">
                <button class="no-round-btn" id="filter-sidebar--closebtn">Close filter</button>
                <div class="shop-sidebar_department">
                  <div class="department_top mini-tab-title underline">
                    <h2 class="title">Cate</h2>
                  </div>
                  <div class="department_bottom">
                    <ul>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fresh Meat</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Vegetables</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fruit & Nut Gifts</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fresh Berries</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Ocean Foods</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Butter & Eggs</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fastfood</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fresh Onion</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Papayaya & Crisps</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Oatmeal</a></li>
                      <li> <a class="department-link" href="shop_grid+list_3col">Fresh Bananas</a></li>
                    </ul>
                  </div>
                </div>
                <div class="shop-sidebar_tag">
                  <div class="tag_top mini-tab-title underline">
                    <h2 class="title">Product tag</h2>
                  </div>
                  <div class="tag_bottom"><a class="tag-btn" href="shop_grid+list_3col">organic</a><a class="tag-btn" href="shop_grid+list_3col">vegatable</a><a class="tag-btn" href="shop_grid+list_3col">fruits</a><a class="tag-btn" href="shop_grid+list_3col">fresh meat</a><a class="tag-btn" href="shop_grid+list_3col">fastfood</a><a class="tag-btn" href="shop_grid+list_3col">natural</a></div>
                </div>
              </div>
              <div class="filter-sidebar--background" style="display: none"></div>
            </div> -->
            <div class="col-xl-12">
              <div class="shop-detail">
                <div class="row">
                  <!-- <div class="col-12"> 
                    <div id="show-filter-sidebar">
                      <h5> <i class="fas fa-bars"></i>Show sidebar</h5>
                    </div>
                  </div> -->
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_img">
                      <button class="round-icon-btn" id="zoom-btn"> <i class="icon_zoom-in_alt"></i></button>
                      <div class="big-img">
                        <div class="big-img_block"><img src="{{ asset($product->image == null ? 'assets/images/product/product08.png' : $product->image ) }}" alt="product image"></div>
                      </div>
                      {{--
                      <div class="slide-img">
                        <div class="slide-img_block"><img src="assets/images/shop/zoom_img_1.png" alt="product image"></div>
                        <div class="slide-img_block"><img src="assets/images/shop/zoom_img_2.png" alt="product image"></div>
                        <div class="slide-img_block"><img src="assets/images/shop/zoom_img_3.png" alt="product image"></div>
                      </div>
                      --}}
                    </div>
                    <div class="img_control"></div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="shop-detail_info">
                      <h5 class="product-type color-type">{{ $product->category == null ? '' : $product->category->name }}</h5>
                      <h2 class="product-name">{{ $product->title }}</h2>
                      <p class="product-describe">{{ $product->description }} </p>
                      <div class="price-rate">
                        <h3 class="product-price"> 
                          <del>???{{ $product->regular_price.''.'.00' }} </del>???{{ $product->regular_price - ($product->discount / 100)  }}
                        </h3>
                        {{--
                        <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(15)</span></h5>
                        --}}
                      </div>
                      {{--
                      <div class="color-select">
                        <h5>Select Color:</h5><a class="color bg-danger" href="#"></a><a class="color bg-success" href="#"></a><a class="color bg-info" href="#"></a>
                      </div>
                      --}}

                      <div class="mt-3 mt-sm-0 mr-sm-3 mb-3" id="inlineFormInputName2">
                                                        <select class="form-control" v-model="selectedVariation">
                                                        <option :value="null" disabled> Select Variation </option>
                                                            <option v-for="(product, index) in superbuyerSingleProduct.product_variety" :value="index"> @{{ product.variation_name }}</option>                                                            
                                                        </select>
                       </div>


                      <div class="product-select">

                      <button class="add-to-compare normal-btn outline"v-if="cart == null ? false : cart.some(check => check.id ==   superbuyerSingleProduct.single_product.id)" @click="removeFromCart(selectedVariation ==null ? superbuyerSingleProduct.single_product.id : superbuyerSingleProduct.product_variety[selectedVariation].id)" > Remove From Cart</button>

                        <button class="add-to-cart normal-btn outline" @click="addToCart
                                                    (
                                                        selectedVariation == null ? superbuyerSingleProduct.single_product.id : superbuyerSingleProduct.product_variety[selectedVariation].id, 
                                                        selectedVariation ==null ? superbuyerSingleProduct.single_product.super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100) : superbuyerSingleProduct.product_variety[selectedVariation].super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100),
                                                        selectedVariation == null ? superbuyerSingleProduct.single_product.title + '(Default)' :superbuyerSingleProduct.single_product.title + '(' + superbuyerSingleProduct.product_variety[selectedVariation].variation_name + ')', 
                                                        1, 
                                                        superbuyerSingleProduct.single_product.image, selectedVariation == null ? superbuyerSingleProduct.single_product.main_price : superbuyerSingleProduct.product_variety[selectedVariation].main_price
                                                        )" v-else>Add to Cart</button>
                      </div>
                      {{--
                      <div class="product-share">
                        <h5>Share link:</h5><a href=""><i class="fab fa-facebook-f"> </i></a><a href=""><i class="fab fa-twitter"></i></a><a href=""><i class="fab fa-invision"> </i></a><a href=""><i class="fab fa-pinterest-p"></i></a>
                      </div>
                      --}}
                    </div>
                  </div>


                  {{--
                  <div class="col-12">
                    <div class="shop-detail_more-info">
                      <div id="tab-so3">
                        <ul class="mb-0">
                          <li class="active"><a href="#tab-1">DESCRIPTION</a></li>
                          <li><a href="#tab-2">SPECIFICATIONS</a></li>
                          <li> <a href="#tab-3">Customer Reviews (02)</a></li>
                        </ul>
                        <div id="tab-1">
                          <div class="description-block">
                            <div class="description-item_block">
                              <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                  <div class="description-item_img"><img class="img-fluid" src="assets/images/shop/shop_detail_img.png" alt="description image"></div>
                                </div>
                                <div class="col-12 col-md-6">
                                  <div class="description-item_text">
                                    <h2>Product information</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="description-item_block">
                              <div class="row align-items-center">
                                <div class="col-md-6">
                                  <div class="description-item_img"><img class="img-fluid" src="assets/images/shop/shop_detail_img_2.png" alt="description image"></div>
                                </div>
                                <div class="col-md-6">
                                  <div class="description-item_text">
                                    <h2>An incredible view</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="tab-2">
                          <div class="specifications_block">
                            <table class="shop_attributes table-bordered">
                              <tbody>
                                <tr>
                                  <th>Weight</th>
                                  <td class="product_weight">10 oz</td>
                                </tr>
                                <tr>
                                  <th>Dimensions</th>
                                  <td class="product_dimensions">15 ?? 12 ?? 20 in</td>
                                </tr>
                                <tr>
                                  <th>Color</th>
                                  <td class="product_color">Black, Blue, Gray, Green</td>
                                </tr>
                                <tr>
                                  <th>Size</th>
                                  <td class="product_size">L, M, S, XL</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div id="tab-3"> 
                          <div class="customer-reviews_block">
                            <div class="customer-review">
                              <div class="row">
                                <div class="col-12 col-sm-3 col-lg-2">
                                  <div class="customer-review_left">
                                    <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/shop/reviewer_01.png" alt="customer image"></div>
                                    <div class="customer-rate"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i></div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-9 col-lg-10">
                                  <div class="customer-comment"> 
                                    <h5 class="comment-date">27 Aug 2016</h5>
                                    <h3 class="customer-name">Jenney Kelley</h3>
                                    <p class="customer-commented">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alation uidem dolore eu fugiat nulla pariatur. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="customer-review">
                              <div class="row">
                                <div class="col-12 col-sm-3 col-lg-2">
                                  <div class="customer-review_left">
                                    <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/shop/reviewer_02.png" alt="customer image"></div>
                                    <div class="customer-rate"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i></div>
                                  </div>
                                </div>
                                <div class="col-12 col-sm-9 col-lg-10">
                                  <div class="customer-comment"> 
                                    <h5 class="comment-date">27 Aug 2016</h5>
                                    <h3 class="customer-name">Jenney Kelley</h3>
                                    <p class="customer-commented">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna alation uidem dolore eu fugiat nulla pariatur. </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="add-review">
                              <div class="add-review_top">
                                <h2>Add Review</h2>
                              </div>
                              <div class="add-review_bottom">
                                <form action="" method="post">
                                  <div class="row">
                                    <div class="col-12 col-md-6">
                                      <input class="no-round-input" type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-12 col-md-6">
                                      <input class="no-round-input" type="text" placeholder="Email*">
                                    </div>
                                    <div class="col-12">
                                      <div class="rating">
                                        <h5>Your rating:</h5><span><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></span>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <textarea class="textarea-form" id="review" name="" cols="30" rows="4" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <button class="normal-btn">Submit Review</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End shop layout-->
      @include('inc/fab-button')
      @include('inc/main-partners')
      <!-- End partner-->
    @include('inc/main-footer')
      <!-- End footer-->
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/numscroller-1.0.js') }}"></script>
    <script src="{{ asset('assets/js/vanilla-tilt.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>
</html>