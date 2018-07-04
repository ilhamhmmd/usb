<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Masuk</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/bootstrap-4.1.1/dist/css/bootstrap.css') ?>" type="text/css">
    
  </head>

  <body>
    <form class="form-signin" action="c_login/login" method="post" id="loginForm">
      <div class="text-center mb-4">
        <h3 class="h3 mb-3 font-weight-normal">Login</h3>
		 <img class="text-center" src="<?php echo base_url('assets/images/Man.png') ?>" alt="" width="90" height="90">
		<br>
		<code>Gunakan NIK yang telah anda registrasikan sebelumnya</code>
		<br>
		 <a >Anda belum terdaftar ?</a>
		 <a href="<?php echo base_url('registrasi') ?>">(klik disini)</a></p>
      </div>

      <div class="form-label-group">
        <input type="text" id="nik" name="nik" class="form-control" placeholder="Nomor Induk Kependudukan" autofocus>
        <label for="nik">Nomor Induk Kependudukan</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi">
        <label for="password">Kata Sandi</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; USB Smart City 2018</p>
    </form>

    <!-- loading gif -->
<div class="gif"><!-- Place at bottom of page --></div>

  <!-- Javascript -->
  <script type="text/javascript" src="<?php echo base_url('assets/vendor/jquery/jquery.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/login/login.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/custom/loading.js') ?>"></script>

  </body>
</html>
