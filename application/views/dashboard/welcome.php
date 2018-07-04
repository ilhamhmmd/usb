<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/dist/css/bootstrap.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/font-awesome-4.7.0/css/font-awesome.min.css') ?>" type="text/css">
    <title>SIKK</title>
  </head>
  <body>
      <!-- Navigation Bar MENU -->
      <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link js-scroll-trigger" href="#Layanan">Fitur<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#">Bantuan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#login">Registrasi</a>
                    </li>
                  </ul>
                </div>
        </nav>
    </header>
	<!--Container gambar-->
	<div class="warna text-center">
		<div>
			<img class="" src="<?php echo base_url('assets/dashboard/welcome/images/Logo.png') ?>" alt="Generic Placeholder image" width="670" height="600"/>
		</div>
	</div>
	  <!-- Three columns of text below the carousel -->
          <div class="row-kotak text-center margin-row" id="Layanan">
            <div class="col-lg-4 padding-col">
              <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Daftar.gif') ?>" alt="placeholder image" width="20%" height="60%">
              <h2 class="padding-col">Pendaftaran</h2>
              <p>Memberikan anda akses informasi dalam segala bentuk pelayanan. Hanya dengan Registratis Nomor Induk Kependudukan anda</p>
              <p><a></a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 padding-col">
            <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Loading.gif') ?>" alt="placeholder image" width="20%" height="60%">
              <h2 class="padding-col">Proses</h2>
              <p>Memberikan layanan dalam berbagai hal yang akan diproses melalui Halaman web ini yang terintegrasi dengan Lembaga terkait</p>
              <p><a></a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 padding-col">
            <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Selesai.gif') ?>" alt="placeholder image" width="20%" height="60%">
              <h2 class="padding-col">Selesai</h2>
              <p>Segala proses pelayanan dilkukan Online dan pemohon hanya perlu datang kembali saat mengambil berkas</p>
              <p><a></a></p>
            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->
		  
	<br><br<br><br><br><br>
	
	<!--Asimethric container-->
  <div class="container-fluid">
      <div class="asymmetric" id="Informasi">
	  		<div class="text-center">
	  					<td><h5>Surat</h5></td>
      		</div><br><br>
				<div class="text-center">
	  					<td><h5>Pemohon</h5></td>
      		</div><br><br>
				<div class="text-center">
	  					<td><h5>Terselesaikan</h5></td>
      		</div>
	  </div>
  </div>
	
	<br><br><br><br><br><br><br>
        <div class="text-center" id="">
		  		<img src="<?php echo base_url('assets/dashboard/welcome/images/Man.png') ?>" alt="Avatar" class="rounded" id="login">
		</div>
<br>
		<div class="text-center" id=""> 
				<button type="button" class="btn btn-primary btn-lg">Daftar</button>
				<button type="button" class="warna btn btn-secondary btn-lg">Masuk</button>
		</div>
<br>
  <div class="row-kotak text-center" id="">
              <tbody>
                <table border="1"></table>
                <th>
                  <td><h5>Pelayanan Administrasi Terpadu merupakan Sistem Informasi Kelurahan dan Kecamatan
				  yang Membantu dalam segala pelayanan terhadap Masyarakat. terintegrasi dengan kantor kecamatan 
				  dan kelurahan setempat guna memberikan pelayanan online terpadu untuk memudahkan kerja perangkat desa 
				  dan efesiensi waktu bagi masayarakat</h5></td>
                </th>
              </table>
              </tbody>
          </div>
<br><br><br>
	           
          <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide margin-row" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 h-100" src="<?php echo base_url('assets/dashboard/welcome/images/Carousel11.png') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 h-100" src="<?php echo base_url('assets/dashboard/welcome/images/Carousel22.png') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 h-100" src="<?php echo base_url('assets/dashboard/welcome/images/Carousel33.png') ?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <!-- FOOTER -->
      <footer class="container">
        <p class="float-right js-scroll-trigger"><a href="#home">Back to top</a></p>
        <p>&copy; 2018 USB Smart City &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/assets/js/vendor/jquery-slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/assets/js/vendor/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/js/src/carousel.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/dist/js/bootstrap.min.js') ?>"></script>
	  <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/js/src/scrollreveal.js') ?>"></script>
    <!-->JQuery Smooth Scrool<-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script type="text/javascript">
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
    </script>
  <!-- Scroll reveal JavaScript-->
  <script type="text/javascript">
    $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
    
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });
  });
	</script>	
  </body>
</html>