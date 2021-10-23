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

        <script src="https://js.paystack.co/v1/inline.js"></script>

    </head>

    <body class="bg-primary bg-pattern">

        <div class="account-pages my-1 pt-sm-" id="app">
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

                                        <div class="row">
                                            <div class="col-md-12">
                                            <div class="form-group form-group-custom mb-4">
                                                    <input type="text" name="title" class="form-control" id="title" v-model="registration.title">
                                                    <label for="username"> Title</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" name="name" class="form-control" v-model="registration.name" id="lastname" required>
                                                    <label for="username"> Name</label>
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="email" v-model="registration.email" name="email" class="form-control" id="useremail" required>
                                                    <label for="useremail">Email</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="number" v-model="registration.phone" name="phone" class="form-control" id="phone" >
                                                    <label for="useremail">Phone Number</label> 
                                                </div>
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" v-model="registration.password" name="password" class="form-control" id="password" required>
                                                    <label for="userpassword">Password</label>
                                                </div>
                                                
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" name="password_confirmation" v-model="registration.passwordConfirmation" class="form-control" id="confirm_password" required>
                                                    <label for="userpassword">Confirm Password <i id='message'></i></label>
                                                </div>
                                                
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="number" name="sponsor_id"  class="form-control" v-model="registration.sponsorCode" id="sponsor" required>
                                                    <label for="sponsor"> Sponsor ID</label>
                                                </div>

                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="privacy" class="custom-control-input" id="term-conditionCheck" checked>
                                                    <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="terms-conditions" class="text-primary">Terms and Conditions</a></label>
                                                </div>
                                                <div class="mt-4">

                                                    <!-- <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button> -->

                                                    <button class="btn btn-primary btn-block waves-effect waves-light"  @click="payWithPaystack" v-if="buttonLoader == false" :disabled="errorChecker"> Pay and Register</button>


                                                    <button class="btn btn-primary btn-block waves-effect waves-light"v-else> Please Wait </button>

                                                </div>
                                                <div class="mt-4 text-center">

                                                    <a href="{{ route('super-buyer.login') }}" class="text-muted"><i class="mdi mdi-account-circle mr-1"></i> Already have account?</a>

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

        <script src="{{ asset('js/app.js') }}" defer></script>

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
