@if(Auth::user()->ron != 1)

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Brands | Smartshoppers</title>
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
    <div id="main">
        <header class="coffee-2">
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
        <!-- End banner v3-->

        <div class="benefit-block">
            <div class="container">
            <div class="col-12 text-center">
              <h1 class="title coffee-underline">Brands</h1>
            </div> <br/>
                <div class="our-benefits ">
                    <div class="row">
                        <div class="col-4 col-md-3 text-center">
                            <a href="">
                                <div class="benefit-detail boderless  align-items-center"><img class="benefit-img" src="assets/images/icons/superbuyer.png" alt="">
                                    <h5 class="benefit-title">Super Buyers</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3 text-center">
                            <a href="">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/express.png" alt="">
                                    <h5 class="benefit-title">Smartshoppers Express</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3 text-center">
                            <a href="https://smartshopers.com.ng/">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/retailshop.png" alt="">
                                    <h5 class="benefit-title">Our Retail Shop</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3 text-center">
                            <a href="">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/officialshop.png" alt="">
                                    <h5 class="benefit-title">Our Official Shop</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-4 text-center">
                            <a href="">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/brands.png" alt="">
                                    <h5 class="benefit-title">Brands</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-4 col-md-3 text-center">
                            <a href="">
                                <div class="benefit-detail boderless d-flex flex-column align-items-center"><img class="benefit-img" src="assets/images/icons/gift.png" alt="">
                                    <h5 class="benefit-title">Free Gift</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('inc/fab-button.php')
        <!-- End home5 product block-->
        <!-- End from the blog-->
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

@endif