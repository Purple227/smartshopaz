<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Login | Smartshoppers Dashboard</title>
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

    <body class="bg-primary">

        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="#" class="logo"><img src="../assets-dash/images/logo-light.png" height="24" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Sign in to continue</h5>
                                    <form class="form-horizontal" action="./">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-danger alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Incorrect <b>Password</b>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" class="form-control" id="email" required>
                                                    <label for="username">Email</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="userpassword" required>
                                                    <label for="userpassword">Password</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="forgot-password" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">

                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>

                                                </div>

                                                <div class="mt-4 text-center">

                                                    <a href="{{ route('super-buyer.register') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Create an account</a>
                                                    
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
