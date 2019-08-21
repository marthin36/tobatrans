<?php session_start(); ?>
<header>
<nav class="navbar-default navbar-fixed-top" id='header'>
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
		

		<div class="container-fluid">
		  <div class="navbar-header">
			</a>
		  </div>
		  <ul class="nav navbar-nav">
			<li><a href="index.php"><img id="logo" src="image/tobatrans.png" width="150px;" height="30px;" padding-bottom="60px;"></li> </a>
			<li id="menu"><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Beranda</a></li>
			<li id="menu" class="dropdown"><a id="submenu" class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi <span class="glyphicon glyphicon-option-vertical"></span></a>
			  <ul class="dropdown-menu" id="submenu">
				<li><a href="tentang_tobatrans.php">Tentang Toba Trans</a></li>
				<li><a href="galeri.php">Galeri Tempat Wisata</a></li>
				<li><a href="regis_supir.php">Daftar Jadi Supir</a></li>
			  </ul>
			</li>
			<li id="menu"><a href="wisata.php"><span class="glyphicon glyphicon-tent"></span> Wisata DanTob</a></li>
			
			<li id="menu" class="dropdown"><a id="submenu" class="dropdown-toggle" data-toggle="dropdown" href="#">Komentar/Saran <span class="glyphicon glyphicon-option-vertical"></span></a>
			  <ul class="dropdown-menu" id="submenu">
				<li><a href="komentar.php">Buat Komentar</a></li>
				<li><a href="daftar_komentar.php">Daftar Komentar</a></li>
				
			  </ul>
			</li>
				
			
		  </ul>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css"> #menu li.active a {
	background-color: blue;
}</style>
</head>
<body>

		  <ul class="nav navbar-nav navbar-right">
			<li id="menu"><a href="profil.php"> 
				
			
			<?php
			
			if(isset($_SESSION['is_logged_in'])){
				 $nama=$_SESSION['namalengkap'];
				?>
				<li id="menu"><a href="logout.php">	<span class=" glyphicon glyphicon-log-out"></span> Logout</a></li>
						<li id="menu" class="dropdown"><a id="submenu" class="dropdown-toggle" data-toggle="dropdown" href="#">Transaksi <span class="glyphicon glyphicon-option-vertical"></span></a>
			  <ul class="dropdown-menu" id="submenu">
				<li><a href="riwayat_pemesanan_wisata.php">Pemesanan Wisata</a></li>
				<li><a href="riwayat_pemesanan_mobil.php">Pemesanan Mobil</a></li>
				
			  </ul>
			</li>
				<li ><a href="profil.php"><span class="glyphicon glyphicon-user"></span> <?php echo $nama ?></a></li>

					<li id="dropdown" >
       	
       <ul class="dropdown-menu"></ul>
     </li>
				<?php
			}
			else{
				?>
				<li id="menu"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					<li id="menu"><a href="register.php"><span class="glyphicon glyphicon-plus-sign"></span> Daftar</a></li>
				<?php
			}
			?>

		  </ul>
		</div>
	  
</body>
</html>

	  </nav>
</header>
<script type="text/javascript">$(function() {
	$('#menu a[href~="' + location.href + '"]').parents('li').addClass('active');
});</script>
