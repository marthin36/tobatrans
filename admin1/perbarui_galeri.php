<?php require_once("../commons/function.php"); ?>
<?php 

// require_once("header.php");

	$id = $_GET['id_galeri'];
			
	$show = mysqli_query($conn, "SELECT * FROM galeri WHERE id_galeri='$id'");
			
	if(mysqli_num_rows($show)==0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysqli_fetch_array($show);
			}
?>
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
						   <li  >
                        <a  href="data_mobil.php"><i class="fa fa-taxi fa-3x"></i> Daftar Mobil</a>
                    </li>	
                      <li  >
                        <a class="active-menu" href="data_galeri.php"><i class="fa fa-picture-o fa-3x"></i> Daftar Galeri</a>
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

                <!--  -->
                <!--  -->
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Perbaruan Galeri</h3>
			<form action="perbarui_galeri_process.php?id_galeri=<?= $id ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Judul</label>	
				<input type="text" value="<?=$data['judul'];?>" class="form-control" name="judul" required><br>
          <label>Lokasi</label>  
        <input type="text" value="<?=$data['lokasi'];?>" class="form-control" name="lokasi" required><br>

				
				<label>Keterangan</label>
				<textarea placeholder="<?=$data['deskripsi'];?>" name="deskripsi" class="form-control" style="height: 150px;"></textarea><br>
				<label>Gambar</label>
				<input type="file" placeholder="<?=$data['gambar'];?>" name="gambar" accept="img/*" class="form-control" >
        <br><br>
				<button class="btn btn-primary" name="perbarui" type="submit">Perbarui</button>
			</div>
			</form>
		</div>
	</div>
</div>

                            <!--  -->
                            <!--  -->
        

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
