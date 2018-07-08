<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIAP User Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/dashboard/user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/dashboard/user/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/dashboard/user/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/dashboard/user/css/sb-admin.css'); ?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<!-- Buat sapa nama -->
<?php
      $sapa = explode(" ", $user['nama']); 
?>

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href=#><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> User | <b><?= $sapa[0]; ?></b></a>
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
          <a class="nav-link" href="Panduan.html">
            <i class="fa fa-info-circle"></i>
            <span class="nav-link-text">Panduan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="Index.html">
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
              <a href="Suket.html"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Surat Keterangan</a>
            </li>
            <li>
              <a href="Supeng.html"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Surat Pengantar</a>
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
            <h3 class="font-weight-bold">Silahkan isi data dibawah ini</h3>
            <hr>
            <p class="font-weight-bold">Persyaratan Pemohon Pembuatan KTP baru :</p>
            <ol>
                <li>Sudah berumur setidaknya berumur 17 tahun atau lebih.</li>
                <li>Sudah mengupload berkas berupa Kartu Keluarga, KTP orang tua/wali pada laman <a href="<?php echo base_url('user/upload'); ?>">Upload File</a>.</li>                
                
            </ol>
			
	<div>
			<br>
    <form class="needs-validation" method="post" action="buat_ktp" id="buatKTP">
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01"><i class="fa fa-list" aria-hidden="true"></i> Nama Lengkap</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Yono Murtado" autofocus>
    </div>
</div>
<div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend"><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <input type="text" class="form-control" id="validationCustomUsername" placeholder="yono@sample.com" aria-describedby="inputGroupPrepend">        
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03"><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Jalan Akses UI Kelapa 2 RT/RW 06/02 No. 8">      
    </div>
  </div>
  
  <button class="btn btn-primary" type="submit">Submit</button>
</form>
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
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/buat_ktp.js" type="text/javascript"></script>
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


</body>

</html>
