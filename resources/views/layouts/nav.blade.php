<nav class="main-sidebar ps-menu">
    <!-- <div class="sidebar-toggle action-toggle">
        <a href="#">
            <i class="fas fa-bars"></i>
        </a>
    </div> -->
    <!-- <div class="sidebar-opener action-toggle">
        <a href="#">
            <i class="ti-angle-right"></i>
        </a>
    </div> -->
    <div class="sidebar-header">
        <div class="text">AR</div>
        <div class="close-sidebar action-toggle">
            <i class="ti-close"></i>
        </div>
    </div>
    <div class="sidebar-content">
        <ul>
            <li class="active">
                <a href="{{ route('dashboard') }}" class="link">
                    <i class="ti-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-category">
                <span class="text-uppercase">User Interface</span>
            </li>
            <li>
                <a href="#" class="main-menu has-dropdown">
                    <i class="ti-desktop"></i>
                    <span>Konfigurasi</span>
                </a>
                <ul class="sub-menu ">
                        <li><a href="{{ route('roles.index') }}" class="link"><span>Roles</span></a></li>


                </ul>
            </li>

        </ul>
    </div>
</nav>
