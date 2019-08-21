<?php 
	require_once("conn.php");
 ?>
 <!DOCTYPE html>
<html><head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beranda</title>
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
			<?php    
	
	// connect_database();

				require_once("header.php");

	// require_once("slider.php");
			?>
   <br><br><br>
				 <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
      <li><a href="#" style="color:#000000;">Wisata Danau Toba</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
</section>

  <center><h2 style="font-family: arial rounded mt;font-size: 40px;">Wisata Danau Toba</h2></center>
	<div class="container" >
	  <div class="coll-sm-6">
	    <div class="sliderw">


       				<!DOCTYPE html>
       						<html>
      		 					<head>
       								<script type="text/javascript" src="slide/js/slidergezz.1.3.8.js"></script>
 									<link rel="stylesheet" type="text/css" href="slide/css/slidergezz.css" />
								</head>
       							<body>
       								
        								  
       		 								
        									<!-- 	<div id="slider_container_2" position="central"> -->
  						 						<div id="SliderName_2" class="SliderName_2">
    												<img src="slide/images/toba1.jpg" width="100px" height="236px" alt="Selamat Datang" title="Selamat Datang"/>
     			 						    <!-- <div class="slide/SliderName_2Description">Featured model: </div> -->
    												<img src="slide/images/toba2.jpg" width="100px" height="236px" />
     				 						<!-- <div class="SliderName_2Description">Featured model: <strong>Charlize Theron</strong> --><!-- </div> -->
    												<img src="slide/images/toba3.jpg" width="100" height="450"  />
     										<!-- <div class="SliderName_2Description">Featured model: <strong>Charlize Theron</strong> --><!-- </div> -->
   										
   												</div>
   										

								   								<script type="text/javascript">
								    								effectsSlide = 'rain,stairs,fade,blinds';
								    								var gezzSlider = Slidergezz.slider({container: 'SliderName_2', width: 550, height: 300, effects: effectsSlide,
								     								display: {
								      								autoplay: 4000,
								      								loading: {background: '#000000', opacity: 0.1, image: 'images/loading-slide.gif'},
								      								buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}}
								      								}
								   						 			});
								    							</script>
   			
 	
    					
 						
    
       							</body>
       					</html>
       			</div>			
       	</div>

       	
       	       			<div class="coll-sm-6">
       	       				<div class="detailwisata">
       	       					<p>Kami mempermudah anda liburan ke Danau Toba dengan layanan yang kami sediakan</p>	

       	       					<table border="2" width="450px">
       	       						<th style="background: gray;"> 
       	       						<center>Fasilitas</center>
       	       						</th>
       	       						<tr>
       	       						<td>
       	       						<ul>
       	       							<li>Makanan dan minuman saat diperjalanan</li>
       	       							<li>Sewa kamera</li>
       	       							<li>Mengantarkan ke penginapan terdekat(optional)</li>
       	       						</ul>
       	       						</td>
       	       						</tr>

       	       					</table>
                        <br><br>
       	       					<p style="font-size: 30px;color: blue;">Wisata anda lebih menyenangkan dengan Toba Trans</p>
       	       					<p>
       	       					Anda sudah dapat berlibur ke Danau Toba bersama keluarga ,rekan kerja atau bersama kekasih
       	       					</p>
                        <br><br>
       	       				<form method="post" action="pemesanan_wisata.php">
                      <button type="submit" class="btn btn-success ">Pesan Sekarang</button>
                       </form>
       	       				</div>

       	       			</div>
                    
     </div>
  			
  			<!-- <div class="coll-sm-6" >
 							<div class="detailwisata" >
    							<p>Kami siap membawa anda liburan ke danau toba untuk membawa anda melihat keindahan objek wisata kami juga menyediakan fasilitas yang memberi adnda kenyamanan untuk berlibur ke Danau toba
    							</p>
    						</div>
    					</div> -->
  		
  		
  </body>
</html>

<br><br>
<?php
require_once("footer2.php");
?>