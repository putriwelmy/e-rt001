<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>e-rt 001/002</title>

  <!-- Font Awesome Icons -->
  <link href="<?php echo base_url("assets/user")?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="<?php echo base_url("assets/user")?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?php echo base_url("assets/user")?>/css/creative.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">RT.001 RW.002</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <!--li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Beranda</a>
          </li-->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kk">Data Keluarga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#keuangan">Keuangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead <marquee></marquee> -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Selamat Datang</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Website ini dibuat untuk mempermudah warga dalam melihat data di RT 001</p>
		  <table class="table table-bordered text-white-50">
				<tr>
					<th>no</th>
					<th>perihal</th>
					<th>nomor surat</th>
					<th>tanggal</th>
					<th>aksi</th>
				</tr>
				<?php
				$i=1;
				foreach($pengumuman as $peng) {?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $peng->judul; ?></td>
					<td><?php echo $peng->no_surat; ?></td>
					<td><?php echo $peng->tgl_posting; ?></td>
					<td><a href='#' class="detail">detail</a></td>
				</tr>
				<?php $i++; } ?>
			</table>
        </div>
		<div class="col-lg-10">
			
		</div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <!--section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">We've got what you need!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
        </div>
      </div>
    </div>
  </section-->

  <!-- Services Section -->
  <section class="page-section" id="kk">
    <div class="container">
      <h2 class="text-center mt-0">Data Keluarga Rt 001 Rw 002</h2>
      <hr class="divider my-4">
      <div class="row">
        
        <table class="table table-bordered">
			<thead>
				<th>No</th>
				<th>No.KK</th>
				<th>Nama Kepala Keluarga</th>
				<th>Alamat</th>
				<th>RT/RW</th>
				<th>Kode Pos</th>
				<th>Kelurahan</th>
				<th>Kecamatan</th>
				<th>Kabupaten/Kota</th>
				<th>Provinsi</th>
			</thead>
			<tbody>
					<?php 
					$no = 1;
					foreach($kk as $row) {			
					?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $row->no_kk;?></td>
							<td><?php echo $row->kepala_keluarga;?></td>
							<td><?php echo $row->alamat;?></td>
							<td><?php echo $row->rt_rw;?></td>
							<td><?php echo $row->kode_pos;?></td>
							<td><?php echo $row->kelurahan;?></td>
							<td><?php echo $row->kecamatan;?></td>
							<td><?php echo $row->kabupaten;?></td>
							<td><?php echo $row->provinsi;?></td>
						</tr>
				<?php $no++; } ?>		
			</tbody>
		</table>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="page-section bg-primary" id="keuangan">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Informasi Keuangan</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">
		   <table class="table table-bordered">
			<thead>
				<td>No</td>
				<td>Bulan</td>
				<td>Tahun</td>
			</thead>
			<tbody>
					<?php 
					$no = 1;
					foreach($keuangan as $row) {			
					?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $row->nama_bulan;?></td>
							<td><?php echo $row->tahun;?></td>
						</tr>
				<?php $no++; } ?>		
			</tbody>
		</table>
		  
        </div>
      </div>
    </div>
  </section>
  
  <!-- Call to Action Section -->
  <!--section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section-->

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Jalan Kemuning 1 Rt.001 Rw.002 Kel.Pulo Gadung Kec.Pulo Gadung Jakarta Timur 16454</div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+62 87875620533</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:deawelmy@gmail.com">deawelmy@gmail.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Dea welmy</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url("assets/user")?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url("assets/user")?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url("assets/user")?>/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url("assets/user")?>/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url("assets/user")?>/js/creative.min.js"></script>
  
  <script type="text/javascript">
	$(document).ready(function(){
		$('.detail').on('click', function(e){
			e.preventDefault();
			console.log("tes");
			alert("tes");
		});
	});
  </script>

</body>

</html>
