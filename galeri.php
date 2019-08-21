<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Galeri | Toba Trans</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/icon2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- benar fontawesome -->
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
  <!--  -->
	<!--  -->
		<meta name="viewport" content="wiid="slider" dth=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  	
    <style type="text/css">
    /* padding-bottom and top for image */
.mfp-no-margins img.mfp-img {
  padding: 0;
}
/* position of shadow behind the image */
.mfp-no-margins .mfp-figure:after {
  top: 0;
  bottom: 0;
}
/* padding for main container */
.mfp-no-margins .mfp-container {
  padding: 0;
}

  </style>
<!--  -->

</head>
<body>
<br>
<?php require_once("header.php") ?>
<?php require_once("conn.php"); ?>
<br>  

<section id="inner-headline">
    <div class="container">
      <div class="row">
       <br>
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
            <li><a href="#" style="color:#000000;">Galeri</a><i class="icon-angle-right"></i></li>
          </ul>
        </div>
      </div>
    </div>
</section>

<section class="daftarmobil2">
  <div class="container">
    <div class="row">
      <h3 style="text-align: center;font-family: arial rounded mt;font-size: 30px;">Galeri Wisata Danau Toba</h3>
        <?php
              $query = "SELECT * FROM galeri ";
              $item = mysqli_query($conn, $query);
              while($items = mysqli_fetch_array($item)){
           ?>
        <div class="col-sm-3">
          <br><div class="card">
            <a class="image-popup-vertical-fit" href="image/galeri/<?=$items['gambar'];?>">
  <img src="image/galeri/<?=$items['gambar'];?>" width="75" height="75">
</a>
             
            <a href="info_galeri.php?id_galeri=<?=$items['id_galeri'];?>">
              <h4><span class="badge" style="width: 200px;height:30px;font-size:15px;"><?=$items['judul'];?></span></h4>
              <h4><?=$items['lokasi'];?></h4>
              <!-- <button>Lihat</button> -->
            </a>
         
          </div>
        </div>
      <?php } ?>
        <!-- <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/galeri/huta_siallagan.jpg">
              <h4>Hutan Siallagan</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/galeri/sipiso_piso.jpg">
              <h4>Air Terjun Sipiso-piso</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/galeri/sigale_gale.jpg">
              <h4>Patung Sigale-gale</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div>
    </div> -->
   <!--  <br>
    <div class="row">
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/galeri/bukit_senyum.jpg">
              <h4>Bukit Senyum</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div> --><!-- 
        <div class="col-sm-3">
          <div class="card">
            <a href="">
              <img src="image/.jpg">
              <h4>Toyota Avanza</h4>
              <h4>Rp. 20.000</h4>
              <button>Lihat</button>
            </a>
          </div>
        </div> -->
     <!-- <br> -->
    </div>
    <br>
</div>

<!--     <div class="row">
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
    </div> -->
  </div> 
</section>


<br><br><br><br><br>
<br><br><br><br><br><br>
<?php require_once("footer2.php") ?>

</body>
</html>
<script type="text/javascript">
      $(document).ready(function() {

  $('.image-popup-vertical-fit').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: {
      verticalFit: true
    }
    
  });

  $('.image-popup-fit-width').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    image: {
      verticalFit: false
    }
  });

  $('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

});

    </script>