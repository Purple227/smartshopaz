<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Ranks | Smartshoppers Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-dash/images/favicon.ico') }}">
    <!-- Plugins css -->
    <link href="{{ asset('assets-dash/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- DataTables -->
    <link href="{{ asset('assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="../assets-dash/libs/air-datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css" /> -->

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-dash/libs/summernote/summernote-bs4.css') }}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets-dash/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets-dash/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets-dash/css/app.min.css')  }}" rel="stylesheet" type="text/css" />
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

         @include('partials/admin-topbar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('partials/admin-sidebar')
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
                                <h4 class="page-title mb-1">Ranks</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ranks</a></li>
                                    <li class="breadcrumb-item active">Add New</li>
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

@if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">??</button>
                                            @foreach ($errors->all() as $error)
                                            <b>oops! {{ $error }} </b>
                                            @endforeach
                                        </div>
@endif

                                        <form id="form" enctype="multipart/form-data" method="POST" action=" {{ route('admin.rank.update', $rank->id)}}">

                                        @csrf
                                        @method('PATCH')

                                            <div class="form-group">
                                                <label for="to-input">Rank Name</label>
                                                <input type="text" name="name" value="{{ $rank->name }}" class="form-control" id="to-input" placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="to-input"> Level</label>
                                                <input type="number" name="level" value="{{ $rank->level }}" class="form-control" id="to-input" placeholder="Number of People">
                                            </div>

                                            <div class="form-group">
                                                <label for="to-input">No. of People</label>
                                                <input type="number" name="no_of_people" value="{{ $rank->no_of_people }}" class="form-control" id="to-input" placeholder="Number of People">
                                            </div>

                                            <div class="form-group">
                                                <h4 class="header-title">Add Icon</h4>

                                                <div>
                                                    <div class="dropzone">
                                                        <!-- <div class="fallback"> -->
                                                        <input type="file" name="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                                        <!-- <button class="btn btn-sm btn-primary" type="button">Choose Images</button> -->
                                                        <div class="preview">
                                                            <img id="file-ip-1-preview" style="width: 35px;">
                                                        </div>
                                                        <!-- </div> -->
                                                        <!-- <div class="dz-message needsclick">
                                                    <h4>Drop files here to upload</h4>
                                                </div> -->
                                                    </div>
                                                </div>
                                            </div>

    <button type="submit" class="btn btn-primary waves-effect waves-light"> <span> Update </span> <i class="mdi mdi-card-plus-outline ml-1"></i> </button>

                                        </form>
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


            @include('partials/admin-footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('partials/admin-rightbar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets-dash/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-dash/libs/node-waves/waves.min.js') }}"></script>

    <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

    <!-- <script src="../assets-dash/libs/air-datepicker/js/datepicker.min.js"></script>
    <script src="../assets-dash/libs/air-datepicker/js/i18n/datepicker.en.js"></script> -->
    <!-- Summernote js -->
    <script src="{{ asset('assets-dash/libs/summernote/summernote-bs4.min.js') }}"></script>

    <!-- email summernote init -->
    <script src="{{ asset('assets-dash/js/pages/email-summernote.init.js') }}"></script>
    <!-- dropzone js -->
    <script src="{{ asset('assets-dash/libs/dropzone/min/dropzone.min.js') }}"></script>

    <script src="{{ asset('assets-dash/js/app.js') }}"></script>
    <script src="{{ asset('assets-dash/js/iconify.min.js') }}"></script>
    <script>


        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

</body>

</html>