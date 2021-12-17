<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Products | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- DataTables -->
    <link href="../assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../assets-dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets-dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets-dash/css/app.min.css" rel="stylesheet" type="text/css" />

    <script src="https://js.paystack.co/v1/inline.js"></script>

</head>

<body data-topbar="colored">

    <!-- Begin page -->

    <div id="layout-wrapper">

        @include('partials/sb-topbar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('partials/sb-sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- Page-Title -->
                <div class="page-title-box">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="page-title mb-1">Products</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Products</li>
                                </ol>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="float-right">
                                    <div class="dropdown">
                                        <a href="" class="btn btn-dark btn-rounded " type="button">
                                            <i class="mdi mdi-plus mr-1"></i> Add New
                                        </a>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="page-content-wrapper">
                    <div class="container-fluid">

                        <div class="row">
@foreach($product as $product)
                            <div class="col-md-6 col-xl-3">

                                <!-- <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title font-size-16 mt-0"> @{{ product.title }} </h4>
                                        <h6 class="card-subtitle font-14 text-muted">NGN @{{ product.super_buyer_price }} </h6>
                                    </div>
                                    <img class="img-fluid" src="../assets-dash/images/small/img-4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text"> @{{ product.description.substring(0, 25) }} </p>
                                        <a href="#" class="card-link">SelectSizes</a>
                                        <a href="#" class="card-link" v-if="cart == null ? false : cart.some(check => check.id === product.id)" @click="removeFromCart(product.id)">Remove from cart</a>
                                        <a href="#" class="card-link" @click="addToCart(product.id, product.super_buyer_price , product.title, 1, product.image)" v-else>Add to cart</a>
                                    </div>
                                </div> -->
                                <div class="card">
                                <a href="{{ route('single.product', $product->slug) }}">
                                    <img class="img-fluid" src="{{ asset($product->image == null ? 'assets/images/product/product08.png' : $product->image ) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title font-size-16 mt-0"> {{ $product->title }}</h4>
                                        <h6 class="card-subtitle font-14 text-muted">NGN {{ $product->super_buyer_price - ($product->discount / 100)  }} </h6>
                                    </div>
                                    </a>
                                </div>

                            </div><!-- end col -->
                            @endforeach
                        </div>
                        <ul class="pagination pagination-rounded mb-0 text-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="mdi mdi-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="mdi mdi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end page-content-wrapper -->
            </div>
            <!-- End Page-content -->


            @include('partials/sb-footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('partials/sb-rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script  src="../assets-dash/libs/jquery/jquery.min.js"></script>
    <script src="../assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script  src="../assets-dash/libs/metismenu/metisMenu.min.js"></script>
    <script  src="../assets-dash/libs/simplebar/simplebar.min.js"></script>
    <script  src="../assets-dash/libs/node-waves/waves.min.js"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <!-- datepicker -->
    <script  src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

    <!-- apexcharts -->
    <script src="../assets-dash/libs/apexcharts/apexcharts.min.js"></script>

    <script  src="../assets-dash/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Jq vector map -->
    <script src="../assets-dash/libs/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets-dash/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="../assets-dash/js/pages/dashboard.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script  src="../assets-dash/js/iconify.min.js"></script>

</body>

</html>