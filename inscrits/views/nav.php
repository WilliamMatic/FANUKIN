<div class="app-menu navbar-menu">
    <!-- LOGO -->
    
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="dashboard" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="65" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="65" />
            </span>
        </a>
        <!-- Light Logo-->
        <a href="dashboard" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo.png" alt="" height="65" />
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo.png" alt="" height="65" />
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="assets/images/avatar-1.jpg" alt="Header Avatar" />
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span class="align-middle">En ligne</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Se déconnecter</span></a>
        </div>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="infosone">
                        <i class="fa-solid fa-user-plus"></i> <span data-key="t-apps">Mon profil</span>
                    </a>
                </li>
                <!-- end Dashboard Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>