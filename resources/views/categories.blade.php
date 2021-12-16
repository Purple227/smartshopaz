<!DOCTYPE html>
<html lang="en">

<head>
    <title>Categories | Smartshoppers</title>
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
        <header class="coffee-2">
            
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
        <!-- End banner v3-->

        <div class="benefit-block">
            <div class="container">
            <div class="col-12 text-center">
              <h1 class="title coffee-underline">Categories</h1>

            </div> <br/>

                     
                   @foreach($list_product_latest as $key => $product)

                      <div class="col-6 col-md-3">
                        <div class="product">
                          <div class="product-img_block"><a class="product-img" href="shop_detail"> <img src="{{ asset($product->image == null ? 'assets/images/product/product08.png' : $product->image ) }}" alt=""></a>
                            
                          </div>
                          <div class="product-info_block">
                            <h5 class="product-type"> {{ $product->category == null ? '' : $product->category->name }}</h5><a class="product-name" href="shop__detail"> {{ $product->title }} </a>
                            <h3 class="product-price">₦ {{ $product->regular_price - ($product->discount / 100)  }}
                              <del>₦ {{ $product->regular_price }} 00 </del>
                            </h3>
                            <h5 class="product-rated"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><span>(5)</span></h5>
                            <p class="product-describe"> {{ $product->description }} </p>
                            <button class="add-to-wishlist button-borderless"><i class="icon_heart_alt"></i></button>
                          </div>
                          <div class="product-select">
                            <button class="add-to-wishlist round-icon-btn"> <i class="icon_heart_alt"></i></button>
                            <button class="add-to-cart round-icon-btn" @click="addToCart('{{$product->id}}', '{{$product->regular_price}}' - ('{{$product->discount }}' / 100), '{{$product->title}}', 1, '{{$product->image}}')">  <i class="icon_bag_alt"></i></button>
                            <button class="quickview round-icon-btn"> <i class="far fa-eye" @click="singleProductMethod('{{$product->id}}')"></i></button>
                          </div>
                         
                        </div>
                      </div>

                      @endforeach


            </div>
        </div>



        @include('inc/fab-button')
        <!-- End home5 product block-->
        <!-- End from the blog-->
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