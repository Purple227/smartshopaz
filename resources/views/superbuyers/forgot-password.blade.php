<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Forgot Password | Smartshoppers Dashboard</title>
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

        <div class="account-pages my-5 pt-sm-5" id="layout-wrapper" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="./" class="logo"><img src="../assets-dash/images/logo-light.png" height="24" alt="logo"></a>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Forgot Password</h5>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    Enter your <b> Username </b> and instructions will be sent to you!
                                                </div>

                                                <div class="form-group form-group-custom mt-5">
                                                    <input type="text" class="form-control" v-model="registration.userName" id="useremail" @change="userNameMethod" required>
                                                    <label for="useremail">Username</label>
                                                    <p :class="{ 'text-success': utilities.resetPassword == true, 'text-danger': utilities.resetPassword == false }" v-if="utilities.resetPassword != null"> @{{ utilities.resetPassword ? 'You Good To Go' : 'Incorrect Username' }} </p>
                                                    Enter your <b>Username</b> and instructions will be sent to you!
                                                </div>

                                                <div class="mt-4">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" :disabled="utilities.resetPassword == null || utilities.resetPassword == false" v-if="utilities.passwordResetEmailSender == null" @click="sendResetpassword"> Send Email </button>
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" disabled v-else> @{{ utilities.passwordResetEmailSender ? 'Credential Reset Succesfully Please Contact Administrator' : 'Credentials Reset Failed Please try Again' }} </button>
                                                </div>
                                                
                                            </div>
                                        </div>
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
        <script  src="{{ asset('js/app.js') }}" defer></script>
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
