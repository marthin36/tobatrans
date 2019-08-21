 <?php  require_once("conn.php");?>

 ?>
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
<?php require_once("header.php"); ?><br><br>

<section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
			<li><a href="#" style="color:#000000;">Riwayat Pemesanan Mobil</a></li>
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
				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>Tujuan</th>
						<th>Nama Mobil</th>
						<th>Plat nomor</th>
						<th>Total Harga</th>
						<th>Status</th>
						<th>Nama Supir</th>
						<!-- <th>Tanggal</th> -->

						<th>Opsi</th>
					</tr>
					<?php 
					$id_user = $_SESSION['id_user'];

					$query = "SELECT * FROM pesan_mobil where id_user=$id_user ORDER BY tanggal desc" ;
					$riwayat = mysqli_query($conn,$query);
					while($riwayats = mysqli_fetch_array($riwayat)){
					 ?>
					
					<tr>
						<td><?=$riwayats['tujuan'];?></td>
						<td><?=$riwayats['nama_mobil'];?></td>
						<td><?=$riwayats['plat_nomor'];?></td>
						<td>Rp. <?=number_format($riwayats['total_harga']);?></td>
						<td><?php echo $riwayats['keterangan_supir']; 
						 ?></td>
						<td><?=$riwayats['nama_supir'];?></td>
						
						<?php if($riwayats['komentar_penumpang']==NULL && $riwayats['keterangan_supir'] == "Selesai"){ ?>
						<td><a href="beri_komentar_supir.php?id_pesan=<?=$riwayats['id_pesan']?>"><button class="btn btn-primary"><i class="fa fa-comment"></i> Beri Penilaian</button></a></td>
					
						<?php }else if($riwayats['keterangan_supir']!="Selesai"){ ?>
							<td><a href="beri_komentar_supir.php?id_pesan=<?=$riwayats['id_pesan']?>"><button class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</button></a>&nbsp;&nbsp;<a href="batalkan_pesanan.php?id_pesan=<?=$riwayats['id_pesan']?>"><button class="btn btn-danger"><i class="fa fa-times"></i> Batalkan</button></a></td>
					<?php }else{ ?>
						<td><a href="beri_komentar_supir.php?id_pesan=<?=$riwayats['id_pesan']?>"><button class="btn btn-primary"><i class="fa fa-eye"></i> Lihat</button></a></td>
					<?php } ?>

					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</section>

<!-- menampilkan total harga -->
<!-- script total harga --><br><br><br><br><br><br><br><br><br>
<!-- script total harga --><br><br><br><br><br><br><br><br><br>
<!-- script total harga --><br><br><br><br><br><br><br>
<?php require_once("footer2.php"); ?>
</body>
