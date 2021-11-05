<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Blog Posts | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- DataTables -->
    <link href="../assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />

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

        @include('../partials/sb-topbar.php')

        <!-- ========== Left Sidebar Start ========== -->
        @include('../partials/sb-sidebar.php')
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
                                <h4 class="page-title mb-1">Blog</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Blog</a></li>
                                    <li class="breadcrumb-item active">Edit Post</li>
                                </ol>
                            </div>
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

                                        <form>
                                            <div class="form-group">
                                                <label for="to-input">Title</label>
                                                <input type="email" class="form-control" id="to-input" placeholder="Title" value="this is the title">
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Date</label>
                                                <input type="text" class="form-control datepicker-here" placeholder="Date" data-min-view="days" data-view="days" data-date-format="dd M yyyy" data-language="en" value="12 Aug 2021"/>
                                            </div>
                                            <div class="form-group">
                                                <div class="summernote">

                                                </div>
                                            </div>

                                            <div class="btn-toolbar form-group mb-0">
                                                <div class="">
                                                    <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-save"></i> Update</button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-trash-alt"></i> Delete</button>
                                                </div>
                                            </div>

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


            @include('../partials/sb-footer.php')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('../partials/sb-rightbar.php')
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

    <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
        <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script>
    <!-- Summernote js -->
    <script src="../assets-dash/libs/summernote/summernote-bs4.min.js"></script>

    <!-- email summernote init -->
    <script src="../assets-dash/js/pages/email-summernote.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>

</body>

</html>