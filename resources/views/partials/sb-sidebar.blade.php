<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li>
                    <a href="{{ route('super-buyer.home') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:bag"></i> -->
                        </div>
                        <span>Home</span>
                    </a>
                </li>

                <li @click='dropdownToggle=!dropdownToggle'>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>Genealogy</span>
                    </a>
                    <ul class=" sub-menu " v-bind:class="{ 'mm-show': dropdownToggle }" aria-expanded="false">
                        <li><a href="{{ route('genealogy', 'black-opal') }}"> Black Opal </a></li>
                        <li><a href="{{ route('genealogy', 'red-beryl') }}"> Red Beryl </a></li>
                        <li><a href="{{ route('genealogy', 'alexandrite') }}">  Alexandrite </a></li>
                        <li><a href="{{ route('genealogy', 'emerald') }}"> Emerald </a></li>
                        <li><a href="{{ route('genealogy', 'ruby') }}"> Ruby </a></li>
                        <li><a href="{{ route('genealogy', 'jadeite') }}"> Jadeite </a></li>
                        <li><a href="{{ route('genealogy', 'diamond') }}"> Diamond </a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('super-buyer.downline') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>Direct Downline</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('super-buyer.all-downline') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>All Downline Details</span>
                    </a>
                </li>


                <li>
                    <a href="{{ route('super-buyer.generation-view') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:record-audio"></i> -->
                        </div>
                        <span>Generation View</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('super-buyer.revenue') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:comment-plus"></i> -->
                        </div>
                        <span>Revenue</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('super-buyer.bank') }} " class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:grid"></i> -->
                        </div>
                        <!-- <span class="badge badge-pill badge-primary float-right">0</span> -->
                        <span>Bank</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('product.super-buyer') }}" class=" waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:box"></i> -->
                        </div>
                        <span>Mall</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('super-buyer.index') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:grid"></i> -->
                        </div>
                        <!-- <span class="badge badge-pill badge-primary float-right">0</span> -->
                        <span>Orders</span>
                    </a>
                </li>

                <li>
                    <a href=" {{ route('super-buyer.support') }}" class="waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:comment-plus"></i> -->
                        </div>
                        <span>Support</span>
                    </a>
                </li>

                <li @click='dropdownToggles=!dropdownToggles'>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <div class="d-inline-block icons-sm mr-1">
                            <!-- <i class="iconify" data-icon="uim:flip-v-alt"></i> -->
                        </div>
                        <span>My Account </span>
                    </a>
                    <ul class="sub-menu" v-bind:class="{ 'mm-show': dropdownToggles }" aria-expanded="false">
                    <li><a href="{{ route('super-buyer.user.profile') }}"> Profile </a></li>
                        <li><a href=" {{ route('change.password.super-buyer') }}"> Change Password </a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('logout') }}" class="waves-effect">
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