<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->

            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Basic</li>

                @if(Auth::user()->account_type != 'ron')

                <li>
                    <a href="index" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:bag"></i></div>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="calendar" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:schedule"></i></div>
                        <span>Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="messages" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:comment-message"></i></div>
                        <span>Messages</span>
                    </a>
                </li> -->

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:grids"></i></div>
                        <span>Manage Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="faqs">FAQs</a></li>
                        <li><a href="return-policy">Return Policy</a></li>
                        <li><a href="delivery">Delivery</a></li>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="terms-conditions">Terms & Conditions</a></li>
                        <li><a href="sell-on-smartshoppers">Sell on smartshoppers</a></li>
                    </ul>
                </li>

                <li>
                    <a href="blog-posts" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:document-layout-left"></i></div>
                        <span class="badge badge-pill badge-primary float-right">07</span>
                        <span>Blog Posts</span>
                    </a>
                </li>

                <li class="menu-title">Shop</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:box"></i></div>
                        <span> Product </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.product') }}"> Add Product</a></li>
                        <li><a href=" {{ route('list.product') }}"> Products </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:star"></i></div>
                        <span> Brand </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.brand') }}"> Add Brand </a></li>
                        <li><a href=" {{ route('list.brand') }}"> Brands </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:window-grid"></i></div>
                        <span>Banners</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.banner') }}">Banner Ads</a></li>
                        <li><a href="{{ route('admin.slider') }}">Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:layers-alt"></i></div>
                        <span> Category </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.catgory') }}"> Add Category</a></li>
                        <li><a href=" {{ route('list.category') }}"> Categories </a></li>
                    </ul>
                </li>

                <li>
                    <a href="orders" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:grid"></i></div>
                        <span class="badge badge-pill badge-primary float-right">07</span>
                        <span>Orders</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.delivery.fee') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:repeat"></i></div>
                        <span>Delivery Price</span>
                    </a>
                </li>

                <li class="menu-title">Management</li>

                <li>
                    <a href="admins" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:padlock"></i></div>
                        <span>Admins</span>
                    </a>
                </li>

                <li>
                    <a href="users" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:record-audio"></i></div>
                        <span>Users</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('admin.list.super-buyer') }} " class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:circle-layer"></i></div>
                        <span>Super Buyers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.register.fee') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:sorting"></i></div>
                        <span>Register Fee</span>
                    </a>
                </li>
                <li>
                    <a href="bonuses" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:chart"></i></div>
                        <span>Bonuses</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:layers-alt"></i></div>
                        <span> Incentive </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.add.incentive') }}"> Add Incentive </a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:layers-alt"></i></div>
                        <span> Rank </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.rank') }}"> Add Rank</a></li>
                        <li><a href=" {{ route('admin.rank.list') }}"> List Ranks </a></li>
                    </ul>
                </li>
                @else
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:layers-alt"></i></div>
                        <span> RON Code </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add.ron.code') }}"> Add RON code</a></li>
                        <li><a href=" {{ route('list.ron.code') }}"> List of RON Codes </a></li>
                    </ul>
                </li>
                @endif
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>