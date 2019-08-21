 <?php  require_once("conn.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mobil | TobaTrans </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/tobatransbiru.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
	<link rel="icon" type="image/png" href="image/tobatransbiru.png">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
 -->

	<!--  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>

<body>
<?php require_once("header.php") ?>
<br><br><br><br><br>

	<div class="container" style="float: center;">
		<div class="row">
			<?php 
			$idPesan = $_GET['id_pesan'];
			$query = "SELECT * FROM pesan_mobil1 where id_pesan = $idPesan";
			$data = mysqli_query($conn,$query);
			while ($datas = mysqli_fetch_array($data)) {
			 	#
			 ?>
			<div class="col-sm-12">
				<div>		
					<center>
						<div style="background-color: #f2f2f2;">
							<table>
								<tr>
									<td colspan="2">tujuan</td>
									<td></td>
									<td><?php echo $datas['tujuan'] ;?></td>
								</tr>
								<tr>
									<td colspan="2">jumlah penumpang</td>
									<td></td>
									<td><?php echo $datas['jumlah_penumpang'] ;?></td>
								</tr>
								<tr>
									<td colspan="2">Total Harga</td>
									<td></td>
									<td><?php echo $datas['total_harga'] ;?></td>
								</tr>
								<!-- update table nama tabel
								set namakolom values ?
								where id_pesan = ? -->
								<tr>
									<td>Status</td>
									<td colspan="2"></td>
									<td><form action="konfirmasi_supir_process.php?id_pesan=<?=$idPesan?>" method="post">
										<select class="form-control" name="status">
										<option><?php echo $datas['status'] ;?></option>
										<option>dalam perjalanan</option>
										<option>Sudah tiba </option>
										<option>selesai</option>
									</select><br>
									
									
								</td>
								</tr>
								<tr>
									<td colspan="2"></td>
									<td></td>
									<td><button class="btn btn-primary" name="konfirmasi">Konfirmasi</button>
									</form></td>
								</tr>
							</table>
						</div>
					</center>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
<br><br><br><br>
<?php require_once("footer.php") ?>

</body>
</html>