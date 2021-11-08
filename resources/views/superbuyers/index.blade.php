
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Superbuyers</title>
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
                                <h4 class="page-title mb-1">Dashboard</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item active">Welcome to smartshoppers Dashboard</li>
                                </ol>
                            </div>
                            <div class="col-md-4">
                                <div class="float-right">
                                    <div class="dropdown">
                                        <a href="withdrawal" class="btn btn-light btn-rounded">
                                            <i class="iconify" data-icon="uim:exit"></i> Bank
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                                <h5>Welcome Back {{ Auth::user()->username }}</h5>
                                                <p class="text-primary">My Sponsor ID: {{ Auth::user()->sponsor_code }} </p>

                                                <div class="mt-4">
                                                    <!-- <a href="#" class="btn btn-primary btn-sm">View more <i class="mdi mdi-arrow-right ml-1"></i></a> -->
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
                                        <h5 class="header-title mb-4">Info</h5>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Grand Total</p>
                                                <h4>₦ 0</h4>
                                            </div>
                                            <div dir="ltr" class="ml-2">
                                                <input data-plugin="knob" data-width="56" data-height="56" data-linecap=round data-displayInput=false data-fgColor="#f15959" value="56" data-skin="tron" data-angleOffset="56" data-readOnly=true data-thickness=".17" />
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted">Total Number of Downlines</p>
                                                <h5 class="mb-0">0 <span class="font-size-14 text-muted ml-1">From previous period</span></h5>
                                            </div>

                                            <div class="align-self-end ml-2">
                                                <!-- <a href="#" class="btn btn-primary btn-sm">View more</a> -->
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted">Bi-weeekly Performance Bonus Summary</p>
                                                <h5 class="mb-0">₦ 0</h5>
                                            </div>

                                            <div class="align-self-end ml-2">
                                                <!-- <a href="#" class="btn btn-primary btn-sm">View more</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-transparent p-3">
                                        <h5 class="header-title mb-0">Info</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">

                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Monthly Rank Bonus</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-layer-group"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Monthly link bonus </p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-analytics"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Monthly spur</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-ruler"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Monthly Partners Premium Summary</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-box"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-transparent p-3">
                                        <h5 class="header-title mb-0">Info</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">

                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Monthly Fulfilment Bonus</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-layer-group"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2"> Total monthly Earnings</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-analytics"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Grand Total</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-ruler"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media my-2">
                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Total Number of Downlines</p>
                                                    <h5 class="mb-0">₦ 0</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-box"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Black Opal</h4>
                                            <p class="text-muted">Level 1</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/blackopal.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Red beryl</h4>
                                            <p class="text-muted">Level 2</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/redberyl.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Alexandrite</h4>
                                            <p class="text-muted">Level 3</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/alexandrite.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Emerald</h4>
                                            <p class="text-muted">Level 4</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/emerald.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Ruby</h4>
                                            <p class="text-muted">Level 5</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/ruby.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Jadeite</h4>
                                            <p class="text-muted">Level 6</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/jadeite.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="mt-3">Diamond</h4>
                                            <p class="text-muted">Level 7</p>
                                            <div class="icons-xl py-4">
                                                <img src="../assets-dash/images/icons/diamond.png" height="60px" alt="">
                                            </div>

                                            <div class="mt-1">
                                                <h3><sup></sup> 0 <span class="font-size-16">Users</span></h3>
                                                <div class="mt-1 mb-3">
                                                    <a href="#" class="btn btn-primary">View Downline</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- container-fluid -->
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
