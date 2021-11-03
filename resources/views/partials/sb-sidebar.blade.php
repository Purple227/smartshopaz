<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Basic</li>

                <li>
                    <a href="index" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:bag"></i> -->
                        </div>
                        <span>Home</span>
                    </a>
                </li>

                @if ( Auth::user()->complete_registration == 1)

                <li>
                    <a href="products" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:box"></i> -->
                        </div>
                        <span>Mall</span>
                    </a>
                </li>

                <li>
                    <a href="orders" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:grid"></i> -->
                        </div>
                        <span class="badge badge-pill badge-primary float-right">0</span>
                        <span>Orders</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>Genealogy</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="genealogy">Black Opal</a></li>
                        <li><a href="genealogy">Red Beryl</a></li>
                        <li><a href="genealogy">Alexandrite</a></li>
                        <li><a href="genealogy">Emerald</a></li>
                        <li><a href="genealogy">Ruby</a></li>
                        <li><a href="genealogy">Jadeite</a></li>
                        <li><a href="genealogy">Diamond</a></li>
                    </ul>
                </li>
                <li>
                    <a href="my-downline" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>Downline</span>
                    </a>
                </li>
                <li>
                    <a href="downline" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>All Downline Details</span>
                    </a>
                </li>
                <li>
                    <a href="generation-view" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:record-audio"></i> -->
                        </div>
                        <span>Generation View</span>
                    </a>
                </li>

                <li>
                    <a href="users-list" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:star-half-alt"></i> -->
                        </div>
                        <span class="badge badge-pill badge-primary float-right">1</span>
                        <span>Direct Downline</span>
                    </a>
                </li>
                <li>
                    <a href="bank" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:grid"></i> -->
                        </div>
                        <span class="badge badge-pill badge-primary float-right">0</span>
                        <span>Bank</span>
                    </a>
                </li>
                <li>
                    <a href="support" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:comment-plus"></i> -->
                        </div>
                        <span>Support</span>
                    </a>
                </li>
                <li>
                    <a href="revenue" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:comment-plus"></i> -->
                        </div>
                        <span>Revenue</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <!-- <div class="d-inline-block icons-sm mr-1"><i class="iconify" data-icon="uim:layers-alt"></i></div> -->
                        <span> My Account </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('my.account.code') }}"> My Profile</a></li>
                        <li><a href=" {{ route('change.password.code') }}"> Change Password </a></li>
                    </ul>
                </li>
                <li>
                    <a href="login" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:padlock"></i> -->
                        </div>
                        <span>Logout</span>
                    </a>
                </li>

                @endif


                <li>
                    <a href="login" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:padlock"></i> -->
                        </div>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>