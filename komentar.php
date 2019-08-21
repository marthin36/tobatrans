 <!DOCTYPE html>
<html>
<head>	
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
	require_once("header.php");
	?><br><br><br>
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
            
			<li><a href="#" style="color:#000000;">Komentar</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    </section>
<!-- breadcrumb -->

	<style type="text/css">
		footer{
			position: absolute;
		}
	</style>
<br>
<section>
	<div class="container">
	  <div class="row">
		<div class="col-sm-6">
		<div class="login1" style="float: left;">
		<div class="row">
			<div class="col-md-12">
				<form method="post" action="komentar_process.php">
				<center><p style="font-family: arial rounded mt;font-size: 20px;">Anda dapat memasukkan komentar kepada kami</p></center>
				<h3>Subjek</h3>
				<input class="form-control" type="text" name="subjek">
				<h3>Komentar/Saran</h3>
				<textarea name="isi" class="form-control" style="height: 350px;"></textarea>
				<br><br>
				<button name="tambahKomentar" class="btn btn-success" style="float:right;padding-right:20px;"> 	Kirim</button><br>
			</form>
			</div>
		</div>
	</div>
    </div>

    <div class="col-sm-6">
 		<div class="info">
 				<ul type="none">
 					<li>
 						<p style="font-size: 22px;" ><img src="image/info.png"  width="100" height="100" style="float: left;">
 						Kami mengharapkan komentar dari anda yang membangun layanan kami kedepannya</p>

 					</li>
 					<br><br>
 					<li>
						<p style="font-size: 22px;" ><img src="image/info.png"  width="100" height="100" style="float: left;">
 						Kami mengharapkan komentar yang anda masukkan menggunakan bahasa yang sopan</p>

 					</li>
 					<br><br>
 					<li>
						<p style="font-size: 22px;" ><img src="image/info.png"  width="100" height="100" style="float: left;">
 						Anda dapat mengomentari layanan kami atau memberi kami saran untuk masukkan kami kedepannya</p>

 					</li>
	

 				</ul>
 		</div>
    </div> 
</div>
</div>
</section>
<br><br><br><br><br>
	<?php

	require_once("footer2.php");

	?>
</body>
</html>