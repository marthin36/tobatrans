
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

	<style>
	body{
    background-image: url("image/m2.jpg");
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
}
</style>
</head>
<body>

	<!-- <script>alert("Maaf, anda belum terdaftar");</script> -->

	<?php 
	require_once("header.php")
	 ?>
	 <br><br><br><br> <br><br>
<center>
	<div class="container">
<div class="login1">
<form  action="prosesdaftar.php" method="POST" enctype="multipart/form-data">
<p style="font-family: arial rounded mt;font-size: 20px;">Register</p>
	<img src="image/logo.png" width="350">
    
     
	<input type="text" name="namalengkap" placeholder="Nama Lengkap" class="login-input" style="text-align: left;" required>
	<input type="date" name="tanggallahir" placeholder="Tanggal Lahir" class="login-input" required>
	

	<div class="container" style="text-align: left;color: grey;"> Jenis Kelamin</p>
		<input type="radio" name="jenis_kelamin" value="L"  required>Laki-laki
	<input type="radio" name="jenis_kelamin" value="P"  required>Perempuan
		</div>

	<input type="text" name="alamat" placeholder="Alamat" class="login-input" required>
	<input type="number" name="nomortelepon" placeholder="Nomor Telepon" class="login-input" required>
	<input type="text" name="email" placeholder="E-mail"class="login-input" required>
	<input type="text" name="username" placeholder="username" class="login-input" required>
	<input type="password" name="password" placeholder="Kata Sandi"class="login-input" required>
	<input type="file" name="gambar" placeholder="masu" accept="image/*" class="login-input">
	
	<br><br><br>
<button class="btn btn-success">Daftar</button>
<br>
Anda sudah punya akun ? , <a href="login.php">Login</a><br>
</form>
</div>
<section></section>
<br><br><br><br><br><br><br><br>
</center>
</div>
<?php 
require_once("footer2.php");
 ?>
</body>
</html>