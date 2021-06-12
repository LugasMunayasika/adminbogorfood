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
                                <a class="dropdown-item" href="<?php echo base_url()?>dashboard/profil_admin">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                    </a>
                    <a class="dropdown-item" href="<?php echo base_url()?>/login/logout">
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
                <h6 class="m-0 font-weight-bold text-primary">Data Toko Tauty Cake</h6><br>
                <a href="<?php echo base_url().'tauty_cake/tambahData/' ?>" class="btn btn-success"><i class="fa fa-plus">Tambah Data</i></a><hr> 
                <?php echo $this->session->flashdata('pesan') ?> 
            </div>
            
            <div class="card-body">
                <div class="table-responsive" >
                    <table class="table table-bordered" id="tbl_tauty_cake" width="100%" cellspacing="0" style="text-align: center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <!-- <th>Deskripsi Produk</th> -->
                                <th>Foto Produk</th>
                                <th>Harga</th>
                                <th>Stock</th>
                               <!--  <th>Tanggal Upload</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php $no=1; foreach($tauty_cake as $de) :  ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $de->nama_produk?></td>
                                <!-- <td><?php echo character_limiter($de->deskripsi_produk, 40)?></td> -->
                                <td>
                                   <img width = "70px" src="<?php echo base_url().'assets/img/tauty_cake/' .$de->foto_produk?>">
                                </td>
                                <td>Rp. <?php echo number_format($de->harga_produk,0,',','.') ?></td>
                                <td><?php echo $de->stok_produk?></td>
                                <!-- <td><?php echo $de->tanggal_upload_produk?></td> -->
                                <td>
                                <a class="btn btn-sm btn-success" href="<?php echo base_url('tauty_cake/detail/' .$de->id_produk)?>"><i class="fas fa-search-plus"></i></a>
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('tauty_cake/updateData/' .$de->id_produk)?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Yakin hapus data ini?')" class="btn btn-sm btn-danger" href="<?php echo base_url('tauty_cake/deleteData/'.$de->id_produk)?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->