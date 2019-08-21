<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TobaBox|TobaTrans</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/icon2.png">
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

</head>
<body>
<?php 
	require_once('header.php');
?>
<br><br><br><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
			<p style="font-size: 56px;font-family: arial rounded mt">Toba Box</p>
			<p >Mau kirim paket ke keluarga yang ada di sekitaran danau toba tapi gak tau caranya gimana
				Sekarang kamu bisa pake tobabox
			</p>
			<form method="post" action="prosestobabox.php">
				<label>Nama Penerima:</label><br>
				<input type="text" class="form-control" name="nama_penerima" >
				<label>Nama Pengirim:</label><br>
				<input type="text" class="form-control" name="nama_pengirim" >
				<label>No.HP Penerima:</label><br>
				<input type="number" class="form-control" name="no_penerima" >
				<label>No.Hp Pengirim:</label><br>
				<input type="number" class="form-control" name="no_pengirim" >
				<label>Keterangan</label>
				
				<div class="container" ">
				<input type="radio" name="keterangan" value="Y"  required>Barang dijemput
				<input type="radio" name="keterangan" value="T"  required>Tidak  dijemput
				</div>
				<label>Tujuan</label>
				<select  name ="kota" class="form-control">
					<option>--Kecamatan--</option>
					<option>Porsea</option>
					<option>Laguboti</option>
					<option>Balige</option>
					<option>Tarutung</option>
				</select>
					<label>Alamat Pengirim</label>
				<input type="text" class="form-control" name="alamat_pengirim" >
				
				<label>Alamat Penerima</label>
				<input type="text" class="form-control" name="alamat_penerima" >
				
				<label>Deskripsi Paket</label><br>
				<input type="text" name="deskripsi" class="form-control">

			
				<br>
				<button type="submit" style="float: right;" class="btn btn-success">kirim</button>
				<br><br><br>
				</form>
			</div>
			<div class="col-md-6">
				
			 <p style="padding-top: 120px;padding-left: 170px;font-family:arial rounded mt"> Toba Box
			     Kini toba box hadir untuk mengantarkan paket anda kepada keluarga,sahabat anda yang berada di sekitaran danau toba</p>
				<img src="image/box1.png" style="padding-top: 40px;width: 100%;float: right;padding-left: 170px;" >
				 			
			</div>
		</div>
	</div>
</section>
<?php 
	require_once('footer2.php');
?>
</body>
</html>