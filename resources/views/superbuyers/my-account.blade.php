<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>My account | Smartshoppers Dashboard</title>
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
    <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

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
                                <h4 class="page-title mb-1">Account</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Account</li>
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
                                        <h4 class="header-title">Information</h4>

                                        <form class="needs-validation" novalidate>
                                            <div class="row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom09">Title</label>
                                                    <input type="text" class="form-control" id="validationCustom09" placeholder="Title" value="{{ Auth::user()->title }}" readonly required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Name</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" readonly value="{{ Auth::user()->name }}" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                              
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Email</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" value="{{ Auth::user()->email }}" readonly required>
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom10">Phone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">+234</span>
                                                        </div>
                                                        <input type="number" class="form-control" id="validationCustom10" placeholder="Phone" aria-describedby="inputGroupPrepend" value="{{ Auth::user()->phone }}" readonly required>
                                                        <div class="invalid-feedback">
                                                            Please choose a username.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Date of Birth</label>
                                                    <input type="text" class="form-control datepicker-here" data-range="true" readonly value="{{ Auth::user()->date_of_birth }}" data-multiple-dates-separator=" - " data-language="en" />
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Address.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom04">Gender</label>
                                                    <select class="custom-select" required>
                                                        <option selected> {{ Auth::user()->gender }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom06">Sponsor ID</label>
                                                    <input type="text" class="form-control" id="validationCustom06" placeholder="Sponsor ID" value="{{ Auth::user()->sponsor_code }}" readonly required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Address</label>
                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Address" value="{{Auth::user()->address }}" readonly required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Address.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom04">LGA</label>
                                                    <input type="text" class="form-control" id="validationCustom04" placeholder="LGA" value="{{ Auth::user()->LGA }}" readonly required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid LGA.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>State</label>
                                                    <select class="custom-select" required>
                                                        <option selected> {{ Auth::user()->state }} </option>
                                                    </select>
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Country</label>
                                                    <select class="custom-select" required>
                                                        <option selected> {{ Auth::user()->country }} </option>
                                                    </select>
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit" disabled>Update</button>
                                        </form>
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

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="../assets-dash/libs/jquery/jquery.min.js"></script>
    <script src="../assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-dash/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets-dash/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets-dash/libs/node-waves/waves.min.js"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <!-- Required datatable js -->
    <script src="../assets-dash/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets-dash/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets-dash/libs/jszip/jszip.min.js"></script>
    <script src="../assets-dash/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets-dash/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../assets-dash/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script>

    <!-- Datatable init js -->
    <script src="../assets-dash/js/pages/datatables.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>

</body>

</html>