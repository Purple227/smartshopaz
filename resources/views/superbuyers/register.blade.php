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
                                            <label for="title"> Title</label>
                                            <input type="text" name="title" class="form-control" id="title" v-model="registration.title">

                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="name" class="form-control" v-model="registration.userName" id="lastname" required>
                                            <label for="username">User Name</label>
                                            <p v-bind:class="{ 'text-success': registration.userName.length > 3, 'text-danger': registration.userName.length < 3 }"> @{{ registration.userName.length > 3 ? 'Looking Good' : 'Name field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="name" class="form-control" v-model="registration.firstName" id="lastname" required>
                                            <label for="username">First Name</label>
                                            <p v-bind:class="{ 'text-success': registration.firstName.length > 3, 'text-danger': registration.firstName.length < 3 }"> @{{ registration.firstName.length > 3 ? 'Looking Good' : 'Name field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="name" class="form-control" v-model="registration.lastName" id="lastname" required>
                                            <label for="username">Last Name</label>
                                            <p v-bind:class="{ 'text-success': registration.lastName.length > 3, 'text-danger': registration.lastName.length < 3 }"> @{{ registration.lastName.length > 3 ? 'Looking Good' : 'Name field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="email" v-model="registration.email" name="email" class="form-control" id="useremail" @change="emailMethod" required>
                                            <label for="useremail">Email</label>
                                            <p v-bind:class="{'text-success': !$v.registration.email.$invalid }" v-if="!$v.registration.email.$invalid"> @{{ utilities.email }} </p>
                                        </div>


                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="sponsor_code" class="form-control" v-model="registration.sponsorCode" id="sponsor" @change="sponsorMethod" required>
                                            <label for="sponsor"> Sponsor ID</label>
                                            <p v-if="registration.sponsorCode != null"> @{{ utilities.sponsor }} </p>
                                        </div>


                                        <div class="form-group form-group-custom mb-4" v-if='utilities.sponsorUserDetail != null'>
                                            <input type="text" name="sponsor_code" class="form-control" v-model="utilities.sponsorUserDetail.name" id="sponsor" disabled>

                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="number" name="ron_code" class="form-control" v-model="registration.RONCode" id="sponsor" @change='RONCodeMethod' required>
                                            <label for="sponsor"> RON Code</label>
                                            <p v-if="registration.RONCode != null"> @{{ utilities.RONCode }} </p>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" v-model="registration.phone" name="phone" class="form-control" id="phone">

                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="date" name="date_of_birth" class="form-control datepicker-here" v-model="registration.dateOfBirth" data-range="true" data-multiple-dates-separator=" - " data-language="en" />
                                            <p v-bind:class="{ 'text-success': registration.dateOfBirth.length > 3, 'text-danger': registration.dateOfBirth.length < 3 }"> @{{ registration.dateOfBirth.length > 3 ? 'Looking Good' : 'Date Of Birth field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <label for="username" v-if="registration.gender.length <= 3"> Gender </label>
                                            <select class="custom-select" required v-model="registration.gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>

                                            <p v-bind:class="{ 'text-success': registration.gender.length > 3, 'text-danger': registration.gender.length < 3 }"> @{{ registration.gender.length > 3 ? 'Looking Good' : 'Name field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="name" class="form-control" v-model="registration.address" id="lastname" required>
                                            <label for="username"> Address </label>
                                            <p v-bind:class="{ 'text-success': registration.address.length > 3, 'text-danger': registration.address.length < 3 }"> @{{ registration.address.length > 3 ? 'Looking Good' : 'Name field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="text" name="name" class="form-control" v-model="registration.LGA" id="lastname" required>
                                            <label for="username"> LGA </label>
                                            <p v-bind:class="{ 'text-success': registration.LGA.length > 3, 'text-danger': registration.LGA.length < 3 }"> @{{ registration.LGA.length > 3 ? 'Looking Good' : 'LGA field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <label for="username" v-if="registration.state <= 3" > State </label>
                                            <select class="custom-select" required v-model="registration.state">
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross Rive">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="FCT">Federal Capital Territory</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nasarawa">Nasarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                            </select>

                                            <p v-bind:class="{ 'text-success': registration.state.length > 3, 'text-danger': registration.state.length < 3 }"> @{{ registration.state.length > 3 ? 'Looking Good' : 'State field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                        <label for="username" v-if="registration.country.length <= 3"> Select Country </label>
                                            <select class="custom-select" v-model="registration.country">
                                                <option value="Nigeria"> Nigeria</option>
                                            </select>
                                            <p v-bind:class="{ 'text-success': registration.country.length > 3, 'text-danger': registration.country.length < 3 }"> @{{ registration.country.length > 3 ? 'Looking Good' : 'Country  field is required' }} </>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" v-model="registration.password" name="password" class="form-control" id="password" required>
                                            <label for="userpassword">Password</label>
                                            <p v-bind:class="{ 'text-success': registration.password.length >= 8, 'text-danger': registration.password.length < 8 }"> @{{ registration.password.length >= 8 ? 'Looking Good' : 'Password must be upto 8 characters' }} </p>
                                        </div>

                                        <div class="form-group form-group-custom mb-4">
                                            <input type="password" name="password_confirmation" v-model="registration.passwordConfirmation" class="form-control" id="confirm_password" required>
                                            <label for="userpassword">Confirm Password <i id='message'></i></label>
                                            <p v-bind:class="{ 'text-success': registration.password == registration.passwordConfirmation, 'text-danger': registration.password != registration.passwordConfirmation }"> @{{ registration.password == registration.passwordConfirmation ? 'Password match okay' : 'Not identical with password' }}</p>
                                        </div>


                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="privacy" class="custom-control-input" id="term-conditionCheck" v-model="registration.privacy" checked>
                                            <label class="custom-control-label font-weight-normal" for="term-conditionCheck">I accept <a href="terms-conditions" class="text-primary">Terms and Conditions</a></label>
                                        </div>
                                        <div class="mt-4">

                                            <!-- <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button> -->

                                            <button class="btn btn-primary btn-block waves-effect waves-light" @click="payWithPaystack" v-if="buttonLoader == false" :disabled="$v.registration.$invalid == true || registration.privacy == false || utilities.sponsorStatus == false || utilities.RONCodeStatus == false || utilities.emailStatus == false"> Pay and Register</button>


                                            <button class="btn btn-primary btn-block waves-effect waves-light" v-else> Please Wait </button>

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
        $('#password, #confirm_password').on('keyup', function() {
            if ($('#password').val() == $('#confirm_password').val()) {
                $('#message')('Matching').css('color', 'green');
            } else
                $('#message')('Passwords are not Matching').css('color', 'red');
        });
    </script>


</body>

</html>