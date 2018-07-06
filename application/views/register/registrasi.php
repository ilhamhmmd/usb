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
    <link rel="stylesheet" href="<?php echo base_url('assets/registrasi/bootstrap-4.1.1/dist/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/custom/loading.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/font-awesome-4.7.0/css/font-awesome.min.css') ?>">	
        
  </head>

  <body>
 <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center mb-5"><i class="fa fa-retweet" aria-hidden="true"></i> Formulir Registrasi</h2>
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
                                    <label for="nik"><i class="fa fa-align-justify" aria-hidden="true"></i> NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Kependudukan">
                                </div>
                                <div class="form-group">
                                    <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>								
                                <div class="form-group">
                                    <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" title="Isi minimal 6 karakter">
                                </div>
                                <div class="form-group">
                                    <label for="password2"><i class="fa fa-exchange" aria-hidden="true"></i> Konfirmasi Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" placeholder="Konfirmasi Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right"><i class="fa fa-save" aria-hidden="true"></i> SUBMIT</button>
                                </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/registrasi/regist.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>  </body>
</html>