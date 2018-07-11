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
                            <h3 class="text-center font-weight-bold" style="color : #fff;font-size: 20px; padding : 20px">Login / Masuk</h3>                            
                        </div>
                        <div class="card-body">
                        <div class="alert alert-warning alert-dismissible" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          Gunakan Username & Password yang telah anda registrasikan sebelumnya !
                        </div>
                        <p class="float-right">Belum terdaftar ? <a href="<?php echo base_url('registrasi'); ?>">Registrasi</a></p><br>
                        <hr><br>
                        
                            <form class="form-signin" action="<?php echo base_url(); ?>c_login/login" method="post" id="loginForm">
                                                        
                                <div class="form-group">
                                    <label for="username"><i class="fa fa-user-circle" aria-hidden="true"></i> Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>
                                								
                                <div class="form-group">
                                    <label for="password"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                                
                                <div class="row">
      
                                    <div class="col-lg col-md col-sm">
                                    <div class="checkbox mb-3 float-left">
                                        <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                        </label>
                                    </div>
                                    </div>
                                    
                                    <div class="col-lg col-md col-sm">
                                    <div class="checkbox mb-3 float-right">
                                        <label>                                        
                                        <a href="<?php echo base_url('login/lupa_password'); ?>">Lupa Password ?</a>
                                        </label>
                                    </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-lg float-right" value="Masuk">
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
<script type="text/javascript" src="<?php echo base_url('assets/login/login.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>  </body>
</html>