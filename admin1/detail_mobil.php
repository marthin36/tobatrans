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
		img{
			width: 100%;
			height: 200px;
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
                <a class="navbar-brand" href="index.php">Toba Trans</a> 
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
                        <a  href="data_supir.php"><i class="fa fa-user fa-3x"></i> Daftar Supir</a>
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
         
		  	<div class="container">	
				<div class="row">
					<?php
				$idMobil= $_GET['id_mobil'];
		              $query = "SELECT * FROM mobil WHERE id_mobil=$idMobil";
		              $mobil = mysqli_query($conn, $query);
		              while($mobils = mysqli_fetch_array($mobil)){
		           ?>
					<div class="col-sm-4">
						<h3><?=$mobils['nama_mobil'] ?></h3><br>
						<img src="../image/mobil/<?=$mobils['foto_mobil']?>">
					</div>
					<div class="col-sm-5">
						<br><br><br><br>
						<table class="table table-hover">
							<tr>
								<th>Id</th>
								<td><?=$mobils['id_mobil']?></td>
							</tr>
							<tr>
								<th>Nama Mobil</th>
								<td><?=$mobils['nama_mobil'] ?></td>
							</tr>
							<tr>
								<th>Plat Nomor</th>
								<td><?=$mobils['plat_nomor'] ?></td>
							</tr>
							<tr>
								<th>Fasilitas</th>
								<td><?=$mobils['fasilitas'] ?></td>
							</tr>
              <tr>
                <form action="beri_status_mobil.php?id_mobil=<?=$mobils['id_mobil']?>" method="post">
                <th>Status</th>
                <td><select name="status_mobil"class="form-control">
                  <option value="<?=$mobils['status']?>">---<?=$mobils['status']?>---</option>
                  <option>Tersedia</option>
                  <option>Tidak tersedia</option>
                  </select>
                </td>
              </tr>
						</table>
            <button style="float: right;" class="btn btn-primary" name="beriStatusMobil">Kirim Status</button>
					</form>
          </div>
				</div>
			<?php } ?>
			</div>
                <!-- akhir detail -->

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













































