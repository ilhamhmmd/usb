<!DOCTYPE html>
<html lang="en">

  <head>
  <style type="text/css">
  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }
  </style>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/dist/css/bootstrap.css') ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/dashboard/welcome/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
      <script src="<?php echo base_url('assets/dashboard/welcome/bootstrap-4.1.1/assets/js/vendor/jquery-slim.min.js') ?>"></script>
      <title>SIAP</title>
    </head>
    <body>
    <!--Loading-->
    <div class="preloader">
    <div class="loading">
      <img src="<?php echo base_url('assets/dashboard/welcome/images/Preloader.gif') ?>" width="80%">
    </div>
  </div>
        <!-- Navigation Bar MENU -->
        <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light" id="home">
                  <a class="navbar-brand" href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>Beranda</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Layanan"><i class="fa fa-bars" aria-hidden="true"></i> Fitur</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Informasi"><i class="fa fa-area-chart" aria-hidden="true"></i> Informasi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Registrasi"><i class="fa fa-retweet" aria-hidden="true"></i> Registrasi</a>
                      </li>
            <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Helpdesk"><i class="fa fa-question-circle" aria-hidden="true"></i> Bantuan</a>
                      </li>
              <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Announce"><i class="fa fa-bullhorn"></i> Status Pemohon</a>
                      </li>
                    </ul>
                  <a href="<?php echo base_url('login'); ?>"<button class="btn btn-outline-primary my-2 my-sm-0" type="submit" href="#"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Masuk</button></a>
                  </form>
                  </div>
          </nav>
      </header>
    <!--Container gambar-->
    <div class="warna text-center">
      <div>
        <img class="" src="<?php echo base_url('assets/dashboard/welcome/images/Logo3.png') ?>" alt="Generic Placeholder image" width="100%" height="100%"/>
      </div>
    </div>
      <!--Marquee-->
      <style>
    .example2 {
    height: 40px;	
    overflow: hidden;
    position: relative;
    }
    .example2 h3 {
    position: absolute;
    width: 100%;
    height: 100%;
    margin: 0;
    line-height: 50px;
    text-align: center;
    /* Starting position */
    -moz-transform:translateX(-100%);
    -webkit-transform:translateX(-100%);	
    transform:translateX(-100%);
    /* Apply animation to this element */	
    -moz-animation: example2 15s linear infinite;
    -webkit-animation: example2 15s linear infinite;
    animation: example2 15s linear infinite;
    }
    /* Move it (define the animation) */
    @-moz-keyframes example2 {
    0%   { -moz-transform: translateX(-100%); }
    100% { -moz-transform: translateX(100%); }
    }
    @-webkit-keyframes example2 {
    0%   { -webkit-transform: translateX(-100%); }
    100% { -webkit-transform: translateX(100%); }
    }
    @keyframes example2 {
    0%   { 
    -moz-transform: translateX(-100%); /* Firefox bug fix */
    -webkit-transform: translateX(-100%); /* Firefox bug fix */
    transform: translateX(-100%); 		
    }
    100% { 
    -moz-transform: translateX(100%); /* Firefox bug fix */
    -webkit-transform: translateX(100%); /* Firefox bug fix */
    transform: translateX(100%); 
    }
    }
  </style>
  <div class="example2">
  <h3>Selamat Datang di Sistem Informasi Administrasi Penduduk | USB Smart City 2018 </h3>
  </div>
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
    
    <br><br<br><br><br>
    
      <!-- Three columns of text below the carousel -->
            <div class="row-kotak text-center margin-row" id="Layanan">
              <div class="col-lg-4 padding-col">
                <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Daftar.gif') ?>" alt="Generic placeholder image" width="20%" height="50%">
                <h2 class="padding-col">Pendaftaran</h2>
                <p>Memberikan anda akses informasi dalam pelayanan administrasi di tingkat RT/RW, Kelurahan, dan Kecamatan. 
          Hanya dengan Registratikan Nomor Induk Kependudukan anda pada web ini</p>
                <p><a></a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 padding-col">
                <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Loading.gif') ?>" alt="Generic placeholder image" width="20%" height="50%">
                <h2 class="padding-col">Proses</h2>
                <p>Memberikan layanan dalam berbagai hal yang akan diproses melalui Halaman web ini yang terintegrasi dengan Kantor Pemerintahan</p>
                <p><a></a></p>
              </div><!-- /.col-lg-4 -->
              <div class="col-lg-4 padding-col">
                <img class="card-img-top" src="<?php echo base_url('assets/dashboard/welcome/images/Selesai.gif') ?>" alt="Generic placeholder image" width="20%" height="50%">
                <h2 class="padding-col">Selesai</h2>
                <p>Segala proses pelayanan dilkukan Online dan pemohon hanya perlu datang kembali saat mengambil berkas</p>
                <p><a></a></p>
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
    <br><br><br>
      
    <!--Asimethric container-->
    <!--div class="container-fluid">
        <div class="asymmetric" id="Informasi">
          <div class="text-center">
            <div class="row">
            <div class="col-md">
              <div id="value">0</div><a>Jumlah User<a>
            </div>
            <div class="col-md">
              <div id="value">0</div><a>Jumlah User<a>
            </div>
            <div class="col-md">
              <div id="value">0</div><a>Jumlah User<a>
            </div>
          </div>
        </div-->
        <br><br>
  <div class="container-fluid">
            <div class="asymmetric" id="Informasi"><div class="text-center">
          <img src="<?php echo base_url('assets/dashboard/welcome/images/user.png') ?>" alt="Avatar" width=80 height=80>
                  <div id="value">0</div><a>Jumlah User<a>
              </div><br><br>
            <div class="text-center">
          <img src="<?php echo base_url('assets/dashboard/welcome/images/files.png') ?>" alt="Avatar" width=80 height=80>
                  <div id="value1">0</div><a>Jumlah Surat<a>
              </div><br><br>
            <div class="text-center">
            <img src="<?php echo base_url('assets/dashboard/welcome/images/sukses.png') ?>" alt="Avatar" width=80 height=80>
                  <div id="value2">20</div><a>Jumlah Pelayanan Sukses<a>
              </div>
        </div>
      </div>
  </div>
    <br><br><br><br><br><br><br>
          <div class="text-center" id="Registrasi">
            <img src="<?php echo base_url('assets/dashboard/welcome/images/Man.png') ?>" alt="Avatar" class="rounded" id="login"width=200 height=200>
      </div>
  <br>
      <div class="text-center" id=""> 
          <a href="<?php echo base_url('registrasi') ?>"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-retweet" aria-hidden="true"></i> Daftar</button></a>
          <a href="<?php echo base_url('login') ?>"><button type="button" class="warna btn btn-secondary btn-lg"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Masuk</button></a>
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
      <br><br><br><br><br>
      <!--Asymetri2c-->
      <div class="container-fluid">
            <div class="asymmetric" id="Helpdesk"><div class="text-center">
          <img src="<?php echo base_url('assets/dashboard/welcome/images/Help.png') ?>" alt="Avatar" width=200 height=200>
                  <div><a>Helpdesk<a><p>Telepon : (021) - 888 888 | E-mail : mastersiap@admin.com<p></div>
        </div>
        </div>
        <br><br><br><br>
      <!--Table-->
      <div class=text-center><h3>Informasi Status Pelayanan Administrasi</h3></div>
        <div class = text-center>
          <h5>Kecamatan ............<h5>
            <a>Kelurahan ............<a>
          </div>
          <br>
      <table class="table text-center" id="Announce">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">NIK</th>
        <th scope="col">Nama</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>000001</td>
        <td>Bambang Sukamto</td>
        <td>Tuntas</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>000002</td>
        <td>Agus Suparman</td>
        <td>Proses</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>000001</td>
        <td>Aisyah Amini</td>
        <td>Tunda</td>
      </tr>
    </tbody>
  </table>
          <!-- FOOTER -->
        <footer class="container">
            <p class="float-right js-scroll-trigger"><a href="#home">Back to top</a></p>
            <p>&copy; 2018 USB Smart City &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
      
      <!-- Counter Script-->
      <Script>
      function animateValue(id, start, end, duration) {
      var range = end - start;
      var current = start;
      var increment = end > start? 1 : -1;
      var stepTime = Math.abs(Math.floor(duration / range));
      var obj = document.getElementById(id);
      var timer = setInterval(function() {
          current += increment;
          obj.innerHTML = current;
          if (current == end) {
              clearInterval(timer);
          }
      }, stepTime);
  }
  animateValue("value", 100, 25, 2000);
  animateValue("value1", 100, 55, 2000);
  animateValue("value2", 100, 82, 2000);
      </Script>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="bootstrap-4.1.1/assets/js/vendor/jquery-slim.min.js"></script>
      <script src="bootstrap-4.1.1/assets/js/vendor/popper.min.js"></script>
      <script src="bootstrap-4.1.1/js/src/carousel.js"></script>
      <script src="bootstrap-4.1.1/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.1.1/js/src/scrollreveal.js"></script>
    
      <script type="text/JavaScript">
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
    
  <!--LoadingJQuery-->
    <script>
    $(document).ready(function(){
    $(".preloader").fadeOut();
    })
    </script>

  <!-- Scroll reveal JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
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