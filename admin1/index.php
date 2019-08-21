<?php require_once("../conn.php"); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
                <a class="navbar-brand" href="index.php"><img src="../image/logo.png" width="220"></a> 
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
                        <a  class="active-menu" href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
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
                <div class="row">
                    <div class="col-md-12">
                     <h2>Selamat datang , Admin</h2>
                     <center><img src="../image/logo.png" width="100%"></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">           
                        <div class="panel panel-back noti-box">

                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box" >
                                

                                <?php 
                                $query = "SELECT COUNT(id_user) FROM USER WHERE role = 2";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <a href="data_user.php" style="text-decoration: none; color: #000;">
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_user)'];?> User</p><p class="text-muted">Jumlah Pengguna</p></a>                                    
                                
                            </div>
                        </div>
                     </div>
                     <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-user"></i>
                            </span>
                            <div class="text-box" >
                                

                                <?php 
                                $query = "SELECT COUNT(id_user) FROM USER WHERE role = 3";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <a href="data_supir.php" style="text-decoration: none; color: #000;">
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_user)'];?> Supir</p>                                    
                                <p class="text-muted">Jumlah Supir</p></a>
                            </div>
                        </div>
                     </div>
                     
                 </div>
                 <div class="row">
                    <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-brown set-icon">
                                <i class="fa fa-list"></i>
                            </span>
                            <div class="text-box" >
                                

                                <?php 
                                $query = "SELECT COUNT(id_toba_wisata) FROM toba_wisata ";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <a href="data_toba_wisata.php" style="text-decoration: none; color: #000;">
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_toba_wisata)'];?> Jumlah Transaksi</p>                                    
                                <p class="text-muted">Toba Wisata</p></a>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-6">           
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-list"></i>
                            </span>
                            <div class="text-box" >
                                

                                <?php 
                                $query = "SELECT COUNT(id_pesan) FROM pesan_mobil ";
                                     $jumlah_pengguna = mysqli_query($conn, $query);
                                     $jumlah_penggunas = mysqli_fetch_array($jumlah_pengguna); 
                                    ?>
                                    <p class="main-text"><?=$jumlah_penggunas['COUNT(id_pesan)'];?> Jumlah Transaksi</p>                                    
                                <p class="text-muted">Toba Car</p>
                            </div>
                        </div>
                     </div>
                 </div>

                <!-- <div class="container">    
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Daftar Pengguna</h3>
                            <br>
                            <table class="table table-hover">
                                <tr>
                                    <th>id</th>
                                    <th>Nama Lengkap</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nomor Telepon</th>
                                    <th>Opsi</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="d"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
                                    <a href=""><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a>
                                    <a href="delete_user.php?id_user="><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
                                    </td>
                                </tr>
                     
                            </table>
                        </div>
                    </div>
                </div>
                 --> <!-- /. ROW  -->
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
