 <?php  require_once("conn.php");?>

 ?>
 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Riwayat Pemesanan | Toba Trans</title>
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

</head>
<body>
<?php require_once("header.php"); ?><br><br><br>

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
			<li><a href="#" style="color:#000000;">Riwayat Toba Wisata</a></li>
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
			<div class="col-sm-10">
				<h3>Riwayat Toba Wisata</h3><br>

				<table class="table">
					<?php 
						$id_toba = $_GET['id_toba'];

						$query = "SELECT * FROM toba_wisata where id_toba_wisata = $id_toba";
						$riwayat = mysqli_query($conn,$query);
						while($riwayats = mysqli_fetch_array($riwayat)){
					 ?>
					<tr>
						<th>Nama Pemesan</th>
						<td><?=$riwayats['nama'];?></td>
					</tr>
					<tr>
						<th>Tujuan</th>
						<td><?=$riwayats['tujuan'];?></td>
					</tr>
					<tr>
						<th>Jumlah Pengunjung</th>
						<td><?=$riwayats['jumlah_pengunjung'];?> orang</td>
					</tr>
					<tr>
						<th>Total Harga</th>
						<td>Rp. <?=number_format($riwayats['total_harga']);?></td>
					</tr>
					<tr>
						<th>Keterangan</th>
						<td><?=$riwayats['keterangan_pengunjung'];?></td>
					</tr>
					<tr>
						<th>Metode Pembayaran</th>
						<td><?=$riwayats['metode_bayar'];?></td>
					</tr>
					
					<?php if($riwayats['metode_bayar'] == "Transfer ATM"){ ?>
					<form method="post" action="kirim_bukti_bayar_process.php?id_toba=<?=$id_toba?>">
					<tr>
						<th>Bukti Bayar</th>
						<td><input class="form-control" type="file" name="fotoBukti" accept="img/*"></td>
					</tr>
					<tr>
						<th>Status Transaksi</th>
						<td><?=$riwayats['status_transaksi'];?></td>
					</tr>

					</table>
					<button name="kirimBukti" style="float: right;"class="btn btn-primary">Kirim Bukti Bayar</button>
					
					</form>
					<?php }else{ ?>
					<tr>
						<th>Bukti Bayar</th>
						<td>Tidak pakai bukti bayar</td>
					</tr>					
					<tr>
						<th>Status Transaksi</th>
						<td><?=$riwayats['status_transaksi'];?></td>
					</tr>
				<?php } ?>
					
				</table>
			 <?php } ?>
			</div>
			
		</div>
	</div>
</section>

<!-- menampilkan total harga -->
<!-- script total harga --><br><br><br>
<?php require_once("footer.php"); ?>
</body>
