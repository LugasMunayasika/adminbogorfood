<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content" >

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-secondary topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php foreach ($profil as $p) : ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-100 small"> 
                                    <?php echo 'Selamat Datang , '.$p->nama; ?> </span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url().'assets/img/'.$p->foto_admin ?>">
                                <?php endforeach; ?>
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo base_url()?>dashboard/profil_admin">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url()?>login/logout">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data Produk Toko Olaten</h6>
            </div>
    <div class="card-body">
        <?php foreach ($toko_olaten as $to) : ?>
            <form method="POST" action="<?php echo base_url('olaten/updateDataAksi'); ?>">
                <div class="form-group">
                    <label>Kode Produk : </label>
                    <input type="hidden" name="id_produk" class="form-control" value="<?php echo $to->id_produk ?>" >
                    <input type="text" name="kode_produk" class="form-control" value="<?php echo $to->kode_produk ?>">
                    <?php echo form_error('kode_produk','<div class="text-small text-danger"></div>')?>
                </div>
          
                <div class="form-group">
                    <label>Nama Produk : </label>
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $to->nama_produk ?>">
                    <?php echo form_error('nama_produk','<div class="text-small text-danger"></div>')?>
                </div>
                <div class="form-group">
                    <label>Deskripsi Produk : </label>
                    <input type="text" name="deskripsi_produk" class="form-control" value="<?php echo $to->deskripsi_produk ?>">
                    <?php echo form_error('deskripsi_produk','<div class="text-small text-danger"></div>')?>
                </div>
                <div class="form-group">
                    <label>Foto Produk : </label>
                    <input type="file" name="foto_produk" class="form-control-file"><br>
                    <img src="<?php echo base_url().'assets/img/olaten/'.$to->foto_produk ?>" width="90" height="110">
                    <p><b><?php echo $to->foto_produk?></b></p>
                   <?php echo form_error('foto_produk','<div class="text-small text-danger"></div>')?>
                </div>
                <div class="form-group">
                    <label>Harga Produk</label>
                    <input type="number" name="harga_produk" class="form-control" value="<?php echo $to->harga_produk ?>">
                    <?php echo form_error('harga_produk','<div class="text-small text-danger"></div>')?>
                </div>
                <div class="form-group">
                    <label>Stock</label>
                 <input type="number" name="stok_produk" class="form-control" value="<?php echo $to->stok_produk ?>">
                    <?php echo form_error('stok_produk','<div class="text-small text-danger"></div>')?>
                 </div>
          
                 <div class="form-group">
                    <label>Tanggal Upload Produk</label>
                    <input type="date" name="tanggal_upload" class="form-control" value="<?php echo $to->tanggal_upload ?>">
                    <?php echo form_error('tanggal_upload','<div class="text-small text-danger"></div>')?>
                </div>


                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url();?>olaten">Cancel</a>
                </form>
                <?php endforeach; ?> 
            </div>
        </div>               
</div>
</div>