
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Admin | Smartshoppers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="smartshoppers Admin CMS" name="description" />
        <meta content="Smartshoppers" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

        <!-- datepicker -->
        <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="../assets-dash/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="../assets-dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets-dash/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets-dash/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="colored">

        <!-- Begin page -->
        <div id="layout-wrapper">


            @include('partials/admin-topbar')

            <!-- ========== Left Sidebar Start ========== -->

            @include('partials/admin-sidebar')
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
                                    <h4 class="page-title mb-1">Dashboard</h4>
                                    <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to smartshoppers Dashboard</li>
                                    </ol>
                                </div>
                                {{--
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                --}}
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <div class="row">
                                                <div class="col-6">
                                                    <h5>Welcome Back !</h5>
                                                    <p class="text-muted">smartshoppers Dashboard</p>

                                                    <div class="mt-4">
                                                        <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-5 ml-auto">
                                                    <div>
                                                        <img src="../assets-dash/images/widget-img.png" alt="" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4"> Sale Report </h5>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">This month Sale</p>
                                                    <h4>₦ {{ $monthly_order_sale }}</h4>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted">Number of Sales</p>
                                                    <h5 class="mb-0"> {{ $total_number_of_sale}} <span class="font-size-14 text-muted ml-1">From previous period</span></h5>
                                                </div>

                                            </div>
                                            <hr>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p class="text-muted">Sales Revenue</p>
                                                    <h5 class="mb-0"> {{ $order_total_revenue}} <span class="font-size-14 text-muted ml-1">From previous period</span></h5>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>













                                <div class="col-xl-8">
                                    











                                    <div class="card">
                                        <div class="card-body">
                                            {{--
                                            <div class="float-right ml-2">
                                                <a href="#">View all</a>
                                            </div>
                                            --}}
                                            <h5 class="header-title mb-4">Latest Transaction</h5>

                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">status</th>
                                                            <th scope="col">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($top_five_transaction as $transaction)
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"> {{ $transaction->transaction_id }}</a>
                                                            </th>
                                                            <td> {{ $transaction->name }}</td>
                                                            <td> {{ $transaction->created_at }}</td>
                                                            <td>
                                                                <div class="badge badge-soft-secondary"> Confirm </div>
                                                            </td>
                                                            <td>₦{{ $transaction->amount }}</td>
                                                         
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mt-4">
                                                <ul class="pagination pagination-rounded justify-content-center mb-0">
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
                                        </div>
                                    </div>
                                </div>


                                {{--
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Revenue by Location</h5>

                                            <div id="usa-map"  style="height: 150px" class="mb-5"></div>

                                            <div class="table-responsive">
                                                <table class="table table-centered">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">California</th>
                                                            <td>₦ 8,257</td>
                                                            <td>
                                                                <div dir="ltr" class="ml-2">
                                                                    <input data-plugin="knob" data-width="36" data-height="36" data-linecap=round data-displayInput=false
                                                                    data-fgColor="#f15959" value="56" data-skin="tron" data-angleOffset="36"
                                                                    data-readOnly=true data-thickness=".2" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">New York</th>
                                                            <td>₦ 7,253</td>
                                                            <td>
                                                                <div dir="ltr" class="ml-2">
                                                                    <input data-plugin="knob" data-width="36" data-height="36" data-linecap=round data-displayInput=false
                                                                    data-fgColor="#f15959" value="42" data-skin="tron" data-angleOffset="36"
                                                                    data-readOnly=true data-thickness=".2" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>











                                </div>
                                --}}


                            </div>
                            <!-- end row -->

                            {{--
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-header bg-transparent p-3">
                                            <h5 class="header-title mb-0">Sales Status</h5>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="media my-2">

                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Number of Sales</p>
                                                        <h5 class="mb-0"> {{ $total_number_of_sale }} </h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-layer-group"></i>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media my-2">
                                                    <div class="media-body">
                                                        <p class="text-muted mb-2">Sales Revenue </p>
                                                        <h5 class="mb-0">₦ {{ $order_total_revenue }} </h5>
                                                    </div>
                                                    <div class="icons-lg ml-2 align-self-center">
                                                        <i class="uim uim-analytics"></i>
                                                    </div>
                                                </div>
                                            </li>
                                          
                                          
                                        </ul>
                                    </div>
                                </div>

                                {{--
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title mb-4">Social Source</h5>
                                            <div id="radial-chart" class="apex-charts"></div>

                                            <div class="text-center mt-3">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-primary mr-1"></i> Facebook</p>
                                                            <h5>₦ 1,625</h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div>
                                                            <p class="text-muted"><i class="mdi mdi-circle text-warning mr-1"></i> Twitter</p>
                                                            <h5>₦ 1,504</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                --}}

                                {{--
                                <div class="col-lg-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="header-title">Recent Activity</h5>

                                            <div id="activity-chart" class="apex-charts"></div>
                                        </div>
                                    </div>
                                </div>
                                --}}

                            </div>
                            --}}
                            <!-- end row -->

                            {{--
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="float-right ml-2">
                                                <a href="#">View all</a>
                                            </div>
                                            <h5 class="header-title mb-4">Latest Transaction</h5>

                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Transaction ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">status</th>
                                                            <th scope="col">Amount</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1345</a>
                                                            </th>
                                                            <td>Danny Johnson</td>
                                                            <td>26 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>₦124</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1346</a>
                                                            </th>
                                                            <td>Alvin Newton</td>
                                                            <td>21 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-warning">Pending</div>
                                                            </td>
                                                            <td>₦112</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1347</a>
                                                            </th>
                                                            <td>Bennie Perez</td>
                                                            <td>15 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>₦106</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1348</a>
                                                            </th>
                                                            <td>Steven Kwon</td>
                                                            <td>11 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-primary">Confirm</div>
                                                            </td>
                                                            <td>₦115</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                <a href="#"># XO1349</a>
                                                            </th>
                                                            <td>Bryan Roark</td>
                                                            <td>08 Jan</td>
                                                            <td>
                                                                <div class="badge badge-soft-danger">Cancel</div>
                                                            </td>
                                                            <td>₦105</td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                                        <i class="mdi mdi-eye"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                        <i class="mdi mdi-pencil"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                        <i class="mdi mdi-trash-can"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="mt-4">
                                                <ul class="pagination pagination-rounded justify-content-center mb-0">
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
                                        </div>
                                    </div>
                                </div>




                            </div>
                            --}}
                            <!-- end row -->

                        </div> <!-- container-fluid -->
                    </div>
                    <!-- end page-content-wrapper -->
                </div>
                <!-- End Page-content -->


                @include('partials/admin-footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        @include('partials/admin-rightbar')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="../assets-dash/libs/jquery/jquery.min.js"></script>
        <script src="../assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../assets-dash/libs/metismenu/metisMenu.min.js"></script>
        <script src="../assets-dash/libs/simplebar/simplebar.min.js"></script>
        <script src="../assets-dash/libs/node-waves/waves.min.js"></script>

        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <!-- datepicker -->
        <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
        <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

        <!-- apexcharts -->
        <script src="../assets-dash/libs/apexcharts/apexcharts.min.js"></script>

        <script src="../assets-dash/libs/jquery-knob/jquery.knob.min.js"></script>

        <!-- Jq vector map -->
        <script src="../assets-dash/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="../assets-dash/libs/jqvmap/maps/jquery.vmap.usa.js"></script>

        <script src="../assets-dash/js/pages/dashboard.init.js"></script>

        <script src="../assets-dash/js/app.js"></script>
        <script src="../assets-dash/js/iconify.min.js"></script>

    </body>
</html>
