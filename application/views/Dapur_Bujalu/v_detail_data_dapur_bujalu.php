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
                <h6 class="m-0 font-weight-bold text-primary">Detail Data Produk Dapur Bujalu</h6>
            </div>
    <div class="card-body">
        <table class="table table-no-bordered table-striped">
            <tbody>
              <tr>
                <th> Kode Produk  </th>
                <td><span> : <?php echo $detail->kode_produk ?></span></td>
              </tr>
              <tr>
                <th> Nama Produk   </th>
                <td><span> : <?php echo $detail->nama_produk ?></span></td>
              </tr>
                <tr>
                <th> Deskripsi Produk   </th>
                <td><span> : <?php echo $detail->deskripsi_produk ?></span></td>
              </tr>
              <tr>
                <th> Foto Produk </th>
                <td><span> :  <img width="200px" src="<?php echo base_url().'assets/img/dapur_bujalu/'.$detail->foto_produk ?>"></span></td>
              </tr>
              <tr>
                <th> Harga Produk </th>
                <td><span> : Rp. <?php echo number_format($detail->harga_produk,0,',','.') ?></span></td>
              </tr>
              <tr>
                <th> Stock </th>
                <td><span> : <?php echo $detail->stok_produk ?></span></td>
              </tr>
               <tr>
                <th> Tanggal Upload </th>
                <td><span> : <?php echo $detail->tanggal_upload?></span></td>
              </tr>
              <tr>
                <th> </th>
                <td>
                    <a class="btn btn-danger float-right" href="<?=base_url()?>dapur_bujalu">Cancel</a>
                </td>
              </tr>
             
                

        </tbody> 
      </table>
            </div>
        </div>               
</div>
</div>