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
			<p style="font-size: 40px;">Daftar Supir Toba Trans</p>
			<p >Toba box menyediakan jasa antar paket ke wilayah sekitaran danau toba menggunakan transportasi darat</p>
			<form method="post" action="prosestobabox.php">
				<label>Nama </label><br>
				<input type="text" class="form-control" name="nama" placeholder="masukkan nama"><br>
				
					<label>Kendaraan</label>
					<br>
		       <input type="radio" name="kendaraan" value="T"  required style="size:20%;"> Tidak Punya
	           <input type="radio" name="kendraan" value="Y"  required> Punya
		       <br><br>

				<label>Pengalaman membawa kendaraan  </label><br>
				<input type="number" class="form-control" name="pegalaman" placeholder="masukkan number" ><br>
				<label>Alamat</label><br>
				<input type="text" class="form-control" name="alamat" required placeholder="masukkan alamat"><br>
				<label>Nomor Telepon</label><br>
				<input type="number" class="form-control" name="notelp" required placeholder="masukkan no Telepon"><br>
				<label>Deskripsi</label><br>
				<textarea name="deskripsi" class="form-control" placeholder="deskripsi">

				</textarea><br>
				<button type="submit" class="btn btn-primary">kirim</button>
				<br><br>
				</form>
			</div>
			<br><br>
		 <div class="col-sm-5" ">
		<img src="image/driver1.png" style="padding: 80px;">	

	</div>
		</div>
       
	</div>


</section>
<?php 
	require_once('footer.php');
?>
</body>
</html>