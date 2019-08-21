 <!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Komentar | Toba Trans</title>
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
	<?php 
	require_once("header.php");
	?><br><br><br><br>
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
    </section>
<!-- breadcrumb -->

	<style type="text/css">
		footer{
			position: absolute;
		}
	</style>
<section>
	<div class="container">
			<?php
			include_once('conn.php');
			$id = $_GET['items_id'];

			$show = mysqli_query($conn, "SELECT * FROM komentar WHERE id_komentar='$id'");

			if(mysqli_num_rows($show)==0){
				echo '<script>window.history.back()</script>';
			}else{
				$data = mysqli_fetch_array($show);
			}
		?>
				<div class="row">
					<div class="col-md-12">
						<div class="komentar">
							<h3>KIRIM TANGGAPAN</h3><hr class="pg-titl-bdr-bta"></hr>
							<form action="tanggapan_process.php?id_komentar=<?php echo $id ?> " method="post" role="form">
								<div class="form-group">
									<p>Tanggapan</p>
									<textarea name="tanggapan" class="form-control" row="5" value="<?php echo $data['tanggapan'] ?>" required></textarea>
								</div>
								<div class="text-center"><button name="edit" type="submit" class="btn btn-komentar btn-lg">Kirim Tanggapan</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>

</section>
 <br><br><br><br><br><br><br><br><br>
 <br><br><br><br><br><br><br><br>
	<?php
	require_once("footer2.php");
	?>
</body>
</html>