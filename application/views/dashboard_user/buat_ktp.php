
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Buat sapa nama -->

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href=#><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> User | <b><?= $user['username']; ?></b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url('user'); ?>">
            <i class="fa fa-fw fa-list"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url('user/upload'); ?>">
            <i class="fa fa-upload"></i>
            <span class="nav-link-text">Upload File</span>
          </a>
        </li>
			  <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url('user/buat_ktp'); ?>">
            <i class="fa fa-address-card-o"></i>
            <span class="nav-link-text">Buat KTP</span>
          </a>
        </li>
		 <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('user/panduan'); ?>">
            <i class="fa fa-info-circle"></i>
            <span class="nav-link-text">Panduan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="<?php echo base_url('user/pengumuman'); ?>">
            <i class="fa fa-bullhorn"></i>
            <span class="nav-link-text">Pengumuman</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-file-text"></i>
            <span class="nav-link-text">Surat Menyurat</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="<?php echo base_url('user/suket'); ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Surat Keterangan</a>
            </li>
            <li>
              <a href="<?php echo base_url('user/supeng'); ?>"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Surat Pengantar</a>
            </li>
          </ul>
        </li>
          		</ul>
        		</li>
          		</ul>
        		</li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('user'); ?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Buat KTP</li>
      </ol>
    <!-- /.container-fluid-->
    
	<div class="container">	
            <h3 class="font-weight-bold">Buat KTP</h3>
            <hr>
            <p class="font-weight-bold">Persyaratan pemohon pembuatan KTP baru :</p>            
            <ol>
                <li>Sudah berumur setidaknya 17 tahun atau lebih.</li>
                <li>Sudah mengupload berkas berupa Kartu Keluarga, KTP orang tua/wali pada laman <a href="<?php echo base_url('user/upload'); ?>">Upload File</a>.</li>
                <li>Pengisian data diri dibawah ini merupakan data pemohon baik anda ataupun keluarga anda.</li>
                                
            </ol>
			
	<div>
            <br>
        <div id="messages"></div>
		<form id="buatKTP" method="post" action="<?php echo base_url(); ?>c_buatktp/buat">
        
        <div class="form-group">
                                    <label for="nik"><i class="fa fa-align-justify" aria-hidden="true"></i> Nomor Induk Kependudukan</label>
                                    <input type="text" class="form-control" id="nik_pemohon" name="nik_pemohon" placeholder="Contoh : 367400110219980001" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="fa fa-user" aria-hidden="true"></i> Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Contoh : Yono Murtado">
                                </div>								
                                <div class="form-group">
                                    <label for="password"><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat_pemohon" name="alamat_pemohon" placeholder="Contoh : Jalan Akses UI Kelapa 2 RT/RW 06/02 No. 8 Kota Depok">
                                </div>
                                <input type="text" name="nik" id="nik" value="<?php echo $user['nik']; ?>" hidden>
                                <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" hidden>
                                <input type="text" name="username" id="username" value="<?php echo $user['username']; ?>" hidden>      
                                <input type="text" class="form-control" value="<?php echo $user['username']; ?>" name="username" id="username" hidden>      
                                <div class="form-group">                                    
                                <button type="submit" class="btn btn-primary btn-lg float-right"> Submit</button>
        </div><br>
</form><br><br>
<br>

              <!-- /.content-wrapper-->
<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>&copy; USB Smart City 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda akan Meninggalkan Halaman?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Sign out" Jika anda benar akan meninggalkan halaman ini</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('logout'); ?>">Sign out</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/sb-admin-charts.min.js"></script>
  </div>

    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/buat_ktp.js"></script>

</body>

</html>
