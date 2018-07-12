<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title; ?></title>
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
			  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url('user/buat_ktp'); ?>">
            <i class="fa fa-address-card-o"></i>
            <span class="nav-link-text">Buat KTP</span>
          </a>
        </li>
		 <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Tables">
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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Menyurat">
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
        <li class="breadcrumb-item active">Panduan</li>
      </ol>
    <!-- /.container-fluid-->
    
    <!--TimelinePengumuman-->
		<div class="container">
  <div class="page-header">
    <h3 class="font-weight-bold" id="timeline">Panduan</h3>
    <hr><br>
  </div>
  <ul class="timeline">
    <li>
      <div class="timeline-badge"><i class="fa fa-desktop"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title font-weight-bold">Selamat Datang !</h4>
        </div>
        <div class="timeline-body">
          <p>Sistem Informasi Administrasi Penduduk adalah 
		  sebuah web yang akan membantu anda melakukan pelayanan administrasi di bidang penduduk. mulai dari surat menyurat sampai dengan pembuatan KTP secara online</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning"><i class="fa fa-list"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Administrasi Surat</h4>
        </div>
        <div class="timeline-body">
          <p>lakukan pelayanan online langsung dari dashboard ini...</p>
		  <p>Caranya, cukup dengan klik jenis pelayanan yang tersedia di menu di sebelah kiri, yaitu Surat Menyurat.
		  isikan data dan keperluan anda dengan data yang sesuai. berikut jenis surat yang dpat di urus : </p><br>
		  <a>1. Surat Keterangan</a>
		  <p>2. Surat Pengantar</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger"><i class="fa fa-id-card"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Pembuatan KTP</h4>
        </div>
        <div class="timeline-body">
          <p>Lakukan, permohonan pembuatan KTP baru untuk keluarga anda melalui web ini. dengan sekali mengklik menu pembuatan KTP.
		  lakukan upload berkas pada menu Upload File</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
	<div class="timeline-badge success"><i class="fa fa-upload"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Upload File</h4>
        </div>
        <div class="timeline-body">
          <p>Untuk melakukan Upload file, pastikan anda memakai format yang sudah ditentukan. lakukan Scan berkas anda di kantor RT/RW lokasi anda tinggal</p>
        </div>
      </div>
    </li>
    <li class="timeline">
	<div class="timeline-badge warning"><i class="fa fa-check-circle"></i></div>
      <div class="timeline-panel">
        <div class="timeline-heading">
          <h4 class="timeline-title">Selesai...</h4>
        </div>
        <div class="timeline-body">
          <p>Setelah melakukan segala bentuk administrasi dalam web ini anda akan menerima informasi tentang status pelayanan anda melalui web ini kurang dari 12 jam</p>
        </div>
      </div>
    </li>
  </ul>
</div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
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
</body>

</html>