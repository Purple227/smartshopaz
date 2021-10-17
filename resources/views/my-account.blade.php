<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="blog, business, clean, clear, cooporate, creative, design web, flat, marketing, minimal, portfolio, shop, shopping, unique">
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
                    <li> <a class="breadcrumb-link" href="index.html"> <i class="fas fa-home"></i>Home</a></li>
                    <li> <a class="breadcrumb-link active" href="#">My Account</a></li>
                </ul>
            </div>
        </div>
        <!-- End breadcrumb-->
        <div class="blog-layout">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="blog-detail">
                            <div class="row">
                                <div class="col-12">
                                    <div class="blog-detail_comment">
                                        <div class="customer-reviews_block">
                                            <div class="customer-review">
                                                <div class="row">
                                                    <div class="col-12 col-sm-3 col-lg-2">
                                                        <div class="customer-review_left">
                                                            <div class="customer-review_img text-center"><img class="img-fluid" src="assets/images/profile.png" alt="customer image"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-9 col-lg-10">
                                                        <div class="customer-comment">
                                                            <h5 class="comment-date">Hello</h5>
                                                            <h3 class="customer-name">Omagbemi Steph,</h3>
                                                            <p class="customer-commented">abc@xyz.com</p>

                                                            <button class="like-comment" onclick="openTab('Orders')">Orders</button>
                                                            <button class="like-comment" onclick="openTab('Wishlist')">Wishlist</button>
                                                            <button class="like-comment" onclick="openTab('Settings')">Settings</button>
                                                        </div>
                                                        <div class="options">

                                                            <div id="Orders" class="w3-container tab">
                                                                <h3 class="customer-name">Orders</h3>
                                                                <div class="product-table">
                                                                    <table class="table table-responsive">
                                                                        <colgroup>
                                                                            <col span="1" style="width: 25%">
                                                                            <col span="1" style="width: 25%">
                                                                            <col span="1" style="width: 25%">
                                                                            <col span="1" style="width: 25%">
                                                                        </colgroup>
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="product-name" scope="col">OrderID</th>
                                                                                <th class="product-price" scope="col">Status</th>
                                                                                <th class="product-quantity" scope="col">Items</th>
                                                                                <th class="product-total" scope="col">Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="product-name">SS-01032</td>
                                                                                <td class="product-price">Pending</td>
                                                                                <td class="product-quantity">4</td>
                                                                                <td class="product-total">₦460.00</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div id="Wishlist" class="w3-container tab" style="display:none">
                                                                <h3 class="customer-name">Wishlist</h3>
                                                                <div class="product-table">
                                                                    <table class="table table-responsive">
                                                                        <colgroup>
                                                                            <col span="1" style="width: 50%">
                                                                            <col span="1" style="width: 25%">
                                                                            <col span="1" style="width: 25%">
                                                                            <col span="1" style="width: 25%">
                                                                        </colgroup>
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="product-name" scope="col">Product ID</th>
                                                                                <th class="product-price" scope="col">Name</th>
                                                                                <th class="product-quantity" scope="col">status</th>
                                                                                <th class="product-total" scope="col">Option</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="product-name">SS-01032</td>
                                                                                <td class="product-price">Hat</td>
                                                                                <td class="product-quantity">Available</td>
                                                                                <td class="product-total"><a href="product-single">ViewItem</a></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div id="Settings" class="w3-container tab" style="display:none">
                                                                <h2>Tokyo</h2>
                                                                <form>
                                                                    <label for="user-name">Name *</label>
                                                                    <input class="no-round-input" id="user-name" type="text">
                                                                    <label for="user-name">Username or email address *</label>
                                                                    <input class="no-round-input" id="user-name" type="email">
                                                                    <label for="password">Password *</label>
                                                                    <input class="no-round-input" id="password" type="text">
                                                                    <label for="confirm">Comfirm password *</label>
                                                                    <input class="no-round-input" id="confirm" type="text">
                                                                    <div class="account-function">
                                                                        <a href="" class="no-round-btn">Update</a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('inc/fab-button.php')
        @include('inc/main-partners.php')
        <!-- End partner-->
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
        function openTab(cityName) {
            var i;
            var x = document.getElementsByClassName("tab");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>
</body>

</html>