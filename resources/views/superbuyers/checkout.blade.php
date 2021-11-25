<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Checkout | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- DataTables -->
    <link href="../assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/summernote/summernote-bs4.css" rel="stylesheet" type="text/css" />

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
                                <h4 class="page-title mb-1">Checkout</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Cart</a></li>
                                    <li class="breadcrumb-item active"> Checkout</li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="page-content-wrapper">
                    <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-8">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">SHIPPING DETAILS</h4>
                                        <p class="card-title-desc"></p>

                                        <form class="needs-validation" novalidate>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Receiver's First Name</label>
                                                    <input type="text" class="form-control" v-model="registration.firstName" id="validationCustom03" placeholder="First Name" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Name.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Receiver's Last Name</label>
                                                    <input type="text" class="form-control" id="validationCustom03" v-model="registration.lastName" placeholder="Last Name" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Name.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom03">Phone Number</label>
                                                    <input type="number" class="form-control" v-model="registration.phone == null ? '{{ Auth::user()->phone}}' : registration.phone" id="validationCustom03" placeholder="Phone" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Phone Number.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom04">Address</label>
                                                    <input type="text" class="form-control" v-model="registration.address == null ? '{{ Auth::user()->address}}' : registration.address" id="validationCustom04" placeholder="LGA" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid Address.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>State</label>
                                                    <select class="custom-select" required v-model="registration.state == null ? registration.state = '{{ Auth::user()->state }}' : registration.state">
                                                        <option value="registration.phone"> lol </option>
                                                        <option value="abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="Akwa Ibom">Akwa Ibom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
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
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label>Country</label>
                                                    <select class="custom-select" required>
                                                        <option value="nigeria">Nigeria</option>
                                                    </select>
                                                    <!-- <div class="invalid-feedback">Example invalid custom select feedback</div> -->
                                                </div>
                                                <div class="col-md-12 mb-3 text-primary">
                                                    <label>Payment Method</label>
                                                    <select class="custom-select" v-model="registration.paymentMethod" required>
                                                    <option value="online">Online - Card</option>
                                                        <option value="">Bank Transfer</option>
                                                        
                                                    </select>
                                                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                                                </div>
                                            </div>
                                           
                                            <!-- <button class="btn btn-primary" type="submit">Complete</button> -->
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            <div class="col-md-4">

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Cart</h4>
                                        <p class="card-title-desc"></p>

                                        <table id="shoppingCart" class="table table-condensed table-responsive">
                                            <thead>
                                                <tr>
                                                    <th style="width:40%">Product</th>
                                                    <th style="width:25%">Quantity</th>
                                                    <th style="width:35%">Amount(₦)</th>
                                                    <!-- <th style="width:16%"></th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr v-for="(item, index) in cart" :key="index">>
                                                    <td data-th="Product">
                                                        <h6 class="text-primary"> @{{ item.name }}</h6>
                                                    </td>
                                                    <td data-th="Quantity">
                                                        <input type="number" class="form-control form-control-sm text-center" :value="item.count" readonly>
                                                    </td>
                                                    <td data-th="Price">@{{ item.price }}</td>
                                                    <!-- <td class="actions" data-th="">
                                                        <div class="text-right">
                                                            <button class="btn btn-white bg-white btn-md mb-2">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Subtotal(₦):</td>
                                                    <td> 
                                                        @{{ sumInCart  }}</td>
                                                </tr>
                                                <!--tr>
                                                    <td></td>
                                                    <td>Tax(7.5%):</td>
                                                    <td>2,300</td>
                                                </tr -->
                                                <tr>
                                                    <td></td>
                                                    <td>Total(₦):</td>
                                                    <td> @{{ sumInCart + deliveryFee }} </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <button class="btn btn-primary btn-block" type="submit" @click="cartCheckout('{{Auth::user()->id }}', '{{ Auth::user()->name }}', '{{ Auth::user()->email }}', sumInCart + deliveryFee, '{{ Auth::user()->account_type}}', '{{ Auth::user()->phone}}', sumInCart, itemInCart, )" >Proceed to Payment</button>
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

    <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script>
    <!-- Summernote js -->
    <script src="../assets-dash/libs/summernote/summernote-bs4.min.js"></script>

    <!-- email summernote init -->
    <script src="../assets-dash/js/pages/email-summernote.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>

</body>

</html>