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
                    <a class="dropdown-item" href="<?php echo base_url()?>index.php/login/logout">
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
                <h6 class="m-0 font-weight-bold text-primary">Profil Admin</h6><br>
            </div>
            
            <div class="card-body">
                <table class="table table-no-bordered table-striped">
           <?php foreach ($profil as $p) : ?>
            <tbody>
              <tr>
                <th> Nama </th>
                <td><span> : <?php echo $p->nama ?></span></td>
              </tr>
              <tr>
                <th> Username </th>
                <td><span> : <?php echo $p->username ?></span></td>
              </tr>
              <tr>
                <th> Kata Sandi </th>
                <td><span> : <?php echo $p->password?></span></td>
              </tr>
              <tr>
                <th> Foto admin </th>
                <td><span> : <img width="60px" src="<?php echo base_url().'assets/img/'.$p->foto_admin ?>"></span></td>
              </tr>
              <tr>
                <th><a class="btn btn-danger" href="<?=base_url()?>dashboard">Cancel</a> 
                <a class="btn btn-warning" href="<?php echo base_url('dashboard/updateData/'.$p->id_login) ?> ">Ubah Profil</a> </th>
               
                <td>
                </td>
              </tr>          
        </tbody>
        <?php endforeach ; ?> 
      </table>
  </div>
</div>
</div>
</div>