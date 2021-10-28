<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>dashboard">
                <div class="sidebar-brand-text ">Admin BogorFood</div>
            </a>

             <!-- Divider -->
             <hr class="sidebar-divider my-0">

        <li class="nav-item <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? ' active" style="background-color:#858796"' : '' ?>">
            <a class="nav-link" href="<?php echo base_url();?>dashboard">
                <i class="fas fa-fw fa-home"></i>
                Dashboard</a></li>

        <li class="nav-item <?= $this->uri->segment(1) == 'profil' || $this->uri->segment(1) == '' ? ' active" style="background-color:#858796"' : '' ?>">
        </a>
            <a class="nav-link" href="<?php echo base_url()?>profil/profil_admin">
                <i class="fas fa-fw fa-user"></i>Profil Admin
            </a></li>
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->


        <li class="nav-item <?= $this->uri->segment(1) == 'profil' || $this->uri->segment(1) == '' ?>">
        </a>
            <a class="nav-link" href="<?php echo base_url()?>login/logout">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout
            </a></li>


<hr class="sidebar-divider d-none d-md-block">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
            </div>
        </ul>
        <!-- End of Sidebar --> 