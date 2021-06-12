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

<!-- Nav Item - Dashboard -->
<li class="nav-item <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? ' active" style="background-color:#858796"' : '' ?>">
    <a class="nav-link" href="<?php echo base_url();?>dashboard">
        <i class="fas fa-fw fa-home"></i>
        <span>Dashboard</span>
    </a>
</li>
<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item dropdown <?= $this->uri->segment(1) == 'dapur_bujalu' || $this->uri->segment(1) == 'olaten' || $this->uri->segment(1) == 'desira' || $this->uri->segment(1) == 'rangginang_tuti' ? 'active' : ''?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-database"></i>
        <span>Master Produk</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" <?= $this->uri->segment(1) == 'dapur_bujalu' ? 
            'collapse-item style="background-color: #1cc88a"'  : ''?> href="<?php echo base_url();?>dapur_bujalu">Toko Dapur Bujalu</a>
             <a class="collapse-item" <?= $this->uri->segment(1) == 'olaten' ? 
            'collapse-item style="background-color: #1cc88a"'  : ''?>  href="<?php echo base_url();?>olaten">Toko Olaten</a>
            <a class="collapse-item" <?= $this->uri->segment(1) == 'desira' ? 
            'collapse-item style="background-color: #1cc88a"'  : ''?>  href="<?php echo base_url();?>desira">Toko Desira</a>
             <a class="collapse-item" <?= $this->uri->segment(1) == 'rangginang_tuti' ? 
            'collapse-item style="background-color: #1cc88a"'  : ''?>  href="<?php echo base_url();?>rangginang_tuti">Toko Rangginang Tuti</a>
        </div>
    </div>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">



            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->