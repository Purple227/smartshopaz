<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Withdrawal | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">
    <!-- Plugins css -->
    <link href="../assets-dash/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="../assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Responsive datatable examples -->
    <link href="../assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../assets-dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets-dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets-dash/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
        .image_container {
            height: 120px;
            width: 200px;
            border-radius: 6px;
            overflow: hidden;
            margin: 10px;
        }

        .image_container img {
            height: 100%;
            width: auto;
            object-fit: cover;
        }

        .image_container span {
            top: -6px;
            right: 8px;
            color: red;
            font-size: 28px;
            font-weight: normal;
            cursor: pointer;
        }
    </style>

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
                                <h4 class="page-title mb-1">Withdrawal</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Admins</a></li> -->
                                    <li class="breadcrumb-item active">Withdrawal</li>
                                </ol>
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
                                        <h5 class="header-title mb-4">Total Earnings</h5>
                                        <div class="media">
                                            <div class="media-body">
                                                <p class="text-muted mb-2">Total</p>
                                                <h4>₦ {{ $sum_monthly_link_bonus + $sum_bi_weekly_bonus + $sum_monthly_fulfilment_bonus + $sum_monthly_rank_bonus + $sum_monthly_spur_bonus }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-transparent p-3">
                                        <h5 class="header-title mb-0">Withdrawal</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">

                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Amount</p>
                                                    <h5 class="mb-0">₦ {{ $my_request_withdrawal_sum }} </h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-layer-group"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-transparent p-3">
                                        <h5 class="header-title mb-0">Current Balance</h5>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="media my-2">

                                                <div class="media-body">
                                                    <p class="text-muted mb-2">Amount</p>
                                                    <h5 class="mb-0">₦ {{ ($sum_monthly_link_bonus + $sum_bi_weekly_bonus + $sum_monthly_fulfilment_bonus + $sum_monthly_rank_bonus + $sum_monthly_spur_bonus) - ($my_request_withdrawal_sum) }}</h5>
                                                </div>
                                                <div class="icons-lg ml-2 align-self-center">
                                                    <!-- <i class="uim uim-layer-group"></i> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!--<div class="col-lg-4">-->
                            <!--    <div class="card">-->
                            <!--        <div class="card-header bg-transparent p-3">-->
                            <!--            <h5 class="header-title mb-0">Incentive Request</h5>-->
                            <!--        </div>-->
                            <!--        <ul class="list-group list-group-flush">-->
                            <!--            <li class="list-group-item">-->
                            <!--                <div class="media my-2">-->

                            <!--                    <div class="media-body">-->
                            <!--                        <p class="text-muted mb-2">Amount</p>-->
                            <!--                        <h5 class="mb-0">₦ 0</h5>-->
                            <!--                    </div>-->
                            <!--                    <div class="icons-lg ml-2 align-self-center">-->
                            <!-- <i class="uim uim-layer-group"></i> -->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </li>-->
                            <!--        </ul>-->
                            <!--    </div>-->
                            <!--</div>-->

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h1>Withdraw</h1>

                                        @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <b>oops! {{ $error }} </b>
                                        </div>
                                        @endforeach
                                        @endif



                                        @if(Session::has('status'))
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <b> {{ Session::get('status') }} </b>
                                        </div>
                                        @endif


                                        @if(Session::has('fail'))
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            {{ Session::get('fail') }}
                                        </div>
                                        @endif

                                        <form id="form" enctype="multipart/form-data" method="POST" action=" {{ route('super-buyer.bank.request') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="to-input">How much do you want to withdraw?</label>
                                                <input type="number" name="amount" class="form-control" id="to-input" placeholder="Amount" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Balance (Naira)</label>
                                                <input type="number" name="balance" class="form-control" value="{{ ($sum_monthly_link_bonus + $sum_bi_weekly_bonus + $sum_monthly_fulfilment_bonus + $sum_monthly_rank_bonus + $sum_monthly_spur_bonus) - ($my_request_withdrawal_sum) }}" readonly />
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Account Name</label>
                                                <input type="text" name="acc_name" class="form-control" value="" />
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Account Number (Nigeria)</label>
                                                <input type="number" name="acc_no" class="form-control" value="" />
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Bank</label>
                                                <input type="text" name="bank" class="form-control" value="" />
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Password</label>
                                                <input type="password" name="password" class="form-control" placeholder="password" required />
                                            </div>

                                            <div class="btn-toolbar form-group mb-0">
                                                <div class="">
                                                    <!-- <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-save"></i></button>
                                                    <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="far fa-trash-alt"></i></button> -->
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"> <span>Proceed</span> </button>
                                                </div>
                                            </div>



                                        </form>
                                    </div>
                                </div>



                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Incentive Request</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Incentive</th>
                                                    <th>Status</th>
                                                    <th>Date/Time</th>
                                                    <th>Transaction ID</th>
                                                    <th>Request Status</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="badge badge-soft-primary"> </td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><a href="">View Request</a> | <a href="">Request</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">Account Statement</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Amount</th>
                                                    <th>Transaction ID</th>
                                                    <th>Date/Time of Request</th>
                                                    <th>Request Status</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                <tr>
                                                    @foreach ($my_request_withdrawal as $key => $withdrawal)
                                                    <td>₦{{ $withdrawal->amount }}</td>
                                                    <td> {{$withdrawal->transaction_id }} </td>
                                                    <td> {{ $withdrawal->created_at }} </td>
                                                    <td class=" {{ $withdrawal->status == true ? 'badge badge-soft-success' :  'badge badge-soft-primary' }}"> {{$withdrawal->status == true ? 'Approved' : 'Waiting' }} </td>
                                                    <td>₦{{$withdrawal->balance}}</td>
                                                </tr>
                                                @endforeach
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

    <!-- <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script> -->
    <!-- Summernote js -->
    <script src="../assets-dash/libs/summernote/summernote-bs4.min.js"></script>

    <!-- email summernote init -->
    <script src="../assets-dash/js/pages/email-summernote.init.js"></script>
    <!-- dropzone js -->
    <script src="../assets-dash/libs/dropzone/min/dropzone.min.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>
    <script>
        $(document).ready(function() {
            $("input[name$='type']").click(function() {
                var test = $(this).val();

                $("div.types").hide();
                $("#Type" + test).show();
            });
        });
    </script>

</body>

</html>