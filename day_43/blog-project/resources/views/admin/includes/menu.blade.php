<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo_sm.png" alt="" height="16">
                    </span>
    </a>

    <!-- LOGO -->
    <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a  href="{{route('dashboard')}}" aria-expanded="false"
                   aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>

            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCrm" aria-expanded="false" aria-controls="sidebarCrm"
                   class="side-nav-link">
                    <i class="uil uil-tachometer-fast"></i>
                    <span> Category </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCrm">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('category.add')}}">Add category</a>
                        </li>
                        <li>
                            <a href="{{route('category.manage')}}">Manage category</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                   aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> Brand </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('brand.add')}}">Add brand</a>
                        </li>
                        <li>
                            <a href="{{route('brand.manage')}}">Manage brand</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false"
                   aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Product </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('product.add')}}">Add product</a>
                        </li>
                        <li>
                            <a href="{{route('product.manage')}}">Manage product</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>

        <!-- Help Box -->
        <div class="help-box text-white text-center">
            <a href="javascript: void(0);" class="float-end close-btn text-white">
                <i class="mdi mdi-close"></i>
            </a>
            <img src="{{asset('/')}}admin/assets/images/help-icon.svg" height="90" alt="Helper Icon Image"/>
            <h5 class="mt-3">Unlimited Access</h5>
            <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
            <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
        </div>
        <!-- end Help Box -->
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>

