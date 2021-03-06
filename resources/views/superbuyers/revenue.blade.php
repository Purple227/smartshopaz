<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Revenue | Smartshoppers Dashboard</title>
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

    <script src="https://js.paystack.co/v1/inline.js"></script>

</head>

<body data-topbar="colored">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('partials/sb-topbar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('partials/sb-sidebar')

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
                                <h4 class="page-title mb-1">Revenue</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Revenue</li>
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

                    <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Rank Progress</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th> S/N</th>
                                                    <th>Member (ID)</th>
                                                    <th>Name</th>
                                                    <th>Rank</th>
                                                    <th>Qualification Date</th>
                                                    <th>Total Number of downlines</th>
                                                    <th>Total group sales</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>SB-23453323</td>
                                                    <td>helen</td>
                                                    <td>Diamond</td>
                                                    <td>2/3/2021</td>
                                                    <td> 10</td>
                                                    <td>20</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Biweekly performance bonus</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Bonus receive Date</th>
                                                    <!--th>level</th-->
                                                    <th>percentage</th>
                                                    <th>remark</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                @foreach ($bi_weekly as $key => $revenue)
                                                    <td> {{ $revenue->unique_id }}</td>
                                                    <td> {{ $revenue->created_at }}</td>
                                                    <!-- td>Black Opal </td-->
                                                    <td> {{ $revenue->percentage }}</td>
                                                    <td> purchase of 50,000</td>
                                                    <td> {{ $revenue->amount }} </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Monthly Fulfillment bonus</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Bonus receivd Date</th>
                                                    <!--th>level</th-->
                                                    <th>percentage</th>
                                                    <th>remark</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                @foreach ($monthly_fulfilment as $key => $revenue)
                                                    <td> {{ $revenue->unique_id }}</td>
                                                    <td> {{ $revenue->created_at }}</td>
                                                    <!-- td>Black Opal </td-->
                                                    <td> {{ $revenue->percentage }}</td>
                                                    <td> purchase of 50,000</td>
                                                    <td> {{ $revenue->amount }} </td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Monthly Rank bonus</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Bonus receivd Date</th>
                                                    <!--th>level</th-->
                                                    <th>percentage</th>
                                                    <th>remark</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                @foreach ($monthly_rank as $key => $revenue)
                                                    <td> {{ $revenue->unique_id }}</td>
                                                    <td> {{ $revenue->created_at }}</td>
                                                    <!-- td>Black Opal </td-->
                                                    <td> {{ $revenue->percentage }}</td>
                                                    <td> purchase of 50,000</td>
                                                    <td> {{ $revenue->amount }} </td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Monthly Link bonus</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Bonus receivd Date</th>
                                                    <!-- th> level </th-->
                                                    <th>percentage</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    @foreach ($monthly_link_bonus as $key => $revenue)
                                                    <td> {{ $revenue->unique_id }}</td>
                                                    <td> {{ $revenue->created_at }}</td>
                                                    <!-- td>Black Opal </td-->
                                                    <td> {{ $revenue->percentage }}</td>
                                                    <td> {{ $revenue->amount }} </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Monthly Spur</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Incentive receive Date</th>
                                                    <!--th>level</th-->
                                                    <th>percentage</th>
                                                    <th>remark</th>
                                                    <th>Amount Rolled Over</th>
                                                    <th>Total Amount</th>
                                                    <th>Incentive cashout</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                @foreach ($monthly_link_bonus as $key => $revenue)
                                                    <td>{{ $revenue->unique_id }}</td>
                                                    <td>12/08/2021</td>
                                                    <!--td>Diamond</td-->
                                                    <td>10%</td>
                                                    <td>purchase of 50,000</td>
                                                    <td>???2,000</td>
                                                    <td>Car</td>
                                                    <th>5,000</th>
                                                    <td>???38,000</td>
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Monthly Partners Premium</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Pool Date</th>
                                                    <!--th>level</th-->
                                                    <th>Rank</th>
                                                    <th>Percentage</th>
                                                    <th>Remark</th>
                                                    <th>Amount</th>
                                                    <th>Total</th>
                                                    <!--<th>Balance</th>-->
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                @foreach ($monthly_link_bonus as $key => $revenue)
                                                    <td></td>
                                                    <td></td>
                                                    <!--td>Diamond</td-->
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <th></th>
                                                    <!--<td></td>-->
                                                @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
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