  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('user'); ?>">Dashboard</a>
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
	 	<h5 class="text-center font-weight-bold">Anda Masuk Sebagai :</h5><br>
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
                  <td><?= $user['nik'] ?></td>
                  <td><?= $user['nama'] ?></td>
                  <td><?= $user['alamat'] ?></td>
                  <td><?= $user['jenis_kelamin'] ?></td>
                  <td><?= $user['pekerjaan'] ?></td>
                </tr>
              </tbody>
    