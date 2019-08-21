<?php require_once("conn.php"); ?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pemesanan Wisata</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/icon2.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
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
<br><br><br>
<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
            <li><a href="wisata.php">Wisata Danau Toba</a></li>
			<li><a href="#" style="color:#000000;">Pemesanan Wisata Danau Toba</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    </section><br>
<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
			<p style="font-size: 50px;font-family: arial rounded mt;">Wisata Danau Toba</p>
			<p>Toba Trans adalah layanan yang kami sediakan untuk Anda yang sedang bepergian ke kota Tapanuli dengan melalui Bandara Silangit. Kami menyediakan berbagai Armada mobil guna mengantarkan Anda sampai tujuannya nanti. Kami sediakan layanan antar jemput, taksi bandara silangit, rental mobil dan paket wisata di danau toba</p>

<form action="pemesanan_wisata_process.php" method="post" id="form1"  name="pesanMobil"  enctype="multipart/form-data">
 			<br>
 			<label>Jumlah Pengunjung</label>
 			<input class="form-control" type="number" name="jumlahPengunjung"><br>
			<label for="select1">Tempat Wisata</label><br>
			<select onclick="tampilkan()" id="select1" class="form-control" name="tujuan">
				<option>----tujuan----</option>
				<?php 
			$query2 = "SELECT * FROM tujuan_toba_wisata";
			$tujuan = mysqli_query($conn, $query2);
			while($tujuan1 = mysqli_fetch_array($tujuan)){ ?>				
				<option><?=$tujuan1['tempat_wisata']?></option>
			<?php } ?>
			</select><br>

			
			<table class="table">
				<tr>
					<td ><label>Harga</label></td>
					<td colspan="2"></td>
					<td></td>
					<td>Rp.</td>
					<td><input class="form-control" id="harga" value="" size="7" name="harga"readonly></td>
					<td><p style="font-size: 20px;">/ orang</p></td>
				</tr>
			</table>


			<table class="table">
				<tr>
					<td><label>Pilih Metode Pembayaran</label></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><input type="radio" name="metode_bayar" value="Bayar di tempat">  &nbsp;&nbsp;<i class="fa fa-money fa-2x"></i>&nbsp;Bayar di tempat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="metode_bayar" value="Transfer ATM">&nbsp;&nbsp;<i class="fa fa-credit-card fa-2x"></i>&nbsp;&nbsp;Transfer ATM</td>
					<td></td>
					<td></td>
				</tr>
			</table>

		<label>Keterangan Pengunjung</label>

			<textarea class="form-control" name="keteranganPengunjung" style="height:120px;"></textarea>
			<br>
			
			<!-- <h3><b>Total harga: Rp. 200.000</b></h3> -->
			<button class="btn btn-success" type="submit" style="float: right;" name="pesanWisata">Pesan</button>	
			
			
			<!-- <h3>total</h3> -->
			
			<!-- <p onchange="total()">fers</p> -->
		</form>


			<br><br><br>
		</div>
		<div class="col-md-6">
			 <br><br><br><br>
			 <center>
			 	<img src="image/danauto.png" style="width: 80%; height: 80%;border-radius: 50%">
				<!-- <img src="image/tourism.png" style="padding-top: 150px;width: 200%;float: right;padding-left: 370px;" > -->
				 <p style="text-align: center;padding-left: 60px;font-size: 40px;">Ayo Wisata Danau ke 	 toba</p>	
			</center>
			</div>
		<!-- Script form Pendaftaran -->
		<script>
			function tampilkan(){
 
		  var nama_kota=document.getElementById("form1").select1.value;
		  var p_kontainer=document.getElementById("harga");
		 

		 <?php 
		 	// $idMobil = $_GET['id_mobil'];
			$query = "SELECT * FROM tujuan_toba_wisata";
			$kecamatan = mysqli_query($conn, $query);
			while($kecamatan1 = mysqli_fetch_array($kecamatan)){
		 ?>
		  if (nama_kota=="----tujuan----")
		    {
		    	p_kontainer="0";
		    }
		  if (nama_kota=="<?=$kecamatan1['tempat_wisata']?>")
		    {
		        p_kontainer="<?=$kecamatan1['harga']?>";
		    }
		<?php } ?>

		    document.getElementById('harga').value = p_kontainer;

		    // p_kontaine
		}
</script>
		</div>
	</div>
</section>
<?php 
	require_once('footer2.php');
?>

</body>

</html>