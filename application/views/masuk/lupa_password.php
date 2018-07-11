<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login / Masuk</title>

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
                            <h3 class="text-center font-weight-bold" style="color : #fff;font-size: 20px; padding : 20px">Lupa Password</h3>
                        </div>
                        <div class="card-body">
                        <div class="text-center mb-5">          
        <p>Masukan Email anda, maka kami akan mengirimkan password ke Email anda yang telah teregistrasi.</p>
        </div>
        <div id="messages"></div>
                
        <form class="form-signin" method="post" action="<?php echo base_url('c_login/lupa'); ?>" id="lupa">
        <div class="form-group">        
            <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email">
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Lupa Password">
        </form>
        <br>
        <div class="row">
            <div class="col-lg col-md col-sm float-left">
                <p>Belum punya akun ? <a href="<?php echo base_url('registrasi'); ?>">Registrasi</a></p>
            </div>            
        </div> 
                            </div>
                            </div>
         </div>
     </div>

<!-- loading gif -->
<div class="gif"><!-- Place at bottom of page --></div>

<!-- Javascript -->
<script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/login/lupa.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>  </body>
</html>