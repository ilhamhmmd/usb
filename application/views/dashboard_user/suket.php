

<body class="fixed-nav sticky-footer bg-dark" id="page-top">



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
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Menyurat">
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
        <li class="breadcrumb-item active">Surat Menyurat / Surat Keterangan</li>
      </ol>
    <!-- /.container-fluid-->
    
    <!--TimelinePengumuman-->
		<div class="container">
  <div class="page-header">
    <h3 class="font-weight-bold">Surat Keterangan</h3>
    <hr>
  </div>
  <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Silahkan pilih <b>Surat Keterangan</b> yang ingin anda buat 
  </div><br>
   
  <div class = "container">
			<div class = "row text-center">
        
      <div class = "col-md-4 mb-5">
        <div class="card kotak"  data-toggle="modal" data-target="#suket_tidakmampu" style="cursor : pointer;">
            <div class="card-body">              
              <img src="<?php echo base_url(); ?>assets/images/surat.png" class="rounded mx-auto d-block" alt="Placeholder" width="90" height="90">
                <hr>
                <p class="card-title font-weight-bold" style="color : #4177d3;">Surat Keterangan Tidak Mampu</p>
                <hr>
            </div>
          </div>             
        </div>
        
        <div class = "col-md-4 mb-5">
        <div class="card kotak"  data-toggle="modal" data-target="#suket_kematian" style="cursor : pointer;">
            <div class="card-body">
              <img src="<?php echo base_url(); ?>assets/images/surat.png" class="rounded mx-auto d-block" alt="Placeholder" width="90" height="90">
                <hr>
                <p class="card-title font-weight-bold" style="color : #4177d3;">Surat Keterangan Kematian</p>
                <hr>
            </div>
          </div>             
        </div>
        
        <div class = "col-md-4 mb-5">
        <div class="card kotak"  data-toggle="modal" data-target="#suket_usaha" style="cursor : pointer;">
            <div class="card-body">              
              <img src="<?php echo base_url(); ?>assets/images/surat.png" class="rounded mx-auto d-block" alt="Placeholder" width="90" height="90">
                <hr>
                <p class="card-title font-weight-bold" style="color : #4177d3;">Surat Keterangan Usaha</p>
                <hr>
            </div>
          </div>             
        </div>
        
        <div class = "col-md-4 mb-5">
        <div class="card kotak"  data-toggle="modal" data-target="#suket_kelahiran" style="cursor : pointer;">
            <div class="card-body">              
              <img src="<?php echo base_url(); ?>assets/images/surat.png" class="rounded mx-auto d-block" alt="Placeholder" width="90" height="90">
                <hr>
                <p class="card-title font-weight-bold" style="color : #4177d3;">Surat Keterangan Kelahiran</p>
                <hr>
            </div>
          </div>             
        </div>        
				
				
			</div>
    </div><br><br>
  

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

    <div style="padding-bottom:100px;">
    
    </div>

    <!-- Suket Tidak Mampu -->
    <div class="modal fade" id="suket_tidakmampu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Surat Keterangan Tidak Mampu</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-signin" method="post" action="<?php echo base_url('c_suket/suket_tidakmampu'); ?>" id="form_sktm">
            <div id="messages_sktm"></div>
              <div class="form-group">
                <input type="text" name="suket_sktm" id="suket_sktm" class="form-control" value="Surat Keterangan Tidak Mampu" readonly>
              </div>
              <div class="form-group">
                <input type="text" name="nik" id="nik" value="<?php echo $user['nik']; ?>" hidden>
                <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" hidden>
                <label for="keperluanSKTM">Keperluan :</label><br>                
                <textarea name="keperluanSKTM" id="keperluanSKTM" rows="10"></textarea>
              </div>              
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary float-right" value="Buat">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Suket Kematian -->
    <div class="modal fade" id="suket_kematian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Kematian</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-signin" method="post" action="<?php echo base_url('c_suket/suket_kematian'); ?>" id="form_kematian">
              <div id="messages_kematian"></div>
              <div class="form-group">
                <input type="text" class="form-control" name="suket_kematian" value="Surat Keterangan Kematian" readonly>
              </div>
              <label>Data Diri :</label><br>
              <small class="text-warning">Silahkan isi data diri (almarhum) dengan benar!</small>
              <div class="form-group">                
                <input type="text" class="form-control" name="kematian_nik" id="kematian_nik" placeholder="Nomor NIK">
              </div>
              <div class="form-group">                
                <input type="text" name="kematian_nama" id="kematian_nama" class="form-control" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">                
              <input class="form-control" name="kematian_tanggal" id="kematian_tanggal" type="text" placeholder="Tanggal Kematian" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text', this.class='form-control'}">
              </div>
          </div>
          <div class="modal-footer">
            <input type="text" name="nik" id="nik" value="<?php echo $user['nik']; ?>" hidden>
            <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" hidden>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary float-right" value="Buat">
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Suket Usaha -->
    <div class="modal fade" id="suket_usaha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Usaha</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-signin" method="post" action="<?php echo base_url('c_suket/suket_usaha'); ?>" id="form_usaha">
              <div id="messages_usaha"></div>
              <div class="form-group">
                <input type="text" class="form-control" name="suket_usaha" value="Surat Keterangan Usaha" readonly>
              </div>
              <label>Data Usaha :</label><br>
              <small class="text-warning">Silahkan isi data usaha anda dengan benar!</small>
              <div class="form-group">                
                <input type="text" class="form-control" name="usaha_jenis" id="usaha_jenis" placeholder="Jenis Usaha">
              </div>
              <div class="form-group">                
                <input type="text" name="usaha_nama" id="usaha_nama" class="form-control" placeholder="Nama Usaha">
              </div>              
          </div>
          <div class="modal-footer">
            <input type="text" name="nik" id="nik" value="<?php echo $user['nik']; ?>" hidden>
            <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" hidden>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary float-right" value="Buat">
            </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Suket Kelahiran -->
    <div class="modal fade" id="suket_kelahiran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Surat Keterangan Kelahiran</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="form-signin" method="post" action="<?php echo base_url('c_suket/suket_kelahiran'); ?>" id="form_kelahiran">
              <div id="messages_kelahiran"></div>
              <div class="form-group">
                <input type="text" class="form-control" name="suket_kelahiran" value="Surat Keterangan Kelahiran" readonly>
              </div>
              <label>Data Usaha :</label><br>
              <small class="text-warning">Silahkan isi data anak anda dengan benar!</small>
              <div class="form-group">                
                <input type="text" class="form-control" name="kelahiran_nama" id="kelahiran_nama" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">                                  
								<select class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin" title="Pilih salah satu">
										<option value="none" selected="selected">Pilih Jenis Kelamin</option>
  										<option value="Laki-Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
								</select>
              </div>
              <div class="form-group">                
                <input class="form-control" name="kelahiran_tanggal" id="kelahiran_tanggal" type="text" placeholder="Tanggal Kelahiran" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text', this.class='form-control'}">
              </div>
              <div class="form-group">                
                <input class="form-control" name="kelahiran_tempat" id="kelahiran_tempat" type="text" placeholder="Tempat Lahir">
              </div>
          </div>
          <div class="modal-footer">
            <input type="text" name="nik" id="nik" value="<?php echo $user['nik']; ?>" hidden>
            <input type="text" name="nama" id="nama" value="<?php echo $user['nama']; ?>" hidden>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <input type="submit" class="btn btn-primary float-right" value="Buat">
            </form>
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

  <script src="<?php echo base_url(); ?>assets/dashboard/user/js/suket.js"></script>

  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js') ?>"></script>

<script>tinymce.init({ 
      selector:'textarea',
      menubar:false,
      statusbar: false,
  });</script>

</body>

</html>