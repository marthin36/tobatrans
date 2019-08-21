 <?php  require_once("conn.php");?>

 ?>
 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pesan Mobil | TobaTrans</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/tobatransbiru.png">
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
	<style>
		#detailmobil{
			border: 15px solid #f2f2f2;
			padding-left: 20px;
			/*background-color: #f2f2f2;*/
		}
	</style>
<?php require_once("header.php"); ?><br><br>

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
            <li><a href="mobil.php">Mobil</a></li>
			<li><a href="#" style="color:#000000;">Pesan Mobil</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
    </section><br><br>
<!-- breadcrumb -->
<section>
<div class="container">
	<div class="row">
		<div class="col-sm-7 col-md-7">
			<?php 
			$idMobil = $_GET['id_mobil'];
			$query = "SELECT * FROM mobil WHERE id_mobil=$idMobil";
			$mobil = mysqli_query($conn, $query);
			$mobils = mysqli_fetch_array($mobil);
			?>
			<img src="image/mobil/<?=$mobils['foto_mobil'];?>" style="width: 80%; height: 40%;"><br><br><br>
			<div>
				<h3><?=$mobils['nama_mobil'];?></h3>
				<h4><?=$mobils['plat_nomor'];?></h4>
				<h3>Kapasitas Penumpang</h3>
				<h4><?=$mobils['kapasitas_penumpang']?> 	orang</h4>
				<h3>Fasilitas</h3>
				<p><?=$mobils['fasilitas']?></p><br><br>
			</div>
		</div>
		<!-- <div class="col-sm-1"></div> -->
		<div class="col-sm-5 col-md-5" style="background-color:#f2f2f2; ">
			<br><br><br>	

			<!-- form Pemesanan -->
	
		<form action="pesan_mobil_process.php?id_mobil=<?=$mobils['id_mobil']?>" method="post" id="form1"  name="pesanMobil"  enctype="multipart/form-data">
			<label>Jumlah penumpang</label>
			<p style="color:red;">*maks. <?=$mobils['kapasitas_penumpang'];?> penumpang</p>

			<select class="form-control" name="jumlah_penumpang" onclick="total()" >
				<option readonly>-----Jumlah Penumpang-----</option>
				<?php for ($i=1; $i <= $mobils['kapasitas_penumpang']; $i++) { 
				 ?>
				<option><?php echo $i;?></option>
				<?php } ?>
			</select>
			<!-- <input class="form-control" type="number" id="jumlah_penumpang" name="jumlah_penumpang" min="0" max="">
 -->
 			<br>

			<label for="select1">Tujuan</label><br>
			<select onclick="tampilkan()" id="select1" class="form-control" name="tujuan">
				<option>----Kecamatan----</option>
				<?php 
			$query2 = "SELECT * FROM tujuan";
			$tujuan = mysqli_query($conn, $query2);
			while($tujuan1 = mysqli_fetch_array($tujuan)){ ?>				
				<option><?=$tujuan1['kecamatan']?></option>
			<?php } ?>
			</select><br>

			
			<table class="table">
				<tr>
					<td ><p>Harga</p></td>
					<td>Rp.</td>
					<td><input class="form-control" id="harga" value="" size="7" name="harga"readonly></td>
					<td>/ orang</td>
				</tr>
				<!-- <tr>
					<td colspan="2"><p>Total</p></td>
					<td>Rp.</td>
					<td><input class="form-control" id="totalHarga" value="" size="7" name="totalHarga"readonly></td>
				</tr> -->
			</table>

			<label>Keterangan Penumpang</label>

			<textarea class="form-control" name="keteranganPenumpang" style="height:120px;"></textarea>
			<br>
			
			<!-- <h3><b>Total harga: Rp. 200.000</b></h3> -->
			<button class="btn btn-success" style="float: right;" type="submit" name="pesanMobil">Pesan</button>	
			
			
			<!-- <h3>total</h3> -->
			
			<!-- <p onchange="total()">fers</p> -->
		</form>


			<br><br><br>
		</div>
		<!-- Script form Pendaftaran -->
		<script>
			function tampilkan(){
 
		  var nama_kota=document.getElementById("form1").select1.value;
		  var p_kontainer=document.getElementById("harga");
		 

		 <?php 
		 	// $idMobil = $_GET['id_mobil'];
			$query = "SELECT * FROM tujuan";
			$kecamatan = mysqli_query($conn, $query);
			while($kecamatan1 = mysqli_fetch_array($kecamatan)){
		 ?>
		  if (nama_kota=="<?=$kecamatan1['kecamatan']?>")
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
<!-- menampilkan total harga -->
<!-- script total harga --><br>
<?php require_once("footer2.php"); ?>
</body>
