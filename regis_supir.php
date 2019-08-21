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
			<div class="col-sm-5">
			<p style="font-size: 30px;font-family: arial rounded mt;">Daftar Supir Toba Trans
			<p>Kami membuka lapangan pekerjaan untuk anda sebagai bagian dari kami</p>
			Daftarkan diri anda  dan tunggu konfirmasi dari kami </p>
			<form method="post" action="regis_supir_process.php">
				<label>Nama </label><br>
				<input type="text" class="form-control" name="nama" placeholder="masukkan nama"><br>
				
				<label>Kepeimilikan Kendaraan </label>

				<br>
	           <input type="radio" name="kendaraan" value="Punya"  required > Punya&nbsp;&nbsp;&nbsp;

	           
		       
		       <input type="radio" name="kendaraan" value="Tidak Punya"  required style="size:20%;"> Tidak Punya

		       
		       	<br>
				<br><label>Pengalaman membawa kendaraan (Tahun) </label><br>
				<p style="color:red;">*min. 3 tahun</p>
				<input type="number" min="3" class="form-control" name="pengalaman" placeholder="jumlah tahun" ><br>

				<label>Alamat Email</label><br>
				<input type="email" class="form-control" name="alamat" required placeholder="Email anda"><br>
				
				<label>Nomor Telepon</label><br>
				<input type="number" class="form-control" name="notelp" required placeholder="no telepon"><br>
				
				<label>Keterangan Pengalaman</label><br>
				<textarea name="deskripsi" class="form-control" placeholder="deskripsi">

				</textarea><br>
				<button type="submit" name ="tambahLamaran" class="btn btn-success" style="float: right;">kirim</button>
				<br><br>
				</form>
			</div>
			<br><br>
		 <div class="col-sm-5" ">
		<img src="image/23.png" style="padding: 80px;">	

	</div>
		</div>
       
	</div>


</section>
<br>
<?php 
	require_once('footer2.php');
?>
</body>
</html>