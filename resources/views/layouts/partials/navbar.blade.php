<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/images/Logo-Dark-1024x369-1-1.png') }}" alt="" height="50">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/images/Logo-Dark-1024x369-1-1.png') }}" alt="" height="50">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route("leads.create")}}"
                       aria-expanded="false" aria-controls="sidebarHome">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-Home">Home</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarSettings" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSettings">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-Settings">Settings</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSettings">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("insuranceProvider.index")}}" class="nav-link" data-key="t-Settings"> Insurance Providers </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("insuranceCover.index")}}" class="nav-link" data-key="t-Settings"> Insurance Covers </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route("benefit.index")}}" class="nav-link" data-key="t-Settings"> Insurance Benefits </a>
                            </li>


                        </ul>
                    </div>
                </li> <!-- end Setting Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLeads" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLeads">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-Leads">Leads</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLeads">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route("leads.index")}}" class="nav-link" data-key="t-Leads"> Leads </a>
                            </li>


                        </ul>
                    </div>
                </li> <!-- end leads Menu -->


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
