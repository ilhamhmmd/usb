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
  <link href="<?php echo base_url(); ?>assets/dashboard/user/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
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
        <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Charts">
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
        <li class="breadcrumb-item active">Upload</li>
      </ol>
    <!-- /.container-fluid-->

    <div class="text-center mb-4">
        <h3 class="font-weight-bold h3 mb-3 font-weight-normal">Masukan Data</h3>
        <img class="text-center" src="<?php echo base_url(); ?>assets/images/Surat.png" alt="" width="90" height="90">
        <br>
        <code>Contoh : KTP_0000001.pdf</code>
        <br>
        <a >Format simpan data harus sesuai contoh diatas dan wajib bertipe PDF berukuran kurang dari 2 MB</a>
        <a >Anda butuh bantuan ?</a>
        <a href="#">(klik disini)</a></p>
    </div>

    <center>
    
    <div class="row">

    <div class="col-lg col-md col-sm mb-5">            
          <div class="card" style="background-color:#d9edf7;">                
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Upload KTP</h5>
              <hr>
              <form class="form-signin" method="post" action="<?php echo base_url(); ?>c_upload/upload_filektp" id="upload_filektp">      
                <div id="messagesktp"></div>
                <div class="form-signin" id="tampilktp"></div>
                <br>
                <div class="input-group justify-content-center">                
                <label class="btn input-group-text">                
                Pilih Berkas<input type="file" style="display: none;" name="ktp" id="ktp" onchange="showNameKTP()">
                </label>
                <div class="input-group-append">                
                <input type="submit" class="btn btn-primary" value="Upload">                
              </div>              
              </div>              
              </form>
            </div>
          </div>                       
      </div>
          
    

<div class="col-lg col-md col-sm mb-5">            
          <div class="card" style="background-color:#f7d9d9;">                
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Upload KK</h5>
              <hr>
              <form class="form-signin" method="post" action="<?php echo base_url(); ?>c_upload/upload_file" id="upload_filekk">      
                <div id="messageskk"></div>
                <div class="form-signin" id="tampilkk"></div>
                <br>
                <div class="input-group justify-content-center">                
                <label class="btn input-group-text">                
                Pilih Berkas<input type="file" style="display: none;" name="kk" id="kk" onchange="showNameKK()">
                </label>
                <div class="input-group-append">                
                <input type="submit" class="btn btn-primary" value="Upload">                
              </div>              
              </div>              
              </form>
            </div>
          </div>                       
      </div>

      <div class="col-lg col-md col-sm mb-5">            
          <div class="card" style="background-color:#d9f7db;">                
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Upload Opsional</h5>
              <hr>
              <form class="form-signin" method="post" action="<?php echo base_url(); ?>c_upload/upload_file" id="upload_fileopsi">      
                <div id="messagesopsi"></div>
                <div class="form-signin" id="tampilopsi"></div>
                <br>
                <div class="input-group justify-content-center">                
                <label class="btn input-group-text">                
                Pilih Berkas<input type="file" style="display: none;" name="opsi" id="opsi" onchange="showNameOpsional()">
                </label>
                <div class="input-group-append">                
                <input type="submit" class="btn btn-primary" value="Upload">                
              </div>              
              </div>              
              </form>
            </div>
          </div>                       
      </div>
      
</div>

   
    </center>

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
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/uploadktp.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/uploadkk.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/js/uploadopsional.js" type="text/javascript"></script>
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
    <script>
    $(document).ready(function(){ 
    $('#upload_filektp').submit(function(e){
        e.preventDefault(); 
            $.ajax({
                url :"<?php echo base_url(); ?>c_upload/upload_filektp",
                type:"post",                
			    dataType		: 'json',
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data,status){
                    if(data.status != 'error') {
					$("#messagesktp").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
                    '</div>');
                    $("#upload_filektp")[0].reset();					
                    $("#tampilktp").remove();
				    } else  {
                        $("#messagesktp").html('<div class="alert alert-danger alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
					'</div>');
					
                    }                    
                }
            });
        });
    

    });
    </script>

    <script>
    $(document).ready(function(){ 
    $('#upload_filekk').submit(function(e){
        e.preventDefault(); 
            $.ajax({
                url :"<?php echo base_url(); ?>c_upload/upload_filekk",
                type:"post",                
			    dataType		: 'json',
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data,status){
                    if(data.status != 'error') {
					$("#messageskk").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
                    '</div>');
                    $("#upload_filekk")[0].reset();					
                    $("#tampilkk").remove();
				    } else  {
                        $("#messageskk").html('<div class="alert alert-danger alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
					'</div>');
					
                    }                    
                }
            });
        });
    

    });
    </script>

    <script>
    $(document).ready(function(){ 
    $('#upload_fileopsi').submit(function(e){
        e.preventDefault(); 
            $.ajax({
                url :"<?php echo base_url(); ?>c_upload/upload_fileopsi",
                type:"post",                
			    dataType		: 'json',
                data:new FormData(this),
                processData:false,
                contentType:false,
                cache:false,
                async:false,
                success: function(data,status){
                    if(data.status != 'error') {
					$("#messagesopsi").html('<div class="alert alert-success alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
                    '</div>');
                    $("#upload_fileopsi")[0].reset();
                    $("#tampilopsi").remove();
				    } else  {
                        $("#messagesopsi").html('<div class="alert alert-danger alert-dismissible" role="alert">'+
					  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
					  data.msg+
					'</div>');
					
                    }                    
                }
            });
        });
    

    });
    </script>
  </div>
</body>

</html>
