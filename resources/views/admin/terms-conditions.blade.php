<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Terms & Conditions | Smartshoppers Dashboard</title>
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
                                    <h4 class="page-title mb-1">Terms & Conditions</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                    <li class="breadcrumb-item active">Terms & Conditions</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-rounded dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings-outline mr-1"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <div class="page-content-wrapper">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-10">
                                                    <div class="text-center mt-4">
                                                        <h4>Frequently Asked Questions</h4>
                                                        <p class="text-muted">If several languages coalesce, the grammar of the resulting language</p>
                                                    </div>

                                                    <div class="row mt-5">
                                                        <div class="col-lg-4">
                                                            <div class="card border shadow-none">
                                                                <div class="card-body">
                                                                    <div class="media">
                                                                        <div class="icons-md mr-3">
                                                                            <i class="uim uim-layer-group"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="mb-1">General Questions</h5>
                                                                            <p class="text-muted">If several languages coalesce</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="card-footer text-center">
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="card border shadow-none">
                                                                <div class="card-body">
                                                                    <div class="media">
                                                                        <div class="icons-md mr-3">
                                                                            <i class="uim uim-lock"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="mb-1">Privacy Policy</h5>
                                                                            <p class="text-muted">Neque porro quisquam est</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="card-footer text-center">
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="card border shadow-none">
                                                                <div class="card-body">
                                                                    <div class="media">
                                                                        <div class="icons-md mr-3">
                                                                            <i class="uim uim-repeat"></i>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h5 class="mb-1">Help & Support</h5>
                                                                            <p class="text-muted">Sed ut perspiciatis unde</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="card-footer text-center">
                                                                    <a href="#">View more</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5">
                                                <div class="col-lg-7">
                                                    <div>
                                                        <h5 class="mb-3">General Questions</h5>
                                                        <div class="accordion custom-accordion" id="accordionExample">
                                                            <div class="card shadow-none mb-2">
                                                                <a data-toggle="collapse" href="#collapseOne" class="faq" aria-expanded="true" aria-controls="collapseOne">
                                                                    <div class="card-header" id="headingOne">
                                                                        <h6 class="mb-0 faq-question">
                                                                            <i class="mdi mdi-help text-primary h5 mr-3"></i>What is Lorem Ipsum?
                                                                            <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                                        </h6>
                                                                    </div>
                                                                </a>
                                
                                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <p class="text-muted mb-0 faq-ans">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what languages are members of the same family.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- collapse one end -->

                                                            <div class="card shadow-none mb-2">
                                                                <a class="collapsed faq" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                    <div class="card-header" id="headingTwo">
                                                                        <h6 class="mb-0 faq-question">
                                                                            <i class="mdi mdi-help text-primary h5 mr-3"></i>Where does it come from?
                                                                            <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                                        </h6>
                                                                    </div>
                                                                </a>

                                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <p class="text-muted mb-0 faq-ans">To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words. If several languages coalesce of the resulting language.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- collapse two end -->

                                                            <div class="card shadow-none mb-2">
                                                                <a class="collapsed faq" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                                    <div class="card-header" id="headingThree">
                                                                        <h6 class="mb-0 faq-question">
                                                                            <i class="mdi mdi-help text-primary h5 mr-3"></i>Why do we use it?
                                                                            <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                                        </h6>
                                                                    </div>
                                                                </a>

                                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <p class="text-muted mb-0 faq-ans">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages new common will be more simple.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- collapse two end -->
                                                        </div>
                                                    </div>

                                                    <div class="mt-5">
                                                        <h5 class="mb-3">Privacy Policy</h5>
                                                        <div class="accordion custom-accordion" id="accordionExample2">
                                                            <div class="card shadow-none mb-2">
                                                                <a data-toggle="collapse" href="#collapseOne2" class="faq" aria-expanded="true" aria-controls="collapseOne2">
                                                                    <div class="card-header" id="headingOne2">
                                                                        <h6 class="mb-0 faq-question">
                                                                            <i class="mdi mdi-help text-primary h5 mr-3"></i>Where can I get some?
                                                                            <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                                        </h6>
                                                                    </div>
                                                                </a>
                                
                                                                <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <p class="text-muted mb-0 faq-ans">Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar, their pronunciation and their most common words.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- collapse one end -->

                                                            <div class="card shadow-none mb-2">
                                                                <a class="collapsed faq" data-toggle="collapse" href="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo2">
                                                                    <div class="card-header" id="headingTwo2">
                                                                        <h6 class="mb-0 faq-question">
                                                                            <i class="mdi mdi-help text-primary h5 mr-3"></i>What is Lorem Ipsum?
                                                                            <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                                        </h6>
                                                                    </div>
                                                                </a>

                                                                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <p class="text-muted mb-0 faq-ans">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- collapse two end -->

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 ml-auto">
                                                    <div class="mt-4 mt-lg-0">
                                                        <div class="icons-md mb-4">
                                                            <i class="uim uim-comment-message"></i>
                                                        </div>
                                                        <h5>Can't find what you are looking for?</h5>
                                                        <div class="text-muted">
                                                            <p class="mb-4">To achieve this, it would be necessary to have uniform grammar, pronunciation and common words</p>
                                                        </div>
                                                        <div>
                                                            <button type="button" class="btn btn-primary mt-1 mr-2 waves-effect waves-light"><i class="mdi mdi-email-outline mr-1"></i> Email Us</button>
                                                            <button type="button" class="btn btn-info mt-1 waves-effect waves-light"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

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
        <div class="right-bar">
            <div data-simplebar class="h-100">
    
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom rightbar-nav-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link py-3 active" data-toggle="tab" href="#chat-tab" role="tab">
                            <i class="mdi mdi-message-text font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#tasks-tab" role="tab">
                            <i class="mdi mdi-format-list-checkbox font-size-22"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3" data-toggle="tab" href="#settings-tab" role="tab">
                            <i class="mdi mdi-settings font-size-22"></i>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content text-muted">
                    <div class="tab-pane active" id="chat-tab" role="tabpanel">
                
                        <form class="search-bar py-4 px-3">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="mdi mdi-magnify"></span>
                            </div>
                        </form>

                        <h6 class="px-4 py-3 mt-2 bg-light">Group Chats</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-success"></i>
                                <span class="mb-0 mt-1">App Development</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-warning"></i>
                                <span class="mb-0 mt-1">Office Work</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 mb-2 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1 text-danger"></i>
                                <span class="mb-0 mt-1">Personal Group</span>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item pl-3 d-block">
                                <i class="mdi mdi-checkbox-blank-circle-outline mr-1"></i>
                                <span class="mb-0 mt-1">Freelance</span>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Favourites</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-10.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Andrew Mackie</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Rory Dalyell</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To an English person, it will seem like simplified</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-9.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jaxon Dunhill</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">To achieve this, it would be necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <h6 class="px-4 py-3 mt-4 bg-light">Other Chats</h6>

                        <div class="p-2 pb-4">
                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Jackson Therry</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">Everyone realizes why a new common language.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Charles Deakin</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The languages only differ in their grammar.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Ryan Salting</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">If several languages coalesce the grammar of the resulting.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status online"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Sean Howse</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">It will seem like simplified English.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status busy"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Dean Coward</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">The new common language will be more simple.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset notification-item">
                                <div class="media">
                                    <div class="position-relative align-self-center mr-3">
                                        <img src="../assets-dash/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="user-pic">
                                        <i class="mdi mdi-circle user-status away"></i>
                                    </div>
                                    <div class="media-body overflow-hidden">
                                        <h6 class="mt-0 mb-1">Hayley East</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-0 text-truncate">One could refuse to pay expensive translators.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="tab-pane" id="tasks-tab" role="tabpanel">
                        <h6 class="p-3 mb-0 mt-4 bg-light">Working Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">App Development<span class="float-right">75%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Database Repair<span class="float-right">37%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Backup Create<span class="float-right">52%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <h6 class="p-3 mb-0 mt-4 bg-light">Upcoming Tasks</h6>

                        <div class="p-2">
                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Sales Reporting<span class="float-right">12%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">Redesign Website<span class="float-right">67%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="text-reset item-hovered d-block p-3">
                                <p class="text-muted mb-0">New Admin Design<span class="float-right">84%</span></p>
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </a>
                        </div>

                        <div class="p-3 mt-2">
                            <a href="javascript: void(0);" class="btn btn-success btn-block waves-effect waves-light">Create Task</a>
                        </div>

                    </div>
                    <div class="tab-pane" id="settings-tab" role="tabpanel">
                            <h6 class="px-4 py-3 bg-light">General Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Online Status</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check1" name="settings-check1" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check1">Show your status to all</label>
                            </div>

                            <h6 class="mt-4">Auto Updates</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check2" name="settings-check2" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check2">Keep up to date</label>
                            </div>

                            <h6 class="mt-4">Backup Setup</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check3" name="settings-check3">
                                <label class="custom-control-label font-weight-normal" for="settings-check3">Auto backup</label>
                            </div>

                        </div>

                        <h6 class="px-4 py-3 mt-2 bg-light">Advanced Settings</h6>

                        <div class="p-4">
                            <h6 class="font-weight-medium">Application Alerts</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check4" name="settings-check4" checked="">
                                <label class="custom-control-label font-weight-normal" for="settings-check4">Email Notifications</label>
                            </div>

                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check5" name="settings-check5">
                                <label class="custom-control-label font-weight-normal" for="settings-check5">SMS Notifications</label>
                            </div>

                            <h6 class="mt-4">API</h6>
                            <div class="custom-control custom-switch mb-1">
                                <input type="checkbox" class="custom-control-input" id="settings-check6" name="settings-check6">
                                <label class="custom-control-label font-weight-normal" for="settings-check6">Enable access</label>
                            </div>

                        </div>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
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


        <script src="../assets-dash/js/app.js"></script>
        <script src="../assets-dash/js/iconify.min.js"></script>

    </body>
</html>
