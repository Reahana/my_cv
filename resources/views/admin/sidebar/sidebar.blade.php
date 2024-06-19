<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="dark logo" height="22">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('/')}}admin/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                    </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                     class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                   aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class="uil-store"></i>
                    <span> User Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('role.add')}}">Add Role</a>
                        </li>
                        <li>
                            <a href="{{route('role.manage')}}">Manage Role</a>
                        </li>
                        <li>
                            <a href="{{route('user.add')}}">Add User</a>
                        </li>
                        <li>
                            <a href="{{route('user.manage')}}">Manage User</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail"
                   class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Employment History </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('employment.add')}}">Add Employment  </a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Manage Employment </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail1" aria-expanded="false" aria-controls="sidebarEmail"
                   class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Academic Qualification  </span>
                    <span class="menu-arrow"> </span>
                </a>
                <div class="collapse" id="sidebarEmail1">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('academic.add')}}">Add Academic   </a>
                        </li>
                        <li>
                            <a href="apps-email-read.html">Manage Employment </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a href="apps-social-feed.html" class="side-nav-link">
                    <i class="uil-rss"></i>
                    <span> Social Feed </span>
                </a>
            </li>






        </ul>
        <!--- End Sidemenu -->
        <div class="clearfix"></div>
    </div>
</div>