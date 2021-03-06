
<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="./" class="logo logo-dark" style="z-index:4000;">
                    <span class="logo-sm">
                        <img src="../assets-dash/images/logo-sm-dark.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets-dash/images/logo-super.png" alt="" height="20">
                    </span>
                </a>

                <a href="./" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="../assets-dash/images/logo-sm-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="../assets-dash/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn" @click="showSidebar">
                <i class="mdi mdi-backburger"></i>
            </button>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="mdi mdi-magnify"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ml-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light" data-toggle="modal" data-target="#myModal">My Cart(@{{ itemInCart }})</button>
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-bell-alert-outline"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="rounded-circle header-profile-use ti-user"></i>
                    <span class="d-none d-sm-inline-block ml-1"> {{ Auth::user()->username }} </span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('super-buyer.user.profile') }}"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Profile </a>
                    <a class="dropdown-item" href="{{ route('change.password.super-buyer') }}"><i class="mdi mdi-account-settings font-size-16 align-middle mr-1"></i> Change Password</a>
                    <!-- <a class="dropdown-item" href="login"><i class="mdi mdi-lock font-size-16 align-middle mr-1"></i> Lock screen</a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>

</header>
