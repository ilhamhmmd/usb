<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Lupa Pasword</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/bootstrap-4.1.1/dist/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/custom/loading.css') ?>" type="text/css">
    
  </head>

  <body>
  <div class="container" style="padding-top:5rem;">
  <div class="col-md-6 mx-auto" style="padding-top:5rem;padding-bottom:5rem;">
    <div class="card border-secondary">
      <div class="warna card-header">
        <h3 class="text-center" style="color : #fff;font-size: 20px">Login / Masuk</h3>
      </div>
    <div class="card-body">
    <form class="form-signin" action="c_login/login" method="post" id="loginForm">
      <div class="text-center">        
		    <img class="text-center" src="<?php echo base_url('assets/images/Man.png') ?>" alt="" width="90" height="90"><br>
        <a >Anda belum terdaftar ?</a><br>
		    <a href="<?php echo base_url('registrasi') ?>">(klik disini)</a></p>      
     </div>    
      <div class="alert alert-warning">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Gunakan NIK yang telah anda registrasi & verifikasikan sebelumnya
      </div><hr><br>

      <div class="form-label-group">
        <input type="text" id="nik" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" autofocus>
        <label for="nik">Nomor Induk Kependudukan</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="row">
      
      <div class="col-lg col-md col-sm">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      </div>
      
      <div class="col-lg col-md col-sm">
      <div class="checkbox mb-3">
        <label>
          <a href="<?php echo base_url('login/lupa_password'); ?>">Lupa Password ?</a>
        </label>
      </div>
      </div>

      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; USB Smart City 2018</p>
    </form>
    </div>
    </div>
    </div>
    </div>

    <!-- loading gif -->
<div class="gif"><!-- Place at bottom of page --></div>

  <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/login/login.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>

  </body>
</html>
