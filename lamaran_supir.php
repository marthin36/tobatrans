<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Lamaran Supir | TobaTrans</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/tobatransbiru.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>


	<!--  -->
		<meta name="viewport" content="wiid="slider" dth=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 	
<!--  -->
	<style>
	body{
    background-image: url("image/kaka.jpg");
     background-repeat: no-repeat;
     background-position: center;
     background-size: cover;
}
</style>
</head>
<body>
	<?php
	require_once("header.php");
	?>
	 <br><br><br><br>
<center>
<div class="login1">
<h3>Form Lamaran Supir</h3>
    <form method="POST" action="lamaransupir_proses.php">
	<input type="text" name="nama_supirs" id="nama_supir" placeholder="Nama Lengkap" class="login-input" style="text-align: left;" required>
	<input type="text" name="punya_kendaraans" id="punya_kendaraan" placeholder="Jenis Kendaraan" class="login-input" required>
	<input type="text" name="pengalamans" id="pengalaman" placeholder="Pengalaman" class="login-input" required>
	<input type="text" name="alamat_emails" id="alamat_email" placeholder="Alamat Email" class="login-input" required>
	<input type="number" name="nomor_telepons" id="nomor_telepon" placeholder="Nomor Telepon" class="login-input" required>
	<input type="text" name="deskripsis" id="deskripsi" placeholder="Deskripsi" class="login-input" required>
	<br><button name="daftar" type="submit" class="btn btn-primary" >Daftar</button>
</div>
</form>
<br><br><br><br><br><br><br><br>
<?php 
require_once("footer.php");
 ?>
</body>
</html>