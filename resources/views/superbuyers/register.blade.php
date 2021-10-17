<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Register | Smartshoppers Dashboard</title>
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

        <div class="account-pages my-1 pt-sm-">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-1">
                            <a href="./" class="logo"><img src="../assets-dash/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-0"></h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Register Account.</h5>
                                    <form class="form-horizontal" action="./">

                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="title" required>
                                                    <label for="username"> Title</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="firstname" required>
                                                    <label for="username"> First Name</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="lastname" required>
                                                    <label for="username"> Last Name</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" class="form-control" id="useremail" required>
                                                    <label for="useremail">Email</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="number" class="form-control" id="phone" required>
                                                    <label for="useremail">Phone Number</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="password" required>
                                                    <label for="userpassword">Password</label>
                                                </div>
                                                
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="confirm_password" required>
                                                    <label for="userpassword">Confirm Password <i id='message'></i></label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="sponsor" required>
                                                    <label for="sponsor"> Sponsor ID</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="ron" required>
                                                    <label for="ron"> RON Code</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="term-conditionCheck" required>
                                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="terms-conditions" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                                <div class="mt-4">
                                                    <!-- <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button> -->
                                                    <a href="register-stage2" class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</a>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="login" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>
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
