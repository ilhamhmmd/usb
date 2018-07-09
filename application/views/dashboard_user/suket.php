

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
			  <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
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
          <a class="nav-link nav-link-collapse" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-file-text"></i>
            <span class="nav-link-text">Surat Menyurat</span>
          </a>
          <ul class="sidenav-second-level" id="collapseComponents">
            <li class="nav-item active">
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
    
	<h3 class="font-weight-bold">Suket</h3>
    <hr>

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
