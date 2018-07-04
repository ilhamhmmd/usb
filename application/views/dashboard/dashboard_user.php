<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Dashboard User</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/dashboard/user/bootstrap2.css') ?>" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">User</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Beranda <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Buat Surat
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Buat KTP
                </a>
              </li>
 <!--Menu 2-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Laporan</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="upload"></span>
                  Upload File
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bell"></span>
                  Pengumuman
                </a>
              </li>
            </ul>
          </div>
        </nav>
<!--Konten-->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
		<br>
          <div class="text-center">
		  	<div class="">
		 		<div>
						<img class="" src="images/gbr.jpg" alt="Generic Placeholder image" width="370" height="300"/>
				</div>
			</div>
	<br>
		  	<div class="float-top-center">
		<h4>Sistem Informasi Administrasi Penduduk</h4>
		<a>disini anda dapat melakukan registrasi permohonan KTP sampai dengan pembuatan surat secara online pada tingkat RT/RW, Kelurahan, dan Kecamatan<a>
		</div>
		<br><br><br>
          <h3>DATA PENDUDUK</h3>
		  <br>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Kelamin</th>
                  <th>Pekerjaan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>00001</td>
                  <td>Bambang Sukamto</td>
                  <td>Jalan Sayur No. 2</td>
                  <td>Laki-Laki</td>
                  <td>Polisi</td>
                </tr>
              </tbody>
            </table>
			<a>anda telah login sebagai data diatas</a>
          </div>
        </main>
      </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/dashboard/user/jquery-slim.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/user/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/dashboard/user/bootstrap.min.js') ?>"></script>

    <!-- Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>

