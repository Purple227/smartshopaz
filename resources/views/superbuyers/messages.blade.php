<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Email Inbox | Smartshoppers Dashboard</title>
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
                                    <h4 class="page-title mb-1">Messages</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Messages</a></li>
                                    <li class="breadcrumb-item active">Inbox</li>
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
                                <div class="col-xl-3">
                                    <div class="card h-100">
                                        <div class="card-body email-leftbar">
                                            <a href="email-compose.html" class="btn btn-primary btn-block btn-rounded waves-effect waves-light"><i class="mdi mdi-plus mr-1"></i> Compose</a>
    
                                            <div class="mail-list mt-4">
                                                <a href="#" class="active"><i class="mdi mdi-inbox mr-2"></i> Inbox <span class="ml-1 float-right">(18)</span></a>
                                                <a href="#"><i class="mdi mdi-star-outline mr-2"></i>Starred</a>
                                                <a href="#"><i class="mdi mdi-diamond-stone mr-2"></i>Important</a>
                                                <a href="#"><i class="mdi mdi-file-outline mr-2"></i>Draft</a>
                                                <a href="#"><i class="mdi mdi-send-check-outline mr-2"></i>Sent Mail</a>
                                                <a href="#"><i class="mdi mdi-trash-can-outline mr-2"></i>Trash</a>
                                            </div>
    
                                            <div>
                                                <h6 class="mt-4">Labels</h6>
            
                                                <div class="mail-list mt-1">
                                                    <a href="#"><span class="mdi mdi-circle mr-2 text-info"></span>In progress</a>
                                                    <a href="#"><span class="mdi mdi-circle mr-2 text-warning"></span>Pending</a>
                                                    <a href="#"><span class="mdi mdi-circle mr-2 text-danger"></span>Not Valid</a>
                                                    <a href="#"><span class="mdi mdi-circle mr-2 text-success"></span>Done</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-xl-9">
                                    <div class="row mt-4 mt-xl-0">
                                        <div class="col-md-7">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group mr-2 mb-3">
                                                    <button type="button" class="btn btn-light waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                    <button type="button" class="btn btn-light waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                    <button type="button" class="btn btn-light waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                                </div>
                                                <div class="btn-group mr-2 mb-3">
                                                    <button type="button" class="btn btn-light waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Team Manage</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="btn-toolbar justify-content-md-end" role="toolbar">
                                                <div class="btn-group ml-md-2 mb-3">
                                                    <button type="button" class="btn btn-light waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ml-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Team Manage</a>
                                                    </div>
                                                </div>
                
                                                <div class="btn-group ml-2 mb-3">
                                                    <button type="button" class="btn btn-light waves-light waves-effect dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        More <i class="mdi mdi-dots-vertical ml-1"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Mark as Unread</a>
                                                        <a class="dropdown-item" href="#">Mark as Important</a>
                                                        <a class="dropdown-item" href="#">Add to Tasks</a>
                                                        <a class="dropdown-item" href="#">Add Star</a>
                                                        <a class="dropdown-item" href="#">Mute</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#custom-primary" role="tab">
                                                        <i class="mdi mdi-inbox mr-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Customers</span> 
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#custom-social" role="tab">
                                                        <i class="mdi mdi-account-group-outline mr-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block"> Team</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#custom-promotion" role="tab">
                                                        <i class="mdi mdi-tag-multiple mr-2 align-middle font-size-18"></i> <span class="d-none d-md-inline-block">Promotion</span>
                                                    </a>
                                                </li>
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content pt-3">
                                                <div class="tab-pane active" id="custom-primary" role="tabpanel">
                                                    <ul class="message-list mb-0">
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk1">
                                                                    <label for="chk1" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Peter, me (3)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hello ??? <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                                </a>
                                                                <div class="date">Mar 6</div>
                                                            </div>
                                                        </li>
                            
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk2">
                                                                    <label for="chk2" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Susanna (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-warning badge mr-2">Pending</span>Since you asked... and i'm
                                                                    inconceivably bored at the train station ???
                                                                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                                </a>
                                                                <div class="date">Mar. 6</div>
                                                            </div>
                                                        </li>
                    
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk3">
                                                                    <label for="chk3" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Web In Progress Dennis</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Re: New mail settings ??? 
                                                                    <span class="teaser">Will you answer him asap?</span>
                                                                </a>
                                                                <div class="date">Mar 7</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk4">
                                                                    <label for="chk4" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (2)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Off on Thursday - 
                                                                    <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                                </a>
                                                                <div class="date">Mar 4</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk5">
                                                                    <label for="chk5" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Medium</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">This Week's Top Stories ??? 
                                                                    <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America???s Ego</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk6">
                                                                    <label for="chk6" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Death to Stock</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Montly High-Res Photos ??? 
                                                                    <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                    
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk7">
                                                                    <label for="chk7" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-success badge mr-2">Done</span>Last pic over my village ??? 
                                                                    <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="date">5:01 am</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk8">
                                                                    <label for="chk8" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                    ??? <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk9">
                                                                    <label for="chk9" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Infinity HR</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Sveriges Hetaste sommarjobb ???
                                                                    <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb p?? 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk10">
                                                                    <label for="chk10" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Revibe</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-danger badge mr-2">Not Valid</span>Weekend on Revibe ??? 
                                                                    <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                                </a>
                                                                <div class="date">Feb 27</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk11">
                                                                    <label for="chk11" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Erik, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Regarding our meeting ??? 
                                                                    <span class="teaser">That's great, see you on Thursday!</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk12">
                                                                    <label for="chk12" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">KanbanFlow</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Task assigned: Clone ARP's website
                                                                    ??? <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk13">
                                                                    <label for="chk13" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Tobias Berggren</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Let's go fishing! ??? 
                                                                    <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk14">
                                                                    <label for="chk14" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Charukaw, me (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hey man ??? <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk15">
                                                                    <label for="chk15" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Home again! ??? <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk16">
                                                                    <label for="chk16" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Stack Exchange</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                    ??? <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
            
                    
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="custom-social" role="tabpanel">
                                                    <ul class="message-list mb-0">
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk17">
                                                                    <label for="chk17" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                    ??? <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk18">
                                                                    <label for="chk18" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Peter, me (3)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hello ??? <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                                </a>
                                                                <div class="date">Mar 6</div>
                                                            </div>
                                                        </li>
                            
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk19">
                                                                    <label for="chk19" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Web In Progress Dennis</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Re: New mail settings ??? 
                                                                    <span class="teaser">Will you answer him asap?</span>
                                                                </a>
                                                                <div class="date">Mar 7</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk20">
                                                                    <label for="chk20" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (2)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Off on Thursday - 
                                                                    <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                                </a>
                                                                <div class="date">Mar 4</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk21">
                                                                    <label for="chk21" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Medium</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">This Week's Top Stories ??? 
                                                                    <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America???s Ego</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk22">
                                                                    <label for="chk22" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Susanna (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-warning badge mr-2">Pending</span>Since you asked... and i'm
                                                                    inconceivably bored at the train station ???
                                                                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                                </a>
                                                                <div class="date">Mar. 6</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk23">
                                                                    <label for="chk23" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Infinity HR</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Sveriges Hetaste sommarjobb ???
                                                                    <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb p?? 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk24">
                                                                    <label for="chk24" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Death to Stock</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Montly High-Res Photos ??? 
                                                                    <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                    
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk25">
                                                                    <label for="chk25" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-success badge mr-2">Done</span>Last pic over my village ??? 
                                                                    <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="date">5:01 am</div>
                                                            </div>
                                                        </li>
                                                        
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk26">
                                                                    <label for="chk26" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Erik, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Regarding our meeting ??? 
                                                                    <span class="teaser">That's great, see you on Thursday!</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk27">
                                                                    <label for="chk27" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">KanbanFlow</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Task assigned: Clone ARP's website
                                                                    ??? <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk28">
                                                                    <label for="chk28" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Tobias Berggren</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Let's go fishing! ??? 
                                                                    <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk29">
                                                                    <label for="chk29" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Charukaw, me (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hey man ??? <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk30">
                                                                    <label for="chk30" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Home again! ??? <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk31">
                                                                    <label for="chk31" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Revibe</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-danger badge mr-2">Not Valid</span>Weekend on Revibe ??? 
                                                                    <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                                </a>
                                                                <div class="date">Feb 27</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk32">
                                                                    <label for="chk32" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Stack Exchange</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                    ??? <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
            
                    
                                                    </ul>
                                                </div>
                                                <div class="tab-pane" id="custom-promotion" role="tabpanel">
                                                    <ul class="message-list mb-0">
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk33">
                                                                    <label for="chk33" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Peter, me (3)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hello ??? <span class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                                                </a>
                                                                <div class="date">Mar 6</div>
                                                            </div>
                                                        </li>
                            
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk34">
                                                                    <label for="chk34" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Susanna (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-warning badge mr-2">Pending</span>Since you asked... and i'm
                                                                    inconceivably bored at the train station ???
                                                                    <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                                                </a>
                                                                <div class="date">Mar. 6</div>
                                                            </div>
                                                        </li>
                    
                                                        
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk35">
                                                                    <label for="chk35" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Medium</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">This Week's Top Stories ??? 
                                                                    <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America???s Ego</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk36">
                                                                    <label for="chk36" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (2)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Off on Thursday - 
                                                                    <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4  4 mar 2014 at 5:55 pm</span>
                                                                </a>
                                                                <div class="date">Mar 4</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk37">
                                                                    <label for="chk37" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Death to Stock</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Montly High-Res Photos ??? 
                                                                    <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                                                </a>
                                                                <div class="date">Feb 28</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk38">
                                                                    <label for="chk38" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Web In Progress Dennis</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Re: New mail settings ??? 
                                                                    <span class="teaser">Will you answer him asap?</span>
                                                                </a>
                                                                <div class="date">Mar 7</div>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk39">
                                                                    <label for="chk39" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Randy, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-success badge mr-2">Done</span>Last pic over my village ??? 
                                                                    <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                                                </a>
                                                                <div class="date">5:01 am</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk40">
                                                                    <label for="chk40" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Andrew Zimmer</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Mochila Beta: Subscription Confirmed
                                                                    ??? <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk41">
                                                                    <label for="chk41" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Infinity HR</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Sveriges Hetaste sommarjobb ???
                                                                    <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb p?? 16 semesterorter iSverige.</span>
                                                                </a>
                                                                <div class="date">Mar 8</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk42">
                                                                    <label for="chk42" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Revibe</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-danger badge mr-2">Not Valid</span>Weekend on Revibe ??? 
                                                                    <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                                                </a>
                                                                <div class="date">Feb 27</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk43">
                                                                    <label for="chk43" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Erik, me (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Regarding our meeting ??? 
                                                                    <span class="teaser">That's great, see you on Thursday!</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk44">
                                                                    <label for="chk44" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">KanbanFlow</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Task assigned: Clone ARP's website
                                                                    ??? <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                                                </a>
                                                                <div class="date">Feb 24</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk45">
                                                                    <label for="chk45" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Tobias Berggren</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Let's go fishing! ??? 
                                                                    <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk46">
                                                                    <label for="chk46" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Charukaw, me (7)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">Hey man ??? <span class="teaser">Nah man sorry i don't. Should i get it?</span>
                                                                </a>
                                                                <div class="date">Feb 23</div>
                                                            </div>
                                                        </li>
                                                        <li class="unread">
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk47">
                                                                    <label for="chk47" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">me, Peter (5)</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject"><span class="badge-info badge mr-2">In Progress</span>Home again! ??? <span class="teaser">That's just perfect! See you tomorrow.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="col-mail col-mail-1">
                                                                <div class="checkbox-wrapper-mail">
                                                                    <input type="checkbox" id="chk48">
                                                                    <label for="chk48" class="toggle"></label>
                                                                </div>
                                                                <a href="#" class="title">Stack Exchange</a>
                                                            </div>
                                                            <div class="col-mail col-mail-2">
                                                                <a href="#" class="subject">1 new items in your Stackexchange inbox
                                                                    ??? <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                                                </a>
                                                                <div class="date">Feb 21</div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                            </div>
                            <!-- end row -->
    
                            <div class="row justify-content-end">
                                <div class="col-xl-9">
                                    <div class="row my-4">
                                        <div class="col-7">
                                            Showing 1 - 20 of 1,524
                                        </div>
                                        <div class="col-5">
                                            <div class="btn-group float-right">
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-sm btn-success waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
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

                
                @include('../partials/sb-footer.php')
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
                                <span class="mb-0 mt-1">Pending</span>
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
