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
			<li><a href="#" style="color:#000000;">Data Supir</a></li>
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
				
				<table class="table">
					<?php 
					$id_pesan = $_GET['id_pesan'];

					$query = "SELECT * FROM pesan_mobil where id_pesan=$id_pesan";
					$riwayat = mysqli_query($conn,$query);
					while($riwayats = mysqli_fetch_array($riwayat)){
					 ?>

					<tr>
						<th><img id="gambarSupir" src="image/supir/<?=$riwayats['pas_photo_supir']?>" style="width: 150px; height: 150px; border-radius: 50%;"><br><h2><?=$riwayats['nama_supir']?></h2></th>
						<td></td>
					</tr>
					
					<tr>
						<th><i class="fa fa-phone fa-2x"></i> <?=$riwayats['no_telp_supir']?></th>
					</tr>
						
					<tr>
						<th>Tujuan</th>
						<td><?=$riwayats['tujuan']?></td>	
					</tr>
					<tr>
						<th>Mobil</th>
						<td><?=$riwayats['nama_mobil']?></td>
					</tr>
					<tr>
						<th>Plat Nomor</th>
						<td><?=$riwayats['plat_nomor']?></td>	
					</tr>
					<tr>
						<th>Jumlah Penumpang</th>
						<td><?=$riwayats['jumlah_penumpang']?> orang</td>	
					</tr>
					<tr>
						<th>Total Tarif</th>
						<td>Rp. <?=number_format($riwayats['total_harga'])?></td>	
					</tr>
					<?php if($riwayats['komentar_penumpang'] == NULL){ ?>
					<tr>
						<th>Penilain Supir</th>
						<form method="post" action="beri_komentar_supir_process.php?id_pesan=<?=$id_pesan;?>">
						<td><select class="form-control" name="komentarPenumpang"> 
							<option value="<?php echo $riwayats['komentar_penumpang'] ?>">---<?php echo $riwayats['komentar_penumpang'] ?>---</option>
							<option>Sangat Baik</option>
							<option>Baik</option>
							<option>Cukup</option>
							<option>Buruk</option>
							<option>Sangat Buruk</option>
							</select>
					</td>
					</tr>
				</table>
			<button class="btn btn-primary" name="beriKomentar" style="float: right;">Komentari</button>
			</form>
		<?php }else{ ?>
			<tr>
				<th>Penilaian Supir</th>
				<td><?= $riwayats['komentar_penumpang']?></td>
			</tr>

			</table>	
		<?php } ?>
		
		<?php } ?>

			</div>
		</div>
	</div>
</section>

<!-- menampilkan total harga -->
<!-- script total harga --><br><br><br>
<?php require_once("footer2.php"); ?>
</body>
