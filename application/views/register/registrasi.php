<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Registrasi</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/dist/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/custom/loading.css') ?>" type="text/css">

    <!-- Custom styles for this template -->
    <link href="floating-labels.css" rel="stylesheet">
  </head>

  <body>
 <div class="container">
    <div class="row">
        <div class="col-md-12">        
            <h2 class="text-center mb-5">Formulir Registrasi</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="warna card-header">
                            <h3 class="text-center" style="color : #fff;font-size: 20px">Data Diri</h3>
                        </div>
                        <div class="card-body">  
                            <div id="messages"></div>
                            <form class="form" id="registerForm" method="post" action="c_registrasi/register">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="Nomor Induk Kependudukan" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="email">
                                </div>								
                                <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="kata sandi" title="Isi minimal 6 karakter">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Konfirmasi Kata Sandi" title="Isi sesuai dengan kata sandi sebelumnya">
                                </div>
                                
                                    <button type="submit" class="btn btn-success btn-lg float-right">Submit</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<!-- loading gif -->
<div class="gif"><!-- Place at bottom of page --></div>

<!-- Javascript -->
<script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/jquery.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/registrasi/regist.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>

</body>
</html>
