<?php require_once("../conn.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toba Wisata | Admin Toba Trans</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
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
font-size: 16px;"> <?php echo date('l, d-m-Y'); ?> &nbsp; <a href="../logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
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
                        <a class="active-menu" href="data_toba_wisata.php"><i class="fa fa-tree fa-3x"></i> Toba Wisata</a>
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
                        <a  href="data_galeri.php"><i class="fa fa-picture-o fa-3x"></i> Daftar Galeri</a>
                    </li>
                    <li  >
                        <a  href="data_komentar.php"><i class="fa fa-comments fa-3x"></i> Daftar Komentar </a>
                    </li>				
                 
                </ul>
               
            </div>
            
        </nav><!-- 

         body -->

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container">	
                    <?php
			require_once("../commons/function.php");
			$id = $_GET['id_komentar'];

			$show = mysqli_query($conn, "SELECT * FROM komentar WHERE id_komentar='$id'");

			if(mysqli_num_rows($show)==0){
				echo '<script>window.history.back()</script>';
			}else{
				$data = mysqli_fetch_array($show);
			}
		?>
				<div class="row">
					<div class="col-md-10">
						<div class="komentar">
							<h3>KIRIM TANGGAPAN</h3><hr class="pg-titl-bdr-bta"></hr>
							<form action="tanggapan_process.php?id_komentar=<?php echo $id ?> " method="post" role="form">
								<div class="form-group">
									<table class="table ">
										<tr>
											<th>Nama</th>
											<td><?php echo $data['nama_user'] ?></td>
										</tr>
										<tr>
											<th>Subjek</th>
											<td><?php echo $data['subjek'] ?></td>
										</tr>
										<tr>
											<th>Isi komentar</th>
											<td><?php echo $data['isi'] ?></td>
										</tr>
                    <tr>
                      <th>Tanggapan</th>
                      <td><?php echo $data['tanggapan'] ?></td>
                    </tr>
									</table>
									
								</div>
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
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
        </div>
             <!-- /. PAGE INNER  -->
    </div>
         <!-- /. PAGE WRAPPER  -->
        <!-- </div> -->
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
