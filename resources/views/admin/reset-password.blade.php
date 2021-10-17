<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Reset Password | Smartshoppers Dashboard</title>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="./" class="logo"><img src="../assets-dash/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4"><b>abc@xyz</b>, create your new password</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Reset Password.</h5>
                                    <form class="form-horizontal" action="./">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="password" required>
                                                    <label for="userpassword">New Password</label>
                                                </div>
                                                
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="confirm_password" required>
                                                    <label for="userpassword">Confirm Password <i id='message'></i></label>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Reset</button>
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
        <script>
        $('#password, #confirm_password').on('keyup', function () {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message')('Matching').css('color', 'green');
            } else 
                $('#message')('Passwords are not Matching').css('color', 'red');
        });
    </script>
        

    </body>
</html>
