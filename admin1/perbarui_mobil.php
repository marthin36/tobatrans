<?php require_once("../conn.php");

	$id = $_GET['id_mobil'];
			
	$show = mysqli_query($conn, "SELECT * FROM mobil WHERE id_mobil='$id'");
			
	if(mysqli_num_rows($show)==0){
		// echo '<script>window.history.back()</script>';
	}else{
		$mobils1 = mysqli_fetch_array($show);
			}
?>

<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perbarui Mobil | Admin Toba Trans</title>
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
						   <li  >
                        <a  class="active-menu" href="data_mobil.php"><i class="fa fa-taxi fa-3x"></i> Daftar Mobil</a>
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

                <!--  -->
                <!--  -->
     <div class="container">
	<div class="row">
		<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h3>Perbarui Mobil</h3>
			<form action="perbarui_mobil_process.php?id_mobil=<?=$id?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Mobil</label>	
				<input type="text" value="<?=$mobils1['nama_mobil'];?>" class="form-control" name="namaMobil" required><br>	
				<label>Foto Mobil</label>
				<input type="file" placeholder="<?=$data['foto_mobil'];?>" name="fotoMobil" accept="img/*" class="form-control" >
				<label>Plat Nomor</label>	
				<input type="text" value="<?=$mobils1['plat_nomor'];?>" class="form-control" name="platNomor" required><br>
				<label>Kapasitas</label>	
				<input type="number" min="0" value="<?=$mobils1['kapasitas_penumpang'];?>" class="form-control" name="kapasitasPenumpang" required><br>

				<label>Jenis </label>
                <select class="form-control" name="jenis">
                    <option value="<?=$mobils1['jenis'];?>">---<?=$mobils1['jenis']?>---</option>
                    <option value="1">Mobil</option>
                    <option value="2">Bus</option>
                </select>	


                <label>Fasilitas</label>	
				<input type="text" value="<?=$mobils1['fasilitas'];?>" class="form-control" name="fasilitas" required><br>
				
				<button class="btn btn-primary" name="perbaruiMobil" type="submit">Perbarui</button>
			</div>
			</form>
		</div>
	</div>
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