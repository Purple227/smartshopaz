
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
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


<body>

<div id="app">

    <div id="main">
        <header  class="coffee-2">
            @include('partials/main-topbar')
            @include('partials/main-desktop-nav')
            @include('partials/main-mobile-nav')

            <div class="navigation-filter">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 order-2 order-md-1">
                            <div class="department-menu_block down">
                                <div class="department-menu d-flex justify-content-between align-items-center"><i class="fas fa-bars"></i>Categories<span><i class="arrow_carrot-up"></i></span></div>
                                <div class="department-dropdown-menu down">
                                    <ul>
                                        @foreach ($list_categories as $key => $category)
                                        <li> <a href="sub-categories"> <i class="icon-11"> </i> {{ $category->name }} </a> </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 col-lg-8 col-xl-9 order-1 order-md-2">
                            @include('partials/main-search')

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End header-->
        <div class="banner_v3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3"></div>
                    <div class="col-12 col-xl-9">
                        <!-- <div class="banner-block" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );">
                <div class="row no-gutters justify-content-center align-items-md-center">
                  <div class="col-10 col-md-5 col-xl-6" >
                    <div class="banner-text text-center text-md-left">
                      <h5 class="color-subtitle coffee">Discount Sale</h5>
                      <h2 class="title">Gadgets and Laptops</h2>
                      <a class="normal-btn coffee" href="sub-categories">Shop now</a>
                    </div>
                  </div>
                  <div class="col-12 col-md-5 col-xl-5"></div>
                </div>
              </div> -->
                        <!-- Slideshow container -->
                        <div class="slideshow-container">

                            <!-- Full-width images with number and caption text -->
                            <!-- <div class="mySlides fade">
                                <a href="">
                                <img src="assets/images/homepage05/test4.jpeg" style="width:100%">
                                </a>
                            </div>

                            <div class="mySlides fade">
                            <a href="">
                                <img src="assets/images/homepage05/test3.jpeg" style="width:100%">
                                </a>
                            </div> -->

                            <div class="mySlide fad">
                            <a href="">
                                <img src="assets/images/homepage05/test2.jpeg" style="width:100%">
                                </a>
                            </div>
                            <!-- <div class="mySlides fade"> -->
                            <!-- <a href="">
                                <img src="assets/images/homepage05/test1.jpeg" style="width:100%">
                                </a>
                            </div> -->

                            <!-- Next and previous buttons -->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!-- End banner v3-->

        <div class="benefit-block">
            <div class="container">
                <div class="our-benefits ">
                    <div class="row">
                        <div class="col-6 col-md-3 text-center">
                            <a href="super-buyer">
                                <div class="benefit-detail boderless  align-items-center"><img class="benefit-img" src="assets/images/icons/superbuyer.png" alt="">
                                    <h5 class="benefit-title">Super Buyers</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center">
                            <a href="">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/express.png" alt="">
                                    <h5 class="benefit-title">Smartshoppers Express</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center">
                            <a href="https://smartshopers.com.ng/">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/retailshop.png" alt="">
                                    <h5 class="benefit-title">Our Retail Shop</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3 text-center">
                            <a href="brands">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/brands.png" alt="">
                                    <h5 class="benefit-title">Brands</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-group">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="small-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="large-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End feature-products-->

        <div class="feature-products coffee">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">

                        <h1 class="title mx-auto"> Latest Product</h1>

                    </div>
                    <div class="col-12">
                        <div id="tab">
                            <div id="tab-1">
                                <div class="row no-gutters-sm">

                    @foreach ($list_product_latest as $key => $product)
                                    <div class="col-6 col-md-4 col-lg-3">
                                        <div class="product coffee"><a class="product-img" href="shop_detail"><img src="assets/images/product/product08.png" alt=""></a>
                                            <h5 class="product-type">{{ $product->category == null ? '' : $product->category->name }}</h5>
                                            <h3 class="product-name"> {{ $product->title }} </h3>
                                            <h3 class="product-price"> ₦{{ $product->regular_price - ($product->discount / 100)  }}
                                                <del> ₦ {{ $product->regular_price.''.'.00' }} </del>
                                            </h3>
                                            <div class="product-select">
                                                <button class="add-to-wishlist round-icon-btn coffee"> <i class="icon_heart_alt"></i></button>
                                                <button class="add-to-cart round-icon-btn coffee"> <i class="icon_bag_alt"></i></button>
                                                <button class="add-to-compare round-icon-btn coffee"> <i class="fas fa-random"></i></button>
                                                <button class="quickview round-icon-btn coffee"><i class="far fa-eye"></i></button>
                                            </div>
                                        </div>
                                    </div>
                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-group">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="large-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );">
                            <div class="row d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="small-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="small-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );"></div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="large-banner" style="background-image: url(assets/images/homepage05/);background-color: #fff;opacity: 0.9;background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #fff 10px ), repeating-linear-gradient( #fff, #f79823 );"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-block">
            <div class="container">
                <div class="our-benefits shadowless benefit-border">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/benefit-icon1.png" alt="">
                                <h5 class="benefit-title">Free Shipping</h5>
                                <p class="benefit-describle">For all order over 99₦</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="benefit-detail d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/benefit-icon2.png" alt="">
                                <h5 class="benefit-title">Delivery On Time</h5>
                                <p class="benefit-describle">If good have prolems</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/benefit-icon3.png" alt="">
                                <h5 class="benefit-title">Secure Payment</h5>
                                <p class="benefit-describle">100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End benefit block-->
        <!-- End banner group-->
        @include('partials/main-deal-of-week')
        <!-- End deak of the week v3-->

        <div class="home5-product-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="mini-latest-products mini-product-title">
                            <div class="mini-product_top">
                                <h5>Latest Products</h5>
                                <div class="mini-product_control"></div>
                            </div>
                            <div class="mini-product_bottom">

                                <div class="mini-product_block">
                                    @foreach ($list_product_latest as $key => $product)
                                    <div class="mini-product coffee">
                                        <div class="mini-product_img"><a href="shop_detail"><img src="assets/images/product/product15.png" alt="product image"></a></div>
                                        <div class="mini-product_info"> <a href="shop_detail"> {{ $product->title }} </a>
                                            <p>₦{{ $product->regular_price - ($product->discount / 100)  }}
                                                <del> ₦ {{ $product->regular_price.''.'.00' }} </del>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="top-rate-products mini-product-title">
                            <div class="mini-product_top">
                                <h5>Top Rated Products</h5>
                                <div class="mini-product_control"></div>
                            </div>
                            <div class="mini-product_bottom">

                                <div class="mini-product_block">
                                    @foreach ($list_product_latest as $key => $product)
                                    <div class="mini-product coffee">
                                        <div class="mini-product_img"><a href="shop_detail"><img src="assets/images/product/product15.png" alt="product image"></a></div>
                                        <div class="mini-product_info"> <a href="shop_detail"> {{ $product->title }} </a>
                                            <p>₦{{ $product->regular_price - ($product->discount / 100)  }}
                                                <del> ₦ {{ $product->regular_price.''.'.00' }} </del>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="review-products mini-product-title">
                            <div class="mini-product_top">
                                <h5>Review Products</h5>
                                <div class="mini-product_control"></div>
                            </div>
                            <div class="mini-product_bottom">

                                <div class="mini-product_block">
                                    @foreach ($review_product as $key => $product)
                                    <div class="mini-product coffee">
                                        <div class="mini-product_img"><a href="shop_detail"><img src="assets/images/product/product15.png" alt="product image"></a></div>
                                        <div class="mini-product_info"> <a href="shop_detail"> {{ $product->title }} </a>
                                            <p>₦{{ $product->regular_price - ($product->discount / 100)  }}
                                                <del> ₦ {{ $product->regular_price.''.'.00' }} </del>
                                            </p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('partials/fab-button')
        <!-- End home5 product block-->
        @include('partials/main-partners')
        <!-- End from the blog-->
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
    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            //   var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            //   for (i = 0; i < dots.length; i++) {
            //     dots[i].className = dots[i].className.replace(" active", "");
            //   }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }
    </script>
</body>

</html>