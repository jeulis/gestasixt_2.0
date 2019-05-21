<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <!--                <div class="sidebar-brand-text mx-3"><img src="./sixt.png" width="60%"></div> -->
            <div class="sidebar-brand-text mx-3"><img src="./sixt.png" width="60%"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Pages
        </div>

        <!-- Nav Item - users -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=users">
                <i class="fas fa-fw fa-user"></i>
                <span>Users</span></a>
        </li>

        <!-- Nav Item - vehicles -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=vehicles">
                <i class="fas fa-fw fa-car"></i>
                <span>Vehicles</span></a>
        </li>

        <!-- Nav Item - rents -->
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestasixt_2.0/?action=rents">
                <i class="fas fa-fw fa-table"></i>
                <span>Rents</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                <span>Logout</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>


               

                </ul>

            </nav>
            <!-- End of Topbar -->
            <div class="container-fluid">

                <!-- 404 Error Text -->
                <div class="text-center">
                    <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-5">Page non trouvée</p>
                    <p class="text-gray-500 mb-0">Il semble que vous vous êtes perdu ...</p>
                    <a href="http://127.0.0.1/gestasixt_2.0/?action=home">&larr; Retour au Dashboard</a>
                </div>

            </div>
