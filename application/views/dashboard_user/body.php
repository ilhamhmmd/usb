  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Dashboard User</li>
      </ol>
    <!-- /.container-fluid-->
	<div class="container">
	<marquee behavior="scroll" direction="left">SISTEM INFORMASI ADMINISTRASI PENDUDUK | USB Smart City 2018</marquee>
		  <div class="text-center">
		 		<div>
						<img class="" src="<?php echo base_url(); ?>assets/dashboard/user/images/welcome.png" alt="Generic Placeholder image" width="100%" height="100%"/>
				</div>
			</div>
	</div><br>
	 <div class="container text-left">
	 	<h5>Anda Masuk Sebagai :</h5><?php var_dump($user); ?>
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
    