<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Downlines | Superbuyers</title>
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
    <link href="../assets-dash/css/tree.css" rel="stylesheet" type="text/css" />
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
                                <h4 class="page-title mb-1">Direct Downlines</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Direct Dowlines</li>
                                </ol>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="float-right">
                                    <div class="dropdown">
                                        <a href="" class="btn btn-dark btn-rounded " type="button">
                                            <i class="mdi mdi-plus mr-1"></i> Add New Post
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

                                        <h4 class="header-title">Direct Downline Details</h4>
                                        <p class="card-title-desc"></p>

                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <b>oops! </b>
                                        </div>
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <b>Added Successfully</b>
                                        </div>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>s/n</th>
                                                    <th>Member ID</th>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Date joined</th>
                                                    <th>Amount Paid</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>0</td>
                                                    <td>SB-0001</td>
                                                    <td>Helen</td>
                                                    <td>Alexandrite</td>
                                                    <td>abc@superbuyers.com</td>
                                                    <td>0800000</td>
                                                    <td>12/10/2021</td>
                                                    <th>20,000</th>
                                                </tr>
                                            </tbody>
                                        </table>
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

    <!-- Datatable init js -->
    <script src="../assets-dash/js/pages/datatables.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/tree.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>
    <script>
        $(function() {
            $('.genealogy-tree ul').hide();
            $('.genealogy-tree>ul').show();
            $('.genealogy-tree ul.active').show();
            $('.genealogy-tree li').on('click', function(e) {
                var children = $(this).find('> ul');
                if (children.is(":visible")) children.hide('fast').removeClass('active');
                else children.show('fast').addClass('active');
                e.stopPropagation();
            });
        });
    </script>

</body>

</html>