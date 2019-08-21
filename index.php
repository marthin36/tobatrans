
 
 <?php 
	include_once("loading.php");
 ?>
 <!DOCTYPE html>
<html>

<head>	
	<title>Beranda</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beranda</title>
	<link rel="icon" type="image/png" href="image/icon2.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/icon2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

	
<!-- font awesome -->
<link href="fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<!-- end -->
<!-- benar fontawesome -->
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
	<!--  -->
		<meta name="viewport" content="wiid="slider" dth=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 	
<!--  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- 	<script> 
		alert("Selamat Datang di TobaTrans");
	</script> -->
	<?php 
	require_once("conn.php");
 ?>
	<?php 
	require_once("header.php");
	?>
	<br><br>
	<!-- Masukkan Code -->

<section>
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<!-- <center>
		<button type="button" class="btn btn-primary">Get Started</button>
			</center> -->
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">	
				<img id="slider" src="image/m.jpg">
				
				<div class="carousel-caption" style="padding-bottom: 300px;font-style: arial; ">
					<p style="font-size: 60px;">Selamat Datang di Toba Trans</p>
					<br>
					<p style="font-size: 20px;">Toba Trans mengantarkan anda ketempat sekitar danau toba</p>
					<form action="#layanan">
				  	<button class="btn btn-success" id="sliderbutton" style="box-shadow: 0  17px 10px -10px rgba(0, 0, 0, 0.4);font-size: 30px;">  Mulai</button>

			  </form>
			</div>
		</div>
		<!--End Active-->
		<div class="item">
			<img id="slider" src="image/pajero.jpg">
			<div class="carousel-caption" style="padding-bottom: 300px;">
					<p style="font-size: 60px;">Selamat Datang di Toba Trans</p>
					<br>
					<p style="font-size: 20px;">Mengantarkan Penumpang dari bandara silangit</p>
			  <form action="#layanan">
				  	<button class="btn btn-success" style="box-shadow: 0  17px 10px -10px rgba(0, 0, 0, 0.4);font-size: 30px;">  Mulai</button>

			  </form>
			</div>
		</div>	
		<div class="item">
			<img id="slider" src="image/gb1.jpg">
		<div class="carousel-caption"  style="padding-bottom: 300px;">
					<p style="font-size: 45px;">Wisata Danau Toba Dengan Toba Trans</p>
					<br>
					<p style="font-size: 20px;">Berwisata mudah dengan Toba Trans</p>
			  <form action="#layanan">
			  	<button class="btn btn-success" style="box-shadow: 0  17px 10px -10px rgba(0, 0, 0, 0.4);font-size: 30px;"> Mulai</button>

			  </form>

		</div>
		<!--Start Slider Controls-->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hideen="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hideen="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	</section>
	<br>
	<section id="pilihan">
	<div class="container">
		<div class="row">
			<!-- <h1>Silahkan pilih layanan kami</h1> -->
			<section id="pilihan">

				<center>
						<p style="font-size: 40px;color: green;">Kerjasama</p>
				</center>
											<div class="col-sm-4">
														<div class="panel panel-success" >
																	<div class="panel-heading" >
																	         <h2>Noah Hotel</h2>
																	</div>
												           <div class="panel-body">
											                        <a href="noah.php"><img width="300" height="150" style="padding: 0px;margin:0px;border-image: 5px;" src="image/noah.jpg">
											                        </a>
											                    <div id="menulayanan">
						                                            
					    						
											                    </div>
										                    </div>
										                </div>
												         
										   </div>			
	
				                           <div class="col-sm-4">
				                           	<div class="panel panel-success">
			                                           <div class="panel-heading">
			                                           <h2>Silangit Airport</h2>
			                                            </div>
			                                               <div class="panel-body">
			                                               	<a href="silangit.php">
			                                             <img width="300" height="150" style="padding: 0px;margin:0px;" src="image/silangit.jpg">
															</a>
															<div id="menulayanan">	
																	
                       									    </div>
                       									</div>
                       						</div>
										   </div>					
				    
		
										    				
				
												<div class="col-sm-4">
												<div class="panel panel-success">
												<div class="panel-heading">
													
												<h2>Tapanuli Utara</h2>
												 
												</div>
												<div class="panel-body">
													<a href="taput.php">	<img width="300" height="150" style="padding: 0px;margin:0px;"  src="image/taput.png"></a>
												<div id="menulayanan">	
															
                       							</div>
												</div>
												</div>
												</div>
				
							
			
		</div>
	</div>
</section> 


<section id="tentang">
	<div class="container" style="margin-bottom: 40px;">
		<div class="row">	
			<div class="col-sm-12">
				<center>
				<img src="image/logo.png" style="margin-bottom: 20px;">
				<p class="text" style="font-size: 20px; text-decoration: bold;">Toba Trans merupakan aplikasi web yang bergerak di bidang transportasi. Toba Trans di
kawasan dekat dengan bandara Silangit yang terletak di Tapanuli Utara, Sumatera Utara.
</p>
				</center>
			</div>
		</div>
	</div>
</section>

<section id="layanan">
<div class="container" style="padding:20px 0px 50px 0px;">
	<h3>Kami menyediakan dua Layanan</h3>
  <div class="row">
    <div class="col-sm-6">
      <h3>Toba Car</h3>
      <p  style="font-size: 17px;">Menyediakan mobil untuk mengantar
anda ke tempat tujuan yang 
anda inginkan</p>
    </div>
    	
    <div class="col-sm-6">
      <h3>Toba Wisata</h3>        
      <p style="font-size: 17px;">Kami siap melayani anda ke tempat 
wisata di sekitaran bahkan 
keliling Danau Toba</p>
    </div>
  </div>
</div>
</section>
<!-- pilihan -->
<section>
<?php
require_once('pilihan.php')
?> 
 </section>

<!-- end pilihan -->

	<section id="layanan" style="background-image: url(image/k1.jpg);opacity: 0.6;" );">
<div class="container" style="padding:20px 0px 50px 0px;">
	<h1>Mengapa Banyak Memilih Kami</h1>
  <div class="row">
    <div class="col-sm-4">
      <img src="image/icon/car.png" style="width: 80px;">
      <h3>Pilihan Mobil Terlengkap</h3>
      <p  style="font-size: 17px;font-color:#000000">Menyediakan beberapa pilhan mobil yang dapat di sewa bersama keluarga dari Bandara Silangit</p>
    </div>
    <div class="col-sm-4">
    	<img src="image/icon/driver.png" style="width: 80px;">
      <h3>Driver Profesional</h3>	
      <p style="font-size: 17px;">Driver yang kami sediakan sudah memiliki Surat Izin Mengemudi Resmi dan kami jamin Profesional</p>
    </div>	
    <div class="col-sm-4">
    	<img src="image/icon/protection.png" style="width: 80px;">
      <h3>Aman & Nyaman</h3>        
      <p style="font-size: 17px;">Garansi Kenyamanan dari Pelanggan kami adaalah tujuan dan misi utama Toba Trans</p>
    </div>
  </div>
  <div class="row">
  	<div class="col-sm-4">
      <img src="image/icon/stopwatch.png" style="width: 80px;">
      <h3>Garansi Tepat Waktu</h3>
      <p  style="font-size: 17px;"> Ketepatan waktu penjemputan adalah salah satu keunggulan kami dari travel lain</p>
    </div>
    <div class="col-sm-4">
      <img src="image/icon/money.png" style="width: 80px;">
      <h3>Harga Sewa Termurah</h3>
      <p  style="font-size: 17px;">Kami berikan penawaran harga terbaik daripada yang lain .Hubungi kami dan dapatkan murahnya</p>
    </div>
    <div class="col-sm-4">
      <img src="image/icon/friend.png" style="width: 80px;">
      <h3>Ramah & Bersahabat</h3>
      <p  style="font-size: 17px;">Kami telah dikenal oleh pelanggan kami karena keramahan serta kami bersahabat kepada siapapun</p>
    </div>
  </div>
</div>
</section>
<section>

	<?php 
	require_once ("footer.php");
	 ?>

	 </body>

	 <script>
			$('.carousel').carousel({			//Waktu Carousel
				interval: 3000
			})
		</script>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	   <a href="#" class="back-to-top"><span style="padding-top: 12px;" class="glyphicon glyphicon-chevron-up"></span></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
    <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>


</body>
</html>