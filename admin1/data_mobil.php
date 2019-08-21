<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Tujuan | Admin Toba Trans</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<style>
	#gambarGaleri{
		width: 60px;
		height: 30px;
	}
</style>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php"><img src="../image/logo.png" width="220"></a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="../logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<!-- <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li> -->
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
                    </li>
                    <li>
                        <a  href="data_toba_wisata.php"><i class="fa fa-tree fa-3x"></i> Toba Wisata</a>
                    </li>
                     <li>
                        <a  href="data_lamaran_supir.php"><i class="fa fa-folder-open fa-3x"></i> Lamaran Supir</a>
                    </li>
                      <li>
                        <a  href="data_user.php"><i class="fa fa-user fa-3x"></i> Daftar Pengguna</a>
                    </li>
                 <li>
                        <a  href="data_tujuan.php"><i class="fa fa-exchange fa-3x"></i> Daftar Tujuan</a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="data_tujuan_toba_wisata.php">Toba wisata</a>
                          </li>
                          <li>
                            <a href="data_tujuan.php">Toba Car</a>
                          </li>
                          
                        </ul>
                    </li>
               <li  >
                    <li>
                        <a  href="data_tujuan.php"><i class="fa fa-exchange fa-3x"></i> Daftar Tujuan</a>
                    </li>
						   <li  >
                        <a class="active-menu" href="data_mobil.php"><i class="fa fa-taxi fa-3x"></i> Daftar Mobil</a>
                    </li>	
                      <li  >
                        <a  href="data_galeri.php"><i class="fa fa-picture-o fa-3x"></i> Daftar Galeri</a>
                    </li>
                    <li  >
                        <a  href="data_komentar.php"><i class="fa fa-comments fa-3x"></i> Daftar Komentar </a>
                    </li>				
               
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <!-- <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div> -->
     <style>
	#gambarMobil{
		width:100px; 
		height:60px;
	}
</style>
	<div class="container">	
		<div class="row">
			<div class="col-md-10">
				<h3>Daftar Mobil</h3>
				<a href="tambah_mobil.php"><button class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Tambah Mobil</button></a><br><br>
				<table class="table table-striped table-bordered table-hover">
					<tr>
						<th>id</th>
						<th>Nama Mobil</th>
						<th>Foto Mobil</th>
						<th>Plat Nomor</th>
						<th>Fasilitas</th>
            <th>Status</th>
						<th>Opsi</th>
					</tr>
					<?php 
						$query = "SELECT * FROM mobil";
						$mobil =mysqli_query($conn, $query);
              			while($mobils = mysqli_fetch_array($mobil)){
						 ?>
					<tr>
						
						<td><?=$mobils['id_mobil']?></td>
						<td><?=$mobils['nama_mobil']?></td>
						<td><img id="gambarMobil" src="../image/mobil/<?=$mobils['foto_mobil']?>"></td>
						<td><?=$mobils['plat_nomor']?></td>
						<td><?=$mobils['fasilitas']?></td>
            <td><?=$mobils['status']?></td>
						<td><a href="detail_mobil.php?id_mobil=<?=$mobils['id_mobil']?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></button></span></a>
							<a href="perbarui_mobil.php?id_mobil=<?=$mobils['id_mobil']?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a>
							<a href="hapus_mobil.php?id_mobil=<?=$mobils['id_mobil']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td></a>
					
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
                 <!-- /. ROW  -->
    <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>