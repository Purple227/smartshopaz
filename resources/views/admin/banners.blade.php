<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Bannners | Smartshoppers Dashboard</title>
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

</head>

<body data-topbar="colored">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('../partials/admin-topbar.php')

        <!-- ========== Left Sidebar Start ========== -->
        @include('../partials/admin-sidebar.php')
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
                                <h4 class="page-title mb-1">Bannners</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Bannners</a></li>
                                </ol>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="page-content-wrapper">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="header-title">Banner 1</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-1-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5">
                                            <h4 class="header-title">Banner 2</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview2(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-2-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5">
                                            <h4 class="header-title">Banner 3</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview3(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-3-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5">
                                            <h4 class="header-title">Banner 4</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview4(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-4-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5">
                                            <h4 class="header-title">Banner 5</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview5(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-5-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="mt-5">
                                            <h4 class="header-title">Banner 6</h4>
                                            <form action="#" class="dropzone">
                                                <!-- <div class="fallback"> -->
                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview6(event);">
                                                <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                <div class="preview">
                                                    <img id="file-ip-6-preview" style="width: 100%;">
                                                </div>
                                                <!-- </div> -->
                                                <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Update</button>
                                                </div>
                                            </form>
                                        </div>
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


            @include('../partials/admin-footer.php')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('../partials/admin-rightbar.php')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
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

        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview3(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-3-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview4(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-4-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview5(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-5-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview6(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-6-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

</body>

</html>