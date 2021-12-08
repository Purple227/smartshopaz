<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Products | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-dash/images/favicon.ico') }}">
    <!-- Plugins css -->
    <link href="{{ asset('assets-dash/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-dash/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-dash/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-dash/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-dash/css/app.min.css')  }}" rel="stylesheet" type="text/css" />

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
                                <h4 class="page-title mb-1">Product name</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Product name</li>
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

                        <div class="card">
                            <div class="card-body">
<!--
                                <h4 class="header-title">With controls</h4>
                                <p class="card-title-desc">Adding in the previous and next controls:</p>
-->
                                <div class="row">

                                    <div class="col-md-6">
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">

                                                <div class="carousel-item active">
                                                    <img class="d-block img-fluid mx-auto" src="{{ asset('assets-dash/images/small/img-4.jpg') }}" alt="First slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!-- end col -->
                                        <p class="text-primary"> {{-- $single_product->category->name == null ? 'Category' : $single_product->category->name --}}</p>
                                        <h3 class=""> @{{ superbuyerSingleProduct.single_product.title }}</h3>
                                        <h5> NGN @{{ selectedVariation ==null ? superbuyerSingleProduct.single_product.super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100) : superbuyerSingleProduct.product_variety[selectedVariation].super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100)}} </h5>
                                        <!-- <li class="list-group-item"> -->
                                        <label class="sr-onl text-primary" for="inlineFormInputName2">Description</label>
                                        <p> @{{ superbuyerSingleProduct.single_product.description }}</p>
                                        <div class="media my-2">

                                            <div class="media-body">
                                                <form class="form-inline">
                                                    <input type="number" value="1500" class="d-none">

                                                    <div class="mt-3 mt-sm-0 mr-sm-3" id="inlineFormInputName2">
                                                        <select class="form-control" v-model="selectedVariation">
                                                        <option :value="null" disabled> Select Variation </option>
                                                            <option v-for="(product, index) in superbuyerSingleProduct.product_variety" :value="index"> @{{ product.variation_name }}</option>                                                            
                                                        </select>
                                                    </div>

                                                    <button type="button"  class="btn btn-primary mt-3 mt-sm-0" v-if="cart == null ? false : cart.some(check => check.id ==   superbuyerSingleProduct.single_product.id)" @click="removeFromCart(selectedVariation ==null ? superbuyerSingleProduct.single_product.id : superbuyerSingleProduct.product_variety[selectedVariation].id)"> Remove From Cart </button>
                                                    <button type="button"  class="btn btn-primary mt-3 mt-sm-0" @click="addToCart(selectedVariation == null ? superbuyerSingleProduct.single_product.id : superbuyerSingleProduct.product_variety[selectedVariation].id,selectedVariation ==null ? superbuyerSingleProduct.single_product.super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100) : superbuyerSingleProduct.product_variety[selectedVariation].super_buyer_price - (superbuyerSingleProduct.single_product.discount / 100),selectedVariation == null ? superbuyerSingleProduct.single_product.title + '(Default)' :superbuyerSingleProduct.single_product.title + '(' + superbuyerSingleProduct.product_variety[selectedVariation].variation_name + ')', 1, superbuyerSingleProduct.single_product.image, selectedVariation == null ? superbuyerSingleProduct.single_product.main_price : superbuyerSingleProduct.product_variety[selectedVariation].main_price)" v-else> Add To Cart </button>

                                                </form>
                                            </div>
                                            <div class="icons-lg ml-2 align-self-center">
                                                <!-- <i class="uim uim-layer-group"></i> -->
                                            </div>
                                        </div>
                                        <!-- </li> -->

                                        <div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

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
    <script src="{{ asset('assets-dash/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/node-waves/waves.min.js') }}"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets-dash/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets-dash/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets-dash/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets-dash/js/pages/datatables.init.js') }}"></script>

    <script src="{{ asset('assets-dash/js/app.js') }}"></script>
    <script src="{{ asset('assets-dash/js/iconify.min.js') }}"></script>

</body>

</html>