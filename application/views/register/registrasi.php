<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Registrasi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/custom/loading.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/font-awesome-4.7.0/css/font-awesome.min.css') ?>">	
        
  </head>

 <body class="bg">
     
     <div class="container">
         <div class="row mb-5 mt-5">
             <div class="col-lg-6 col-md col-sm mx-auto">
         <div class="card">
         <div class="warna card-header">
                            <h3 class="text-center font-weight-bold" style="color : #fff;font-size: 20px; padding : 20px">Registrasi</h3>                            
                        </div>
                        <div class="card-body">
                            <div id="messages"></div>
                            <form class="form-signin" action="<?php echo base_url(); ?>c_registrasi/register" method="post" id="registerForm">
                            <p class="text-danger">Harap mengisi data registrasi dengan benar !</p><hr>
                            <label for="nama_depan"><i class="fa fa-user" aria-hidden="true"></i> Nama Lengkap</label>
                            <div class="row">                                
                                    <div class="col-lg col-md col-sm">
                                        <div class="form-group">                
                                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" autofocus>
                                        </div>
                                    </div>
                                    <div class="col-lg col-md col-sm">
                                        <div class="form-group">                 
                                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="gender"><i class="fa fa-venus-mars" aria-hidden="true"></i> Jenis Kelamin</label>
								<select class="form-control" id="gender" name="gender" placeholder="Jenis Kelamin" title="Pilih salah satu">
										<option value="none" selected="selected">Pilih Jenis Kelamin</option>
  										<option value="Laki-Laki">Laki - Laki</option>
										<option value="Perempuan">Perempuan</option>
								</select>
                                </div>
                                <div class="form-group">
                                    <label for="alamat"><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Lengkap">
                                </div>   
                                <div class="form-group">
                                    <label for="nik"><i class="fa fa-align-justify" aria-hidden="true"></i> NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan">
                                </div>
                                <div class="form-group">
                                    <label for="jobs"><i class="fa fa-suitcase" aria-hidden="true"></i> Pekerjaan</label>
                                    
                                    <select class="form-control" name="jobs" id="jobs" onchange="if(this.options[this.selectedIndex].value=='customOption'){$('.jobs').show();,$('.jobs').focus();.this.selectedIndex='0';}">
                                            <option value="none" selected="selected">Pilih Pekerjaan</option>                                                 
                                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Dokter">Dokter</option>
                                            <option value="Polisi">Polisi</option>
                                            <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>                                           
                                            <option value="customOption">Pekerjaan Lainnya</option>                                            
                                        </select><input name="jobs" id="jobs" style="display:none;" class="form-control jobs" onblur="if(this.value==''){$('.jobs').hide();}">
                                </div>
                                <div class="form-group">
                                    <label for="username"><i class="fa fa-user-circle" aria-hidden="true"></i> Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
                                </div>								
                                <div class="form-group">
                                    <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="password2"><i class="fa fa-lock" aria-hidden="true"></i> Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
                                </div>
                                <div class="row">
                                    
                                    <div class="col-lg col-md col-sm">
                                    <div class="checkbox mb-3 float-right">
                                        <label>
                                        <p>Sudah registrasi ? <a href="<?php echo base_url('login'); ?>">Login</a>
                                        </label>
                                    </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-lg float-right" value="Registrasi">
                                </div>
                            </form>
                            </div>
                            </div>
         </div>
     </div>

<!-- loading gif -->
<div class="gif"><!-- Place at bottom of page --></div>

<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/registrasi/regist.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>  </body>
        <script>

       $(document).ready(function() {
      
        $("select").customComboBox({
  
            tipText : "Enter Your Value",
  
            tipClass : "mytipclass",
  
          allowed : /[A-Za-z0-9\$\.\s]/,
  
          notallowed : /[\&lt;\&gt;]/,
  
          index : 'last',
  
          isEditing : function(el, status, value) {
              if (typeof window.console!='object') { return; }
              console.info('Editing status changed to (', status, ') on ', el, ' combo box and the selected value is "', value, '"');
          },
          onKeyDown : function(el, character, fulltext) {
              if (typeof window.console!='object') { return; }
              console.info('The character (', character, ') was just typed into ', el, ' combo box and the complete text is now "', fulltext, '"');
          },
          onDelete : function(el, fulltext) {
              if (typeof window.console!='object') { return; }
              console.info('A character was deleted from ', el, ' combo box and the complete text is now "', fulltext, '"');
          }
          });
          
          $("form").find('input').on('click',function(e) {
              var sel = $(e.currentTarget).prev('select');
              var name = sel.attr('name').toUpperCase();
              var val = sel.find('option:selected').val();
              $("#result").text(name+" combo box value is " + val);
          });
          
  
      }); 

        </script>

</html>