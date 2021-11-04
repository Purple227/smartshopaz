<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Successful Page | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="../assets-dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets-dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets-dash/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary bg-pattern">

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="mt-4 text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-6">
                                <img src="../assets-dash/images/success.png" alt="" width="60px" class="img-fluid mx-auto d-block">
                            </div>
                        </div>

                        <h1 class="mt-5 text-uppercase text-white font-weight-bold mb-3">CONGRATULATION</h1>
                        <h5 class="text-white-50">Registration was successful, you can now access your dashboard</h5>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item row">
                                <div class="col-md-6"><b>Full Name</b></div>
                                <div class="col-md-6"> {{ Session::get('registration_info.name') }} </div>
                            </li>

                            <li class="list-group-item row">
                                <div class="col-md-6"><b>Username</b></div>
                                <div class="col-md-6"> {{ Session::get('registration_info.username') }} </div>
                            </li>

                            <li class="list-group-item row">
                                <div class="col-md-6"><b>Member ID </b></div>
                                <div class="col-md-6"> {{ Session::get('registration_info_sponsor_code')  }}</div>
                            </li>

                            <li class="list-group-item row">
                                <div class="col-md-6"><b>Email </b></div>
                                <div class="col-md-6">{{ Session::get('registration_info.email') }}  </div>
                            </li>

                            <li class="list-group-item row">
                                <div class="col-md-6"><b>Password </b></div>
                                <div class="col-md-6"> {{ Session::get('registration_info_password') }} </div>
                            </li>

                            <li class="list-group-item row text-center">
                                <a href="#" class="card-link"><i class="mdi mdi-content-copy"></i> Copy</a>
                                <a href="{{ route('super-buyer.login') }}" class="card-link text-success">Done <i class="mdi mdi-check-all"></i></a>
                            </li>
                            
                        </ul>

                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->

    <!-- JAVASCRIPT -->
    <script src="../assets-dash/libs/jquery/jquery.min.js"></script>
    <script src="../assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets-dash/libs/metismenu/metisMenu.min.js"></script>
    <script src="../assets-dash/libs/simplebar/simplebar.min.js"></script>
    <script src="../assets-dash/libs/node-waves/waves.min.js"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>


    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>

</body>

</html>