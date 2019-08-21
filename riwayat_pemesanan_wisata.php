 <?php  require_once("conn.php");?>

 ?>
 <!DOCTYPE html>
<html>
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Riwayat Pemesanan Wisata</title>
  <link rel="icon" type="image/png" href="image/icon2.png">
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
<?php require_once("header.php"); ?><br><br>

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
			<div class="col-sm 12">
				<h3 style="font-family: arial rounded mt">Riwayat Toba Wisata</h3><br>
				<table class="table">
					<tr>
						<th>Tujuan</th>
						<th>Jumlah Pengunjung</th>
						<th>Total Harga</th>
						<th>Metode Pembayaran</th>
						<th>Bukti bayar</th>
						<th>Status Transaksi</th>
						<th>Tanggal Transaksi</th>
						<th>Opsi</th>
					</tr>
					<?php 
					$id_user = $_SESSION['id_user'];

					$query = "SELECT * FROM toba_wisata where id_user=$id_user ORDER BY id_toba_wisata desc" ;
					$riwayatwisata = mysqli_query($conn,$query);
					while($riwayatwisatas = mysqli_fetch_array($riwayatwisata)){
					 ?>
					
					<tr>
						<td><?=$riwayatwisatas['tujuan'];?></td>
						<td><?=$riwayatwisatas['jumlah_pengunjung'];?> orang</td>
						<td>Rp. <?=number_format($riwayatwisatas['total_harga']);?></td>
						<td><?=$riwayatwisatas['metode_bayar'];?></td>

						<?php if($riwayatwisatas['metode_bayar'] == "Bayar di tempat" || $riwayatwisatas['bukti_bayar'] != "belum dikirim"){ ?>
							<td><?=$riwayatwisatas['bukti_bayar'];?></td>
						<?php }else{ ?>
						<td style="color:red"><?=$riwayatwisatas['bukti_bayar'];?></td>
						<?php } ?>

						<?php if($riwayatwisatas['status_transaksi'] == "Lunas"){ ?>
						<td style="color:green;"><i class="fa fa-check"></i><?=$riwayatwisatas['status_transaksi'];?></td>

					<?php }else{ ?>
						<td><?=$riwayatwisatas['status_transaksi'];?></td>

					<?php } ?>

						<td><?=$riwayatwisatas['tanggal'];?></td>

						<?php if($riwayatwisatas['metode_bayar'] == "Transfer ATM" && $riwayatwisatas['bukti_bayar'] =="belum dikirim"){ ?>
						<td><a href="kirim_bukti_bayar.php?id_toba=<?=$riwayatwisatas['id_toba_wisata'];?>"><button class="btn btn-primary"><i class="fa fa-location-arrow"></i> Kirim Bukti Bayar</button></a></td>
					<?php }else if($riwayatwisatas['metode_bayar'] == "Transfer ATM" && $riwayatwisatas['status_transaksi'] == "Lunas"){ ?>
						<td><a href="detail_transaksi_wisata.php?id_toba=<?=$riwayatwisatas['id_toba_wisata'];?>"><button class="btn btn-default"><i class="fa fa-eye"></i> Detail Transaksi</button></a></td>	
					<?php }else{ ?>
						<td><a href="detail_transaksi_wisata.php?id_toba=<?=$riwayatwisatas['id_toba_wisata'];?>"><button class="btn btn-default"><i class="fa fa-eye"></i> Detail Transaksi</button></a></td>
					<?php } ?>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>

<!-- menampilkan total harga -->
<!-- script total harga --><br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<?php require_once("footer2.php"); ?>
</body>
