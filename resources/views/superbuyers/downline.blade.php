<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Downlines | Superbuyers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Smartshoppers Admin CMS" name="description" />
    <meta content="Smartshoppers" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets-dash/images/favicon.ico">

    <!-- DataTables -->
    <link href="../assets-dash/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="../assets-dash/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="../assets-dash/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets-dash/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets-dash/css/tree.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets-dash/css/app.min.css" rel="stylesheet" type="text/css" />
    <style>
        /*----------------genealogy-scroll----------*/

        .genealogy-scroll::-webkit-scrollbar {
            width: 5px;
            height: 8px;
        }

        .genealogy-scroll::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #e4e4e4;
        }

        .genealogy-scroll::-webkit-scrollbar-thumb {
            background: #212121;
            border-radius: 10px;
            transition: 0.5s;
        }

        .genealogy-scroll::-webkit-scrollbar-thumb:hover {
            background: #d5b14c;
            transition: 0.5s;
        }


        /*----------------genealogy-tree----------*/
        .genealogy-body {
            white-space: nowrap;
            overflow-y: hidden;
            padding: 50px;
            min-height: 500px;
            padding-top: 10px;
            text-align: center;
        }

        .genealogy-tree {
            display: inline-block;
        }

        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
            padding-left: 0px;
            display: flex;
            justify-content: center;
        }

        .genealogy-tree li {
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }

        .genealogy-tree li::before,
        .genealogy-tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 2px solid #ccc;
            width: 50%;
            height: 18px;
        }

        .genealogy-tree li::after {
            right: auto;
            left: 50%;
            border-left: 2px solid #ccc;
        }

        .genealogy-tree li:only-child::after,
        .genealogy-tree li:only-child::before {
            display: none;
        }

        .genealogy-tree li:only-child {
            padding-top: 0;
        }

        .genealogy-tree li:first-child::before,
        .genealogy-tree li:last-child::after {
            border: 0 none;
        }

        .genealogy-tree li:last-child::before {
            border-right: 2px solid #ccc;
            border-radius: 0 5px 0 0;
            -webkit-border-radius: 0 5px 0 0;
            -moz-border-radius: 0 5px 0 0;
        }

        .genealogy-tree li:first-child::after {
            border-radius: 5px 0 0 0;
            -webkit-border-radius: 5px 0 0 0;
            -moz-border-radius: 5px 0 0 0;
        }

        .genealogy-tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 2px solid #ccc;
            width: 0;
            height: 20px;
        }

        .genealogy-tree li a {
            text-decoration: none;
            color: #666;
            font-family: arial, verdana, tahoma;
            font-size: 11px;
            display: inline-block;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
        }

        .genealogy-tree li a:hover+ul li::after,
        .genealogy-tree li a:hover+ul li::before,
        .genealogy-tree li a:hover+ul::before,
        .genealogy-tree li a:hover+ul ul::before {
            border-color: #fbba00;
        }

        /*--------------memeber-card-design----------*/
        .member-view-box {
            padding: 0px 20px;
            text-align: center;
            border-radius: 4px;
            position: relative;
        }

        .member-image {
            width: 60px;
            position: relative;
        }

        .member-image img {
            width: 60px;
            height: 60px;
            border-radius: 6px;
            background-color: #000;
            z-index: 1;
        }

        .member-details {
            font-weight: 100;
            font-size: 14px;
        }
    </style>

</head>

<body data-topbar="colored">

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('../partials/sb-topbar.php')

        <!-- ========== Left Sidebar Start ========== -->
        @include('../partials/sb-sidebar.php')
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
                                <h4 class="page-title mb-1">Downlines</h4>
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Dowlines</li>
                                </ol>
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="float-right">
                                    <div class="dropdown">
                                        <a href="" class="btn btn-dark btn-rounded " type="button">
                                            <i class="mdi mdi-plus mr-1"></i> Add New Post
                                        </a>
                                    </div>
                                </div>
                            </div> -->
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
                                    <h5>View Hierarchy</h5>
                                        <div class="row">
                                            <div class="body genealogy-body genealogy-scroll text-center">
                                                <div class="genealogy-tree">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                    <div class="member-image">
                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                        <div class="member-details">
                                                                            Smartshoppers
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <ul class="active">
                                                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                            <div class="member-image">
                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                <div class="member-details">
                                                                                user 1
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-1
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-2
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-3
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-3-1
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-3-2
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-3-3
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-4
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-5
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-6
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            user 1-7
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-7-1
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-7-2
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                    <ul>
                                                                                        <li>
                                                                                            <a href="javascript:void(0);">
                                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                                    <div class="member-image">
                                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                        <div class="member-details">
                                                                                                            user 1-7-2-1
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:void(0);">
                                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                                    <div class="member-image">
                                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                        <div class="member-details">
                                                                                                            user 1-7-2-2
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="javascript:void(0);">
                                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                                    <div class="member-image">
                                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                        <div class="member-details">
                                                                                                            user 1-7-2-3
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    user 1-7-3
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);">
                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                            <div class="member-image">
                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                <div class="member-details">
                                                                                    user 2
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            John Doe
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            John Doe
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">
                                                                                <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                    <div class="member-image">
                                                                                        <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                        <div class="member-details">
                                                                                            John Doe
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a>
                                                                            <ul>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="javascript:void(0);">
                                                                                        <div class="member-view-box"><img src="../assets-dash/images/icons/redberyl.png" height="15px" alt="">
                                                                                            <div class="member-image">
                                                                                                <i class="rounded-circle header-profile-use ti-user text-primary"></i>
                                                                                                <div class="member-details">
                                                                                                    John Doe
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul id="tree1">
                                                    <li><a href="#">View Downline Hierarchy</a>
                                                    <li><a href="#">Smartshoppers <img src="../assets-dash/images/icons/diamond.png" height="20px" alt=""></a>

                                                        <ul>
                                                            <li>level 1 <img src="../assets-dash/images/icons/blackopal.png" height="20px" alt="">
                                                                <ul>
                                                                    <li>level 1 <img src="../assets-dash/images/icons/blackopal.png" height="20px" alt="">
                                                                        <ul>
                                                                            <li>level 1 </li>
                                                                            <li>level 2</li>
                                                                            <li>level 3</li>
                                                                            <li>level 4</li>
                                                                            <li>level 5</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>level 2</li>
                                                                    <li>level 3</li>
                                                                    <li>level 4</li>
                                                                    <li>level 5</li>
                                                                </ul>
                                                            </li>
                                                            <li>level 2 <img src="../assets-dash/images/icons/redberyl.png" height="20px" alt=""></li>
                                                            <li>level 3 <img src="../assets-dash/images/icons/redberyl.png" height="20px" alt=""></li>
                                                            <li>level 4</li>
                                                            <li>level 5</li>
                                                        </ul>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <ul id="tree2">
                                                    <li><img src="../assets-dash/images/icons/blackopal.png" height="20px" alt=""> Black Opal (level 1)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/redberyl.png" height="20px" alt=""> Red Beryl (level 1)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/alexandrite.png" height="20px" alt=""> Alexandrite (level 2)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/emerald.png" height="20px" alt=""> Emerald (level 3)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/ruby.png" height="20px" alt=""> Ruby (level 4)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/jadeite.png" height="20px" alt=""> Jadeite (level 5)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                    <li><img src="../assets-dash/images/icons/Diamond.png" height="20px" alt=""> Diamond (level 6)
                                                        <ul>
                                                            <li>ade (SB0001)</li>
                                                            <li>john(SB0002)</li>
                                                            <li>Kennedy (SB0003)</li>
                                                            <li>helen (SB0004)</li>
                                                            <li>Ron (SB0005)</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
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


            @include('../partials/sb-footer.php')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('../partials/sb-rightbar.php')
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

    <!-- Required datatable js -->
    <script src="../assets-dash/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="../assets-dash/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets-dash/libs/jszip/jszip.min.js"></script>
    <script src="../assets-dash/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets-dash/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="../assets-dash/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets-dash/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="../assets-dash/js/pages/datatables.init.js"></script>

    <script src="../assets-dash/js/app.js"></script>
    <script src="../assets-dash/js/tree.js"></script>
    <script src="../assets-dash/js/iconify.min.js"></script>
    <script>
        $(function() {
            $('.genealogy-tree ul').hide();
            $('.genealogy-tree>ul').show();
            $('.genealogy-tree ul.active').show();
            $('.genealogy-tree li').on('click', function(e) {
                var children = $(this).find('> ul');
                if (children.is(":visible")) children.hide('fast').removeClass('active');
                else children.show('fast').addClass('active');
                e.stopPropagation();
            });
        });
    </script>

</body>

</html>