<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Products | Smartshoppers Dashboard</title>
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
                                <h4 class="page-title mb-1">Products</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                    <li class="breadcrumb-item active">Edit</li>
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
                                            @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <b>oops! {{ $error }} </b>
                                        </div>
                                            @endforeach
@endif

                                      <form id="form" enctype="multipart/form-data" method="POST" action=" {{ route('patch.product', $product->id) }} ">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label for="to-input">Product Name</label>
                                                <input type="text" name="title" value="{{ $product->title }} " class="form-control" id="to-input" placeholder="Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="subject-input">Discount(%)</label>
                                                <input type="number" name="discount" value="{{ $product->discount}}" class="form-control" placeholder="Discount" />
                                            </div>
                                            <div class="form-group ">
                                                <label>Categories</label>
                                                <select class="selectize form-control" name="category_id">
                                                     <option value="{{ $product->category == null ? null : $product->category->id }}">{{ $product->category == null ? 'select category' : $product->category->name }}</option>
                                                    @foreach ($list_categories as $key => $category)
                                                    <option value=" {{ $category->id }} "> {{ $category->name }} </option>
                                                     @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <label>Brand</label>
                                                <select class="selectize form-control" id="siteID" class="abcd" name="brand_id">
                                                     <option value="{ $product->brand == null ? null : $product->brand->id }}">{{ $product->brand == null ? 'select brand' : $product->brand->name }}</option>
                                                    @foreach ($list_brands as $key => $brand)
                                                    <option value="{{ $brand->id }}"> {{ $brand->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                    <div class="">
                                                        <h5 class="font-size-14 mb-3">Product Type</h5>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="custominlineRadio1" name="type" class="custom-control-input" value="single" checked>
                                                            <label class="custom-control-label" for="custominlineRadio1">Single Option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="custominlineRadio2" name="type" class="custom-control-input" value="multi">
                                                            <label class="custom-control-label" for="custominlineRadio2">Multiple options</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row types" id="Typesingle">
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom01">Main Price(₦)</label>
                                                    <input type="number" name="main_price" value="{{$product->main_price }}" class="form-control" id="validationCustom01" placeholder="e.g: 20,000">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">Regular Price(₦)</label>
                                                    <input type="number" name="regular_price" value="{{ $product->regular_price}}" class="form-control" id="validationCustom02" placeholder="e.g: 23,000">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom02">SuperBuyers Price(₦)</label>
                                                    <input type="number" name="super_buyer_price" value="{{ $product->super_buyer_price }}" class="form-control" id="validationCustom02" placeholder="e.g: 20,100">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-3">
                                                    <label for="validationCustom01">Weight(kg)</label>
                                                    <input type="number" name="weight"  value="{{ $product->weight}}" class="form-control" id="validationCustom01" placeholder="Weight">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="types" id="Typemulti" style="display: none;">
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom01">Variation Name</label>
                                                        <input type="text" name="variation_name"  value="{{ $product->variation_name}}" class="form-control" id="validationCustom01" placeholder="e.g: Adidas" >
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="validationCustom01">Weight(kg)</label>
                                                        <input type="text" name="multiple_weight"  value="{{ $product->weight}}" class="form-control" id="validationCustom01" placeholder="e.g 20" >
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationCustom01">Main Price(₦)</label>
                                                        <input type="number" name="multiple_main_price" value="{{$product->multiple_main_price }}" class="form-control" id="validationCustom01" placeholder="e.g: 20,000">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationCustom02">Regular Price(₦)</label>
                                                        <input type="number" name="multiple_regular_price" value="{{$product->multiple_regular_price}}"  class="form-control" id="validationCustom02" placeholder="e.g: 23,000">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-3">
                                                        <label for="validationCustom02">SuperBuyers Price(₦)</label>
                                                        <input type="number" name=" multiple_super_buyer_price" value="{{$product->multiple_super_buyer_price}}"  class="form-control" id="validationCustom02" placeholder="e.g: 20,100">
                                                        <div class="valid-feedback">
                                                            Looks good!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
<textarea class="summernote" name="description"> {{$product->description}} </textarea>
                                            </div>

                                            <div class="form-group">
                                                <h4 class="header-title">Select Pictures</h4>

                                                <div>
                                                    <div class="dropzone">
                                                        <div class="fallback">
                                                            <input type="file" name="file" id="image" multiple="" class="d-none" onchange="image_select()">
                                                            <button class="btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()">Choose Images</button>
                                                            <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                                                                <!-- image preview -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-toolbar form-group mb-0">
                                                <div class="">
                                                   <button type="submit" class="btn btn-primary waves-effect waves-light"> <span>Update</span> <i class="mdi mdi-card-plus-outline ml-1"></i> </button>
                                                </div>
                                            </div>



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
        var images = [];

        function image_select() {
            var image = document.getElementById('image').files;
            for (i = 0; i < image.length; i++) {
                if (check_duplicate(image[i].name)) {
                    images.push({
                        "name": image[i].name,
                        "url": URL.createObjectURL(image[i]),
                        "file": image[i],
                    })
                } else {
                    alert(image[i].name + " is already added to the list");
                }
            }
            document.getElementById('form').reset();
            document.getElementById('container').innerHTML = image_show();
        }

        function image_show() {
            var image = "";
            images.forEach((i) => {
                image += `<div class="image_container d-flex justify-content-center position-relative">
   	  	  	  	  <img src="` + i.url + `" alt="Image">
   	  	  	  	  <span class="position-absolute" onclick="delete_image(` + images.indexOf(i) + `)">&times;</span>
   	  	  	  </div>`;
            })
            return image;
        }

        function delete_image(e) {
            images.splice(e, 1);
            document.getElementById('container').innerHTML = image_show();
        }

        function check_duplicate(name) {
            var image = true;
            if (images.length > 0) {
                for (e = 0; e < images.length; e++) {
                    if (images[e].name == name) {
                        image = false;
                        break;
                    }
                }
            }
            return image;
        }

        $(document).ready(function() {
            $("input[name$='type']").click(function() {
                var test = $(this).val();

                $("div.types").hide();
                $("#Type" + test).show();
            });
        });

        $(function() {
            $("select").select2();
        });
    </script>

</body>

</html>