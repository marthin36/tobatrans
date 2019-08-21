
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mobil | TobaTrans </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/mobil.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/tobatransbiru.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
 -->
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
	<!--  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<style>

  </style>
<body>
	<?php 
	require_once('header.php');
	 ?>
   <?php require_once("conn.php"); ?>
<!-- Perbaruan halaman Mobil-->
<br><br><br>
<!-- breadcrumb -->
<section id="inner-headline">
    <div class="container">
      <div class="row">
     
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Beranda</a><i class="icon-angle-right"></i></li>
            <li><a href="#" style="color: #000000;">Mobil</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    </section>
<!-- breadcrumb -->
<section class="daftarmobils">
  <div class="container">
    <div class="row">
      <h1 style="font-family:arial rounded mt;"><span class="label label-default"> Mobil</span></h1>
          <!-- <div class="col-sm-12"> -->
            <?php
              $query = "SELECT * FROM mobil WHERE jenis = 1";
              $item = mysqli_query($conn, $query);
              while($items = mysqli_fetch_array($item)){
           ?>
        <div class="col-sm-3">
          <br>
                <div class="card" >

                  <?php if($items['status']=="Tersedia"){ ?>

                  <a href="pesan_mobil.php?id_mobil=<?=$items['id_mobil']?>">
                    <?php echo"<img src='image/mobil/".$items['foto_mobil']."'>"?><br>
                    <h4><?php echo $items['nama_mobil']; ?></h4>
                    <h4><span  style="width: 20px;font-size: 20px;" class ="label label-primary">Batas Penumpang :
                    <span class="badge" style="font-size: 20px;"><?=$items['kapasitas_penumpang'] ?></span></span>
                    <h4>Status : <?php echo $items['status']; ?></h4>
                    <?php
                     // echo "Rp.".number_format($items['tarif']);
                     ?></h4>
                    <button> <span class="glyphicon glyphicon-search"></span> Lihat</button>
                  </a>
                <?php }else{ ?>
                    <a href="#">
                    <?php echo"<img src='image/mobil/".$items['foto_mobil']."'>"?><br>
                    <h4><?php echo $items['nama_mobil']; ?></h4>
                    <h4><span  style="width: 20px;font-size: 20px;" class ="label label-primary">Batas Penumpang :
                    <span class="badge" style="font-size: 20px;"><?=$items['kapasitas_penumpang'] ?></span></span>
                    <h4>Status : <?php echo $items['status']; ?></h4>
                    <?php
                     // echo "Rp.".number_format($items['tarif']);
                     ?></h4>
                    <button style="color: red; opacity: 0.5"> <span class="glyphicon glyphicon-search"></span> Tidak dapat di pesan</button>
                  </a>



                <?php } ?>
                </div>
          </div>
          <?php } ?>
        </div>

    <div class="row" style="margin-top: 50px;">
      <h1 style="font-family:arial rounded mt;"><span class="label label-default">Bus</span></h1><br>
          <!-- <div class="col-sm-12"> -->
            <?php
              $query = "SELECT * FROM mobil WHERE jenis = 2";
              $item = mysqli_query($conn, $query);
              while($items = mysqli_fetch_array($item)){
           ?>
        <div class="col-sm-3">
                <div class="card">
                  <a href="pesan_mobil.php?id_mobil=<?=$items['id_mobil']?>">
                    <?php echo"<img src='image/mobil/".$items['foto_mobil']."'>"?><br>
                    <h4><?php echo $items['nama_mobil']; ?></h4>
                    <h4><span class="label label-primary">  Batas Penumpang <span class="glyphicon glyphicon-search"></span>:
                    <span class="badge"><?=$items['kapasitas_penumpang'] ?></span></span>
                    <h4>Status : <?php echo $items['status']; ?></h4>
                    <?php
                     // echo "Rp.".number_format($items['tarif']);
                     ?> </h4>
                    <button><span class="glyphicon glyphicon-search"></span> Lihat</button>
                  </a>
                </div>
          </div>
          <?php } ?>
        <!-- </div> -->
        <!-- <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/innovareborn.png">
              <h4>Toyota Innova</h4>
              <h4>Rp. 40.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div> -->
        <!--
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/daihatsu_sigra.jpg">
              <h4>Daihatsu Sigra</h4>
              <h4>Rp. 20.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/avanza1.jpg">
              <h4>Toyota Avanza</h4>
              <h4>Rp. 20.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
      </div>
      <br>
     <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/1.jpg">
              <h4>Toyota Avanza</h4>
              <h4>Rp. 20.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/1.jpg">
              <h4>Toyota Avanza</h4>
              <h4>Rp. 20.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
      </div> -->
     <!-- <br>
     <div class="row">
      <h3>Bus</h3>
      <div class="col-sm-3">
        <div class="card">
          <a href="">
            <img src="image/hiace.jpg">
            <h4>Toyota Hiace</h4>
            <h4>Rp. 40.000</h4>
            <button>Lihat</button>
          </a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <a href="">
            <img src="image/elf.jpg">
            <h4>Isuzu ELF</h4>
            <h4>Rp. 40.000  </h4>
            <button>Lihat</button>
          </a>
        </div>
      </div>
    </div>
  </div> -->
    <!-- <div class="row">
      <h3>Bus</h3>
      <div class="col-sm-3">
        <div class="card">
          <a href="">
            <img src="image/innova.jpg">
            <h4>Toyota Hiace</h4>
            <h4>Rp. 20.000</h4>
            <button>Lihat</button>
          </a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
          <a href="">
            <img src="image/1.jpg">
            <h4>Toyota Avanza</h4>
            <h4>Rp. 20.000</h4>
            <button>Lihat</button>
          </a>
        </div>
      </div>
    </div>
  </div>  -->
</section>
<!-- Bagian akhir -->
<br><br>
	 <?php 
	require_once('footer2.php');
	 ?>
</body>
</html>