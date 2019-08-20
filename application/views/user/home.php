<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/user")?>/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

<style type="text/css">
  header.masthead {
    padding-top: 10rem;
    padding-bottom: calc(10rem - 72px);
    /*background-color: black !important;*/
    background: -webkit-gradient(linear,left top,left bottom,from(rgba(92,77,66,.8)),to(rgba(92,77,66,.8))),url(<?php echo base_url('assets')?>/user/img/logo.jpg) !important;
     background: linear-gradient(to bottom,rgba(92,77,66,.8) 0,rgba(92,77,66,.8) 100%),url(<?php echo base_url('assets')?>/user/img/logo.jpg)!important; 
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-size: cover;
}
</style>

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
            <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
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
          <p class="text-white-75 font-weight-light mb-5">Website ini dibuat untuk mempermudah warga dalam melihat data di RT:001 RW:002 Pulo Gadung Kecamatan : Pulo Gadung, Kelurahan : Pulo Gadung Kota Administasi Jakarta Timur</p>
      <?php 
        $str="";
        foreach($pengumuman as $peng) {
            $str .= " <font color='white'> No. Surat: ".$peng->no_surat." | Perihal: ".$peng->judul." | Tanggal: ".$peng->tgl_posting." | ".strip_tags($peng->isi);
        } ?>
      <marquee><?php echo $str; ?></marquee>
     <!--  <table class="table table-bordered text-white-50">
				<tr>
					<th>no</th>
					<th>perihal</th>
					<th>nomor surat</th>
					<th>tanggal</th>
					<th>aksi</th>
				</tr>
				<?php
				//$i=1;
				//foreach($pengumuman as $peng) {?>
				<tr>
					<td><?php //echo $i; ?></td>
					<td><?php //echo $peng->judul; ?></td>
					<td><?php //echo $peng->no_surat; ?></td>
					<td><?php //echo $peng->tgl_posting; ?></td>
					<td><a href='#' onclick="detailPengumuman('<?php //echo $peng->id_pengumuman; ?>')">detail</a></td>
				</tr>
				<?php //$i++; } ?>
			</table> -->
        </div>
		<div class="col-lg-10">
			
		</div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <!-- <section class="page-section bg-primary" id="about">
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
  </section> -->

  <!-- Services Section -->
  <section class="page-section" id="kk" style="border: thin solid">
    <div class="container">
      <h2 class="text-center mt-0">Data Keluarga RT 001 RW 002</h2>
      <hr class="divider my-4">
      <!-- <div class="row">
        
        
      </div> -->
    </div>
    <table class="table table-bordered" style="width: 100%; margin: 10px; size:12px;">
          <thead>
            <th>No</th>
            <th>No.KK</th>
            <th>Nama Kepala Keluarga</th>
            <th>Alamat</th>
            <th>RT</th>
            <th>RW</th>
            <th>Kode Pos</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kabupaten/Kota</th>
            <th>Provinsi</th>
            <th>Aksi</th>
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
                  <td><?php echo $row->rt;?></td>
                  <td><?php echo $row->rw;?></td>
                  <td><?php echo $row->kode_pos;?></td>
                  <td><?php echo $row->kelurahan;?></td>
                  <td><?php echo $row->kecamatan;?></td>
                  <td><?php echo $row->kabupaten;?></td>
                  <td><?php echo $row->provinsi;?></td>
                  <td><a href='#' onclick='detail_kartu("<?php echo $row->id_kk;?>")'> detail</a>
                </tr>
            <?php $no++; } ?>   
          </tbody>
        </table>
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
							<td><a href="#" style="color:white;" onclick="detail_keuangan('<?php echo $row->id_bulan; ?>')"><?php echo $row->nama_bulan;?></a></td>
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
  <section class="page-section" id="galeri">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Galeri</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5"></div>
      </div>
      <!-- <div class="page-content-inner"> -->
    <div class="row">
        <div class="col-md-12 container-costume border1 text-center"> 
        <!--SLIDER-->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo base_url('pictures/kerja.jpg')?>" style="width: 50%;" alt="">
            <div class="carousel-caption">
              ...
            </div>
          </div>
          <div class="item">
            <img src="<?php echo base_url('pictures/kerja2.jpg')?>" style="width: 50%;" alt="">
            <div class="carousel-caption">
              ...
            </div>
          </div>
         <!-- <div class="item">
            <img src="<?php echo base_url('assets/user/bahan/slide3.jpg')?>" style="width: 50%;" alt="">
            <div class="carousel-caption">
              ...
            </div> -->
          </div>
        </div>
    <!--  <div class="row">
        <table class="table table-bordered">
          <thead>
            <th>No</th>
            <th>Kegiatan</th>
            <th>Waktu</th>
          </thead>

          <?php 
          $no=1;
          foreach ($galeri as $row) { ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><a href="#" onclick="detail_galeri('<?php echo $row->id_kategori ?>')"><?php echo $row->kategori; ?></a></td>
            <td><?php echo $row->tanggal_galeri ?></td>
          </tr>
          <?php $no++; } ?>
         </table>
      </div>
    </div> -->
  </section>

  <!-- kontak -->
  <section class="page-section bg-primary" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Kontak</h2>
          <hr class="divider my-4">
          <p class="text-white mb-5">Jalan Kemuning 1 Rt.001 Rw.002 Kel.Pulo Gadung Kec.Pulo Gadung Jakarta Timur 16454</div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div class="text-white">+62 87875620533</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:deawelmy@gmail.com" style="color:white">deawelmy@gmail.com</a>
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
  
  
<script type="text/javascript" src="<?php echo base_url("assets/user")?>/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  
  <script type="text/javascript">
	function detailPengumuman(id){
		//alert(id);
		$.fancybox.open({
         href : "Detail_pengumuman/index/"+id,
         type : 'iframe',
         helpers : {
             media: true 
         },
         width: "80%",
         height: 800,
         autoSize: false,
         scrolling: false
		});
		
	}
	
	function detail_kartu(id_kk){
		
		//alert(id);
		$.fancybox.open({
         href : "Detail_kartu/index/"+id_kk,
         type : 'iframe',
         helpers : {
             media: true 
         },
         width: "95%",
         height: 800,
         autoSize: false,
         scrolling: false
		});
	}
	
	function detail_keuangan(id_bulan){
		
		//alert(id);
		$.fancybox.open({
         href : "Detail_keuangan/index/"+id_bulan,
         type : 'iframe',
         helpers : {
             media: true 
         },
         width: "80%",
         height: 800,
         autoSize: false,
         scrolling: false
		});
	}

  function detail_galeri(id_kategori){
    
    //alert(id);
    $.fancybox.open({
         href : "Detail_galeri/index/"+id_kategori,
         type : 'iframe',
         helpers : {
             media: true 
         },
         width: "80%",
         height: 800,
         autoSize: false,
         scrolling: false
    });
  }
  </script>

</body>

</html>
