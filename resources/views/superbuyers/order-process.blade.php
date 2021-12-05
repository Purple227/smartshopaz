<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Orders | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- DataTables -->
    <link href="{{ asset('assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-dash/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-dash/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-dash/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="https://js.paystack.co/v1/inline.js"></script>

</head>

<body data-topbar="colored">

<div id="app">

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
                                <h4 class="page-title mb-1">Order ID: #{{ $placed_order->order_unique_id }}</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Orders</li>
                                </ol>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="float-right">
                                    <div class="dropdown">
                                        <a href="add-new-product" class="btn btn-dark btn-rounded " type="button">
                                            <i class="mdi mdi-plus mr-1"></i> Add New Product
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
                            <div class="col-12">

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Items List</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Product Id</th>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                            @foreach ($order_products as $key => $order)
                                                <tr>
                                                    <td> {{  $key + 1 }} </td>
                                                    <td>{{ $order->product_name }}</td>
                                                    <td>₦{{ $order->price }} </td>
                                                    <td> {{ $order->quantity }}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <th>Sum Total</th>
                                                    <td>
                                                        ₦{{ $placed_order->total_price }}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                        <div class="card-body">
    
                                            <h4 class="header-title">Order Tracking</h4>
                                            
                                            <div class="form-group row">
                                                <label class="col-md-2 col-form-label">Order Status</label>
                                                <div class="col-md-10">
                                                <input type="email" class="form-control" id="to-input" value="in progress" readonly>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-md-2 col-form-label">Order Location</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" value="warehouse" id="example-text-input">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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

</div>

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