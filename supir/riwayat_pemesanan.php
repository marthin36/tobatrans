<?php require_once("../conn.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Supir | TOBA TRANS</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="supir.php"><i class="fa fa-car fa-1x"></i>&nbsp;&nbsp;Driver</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
  		<div class="dropdown">
		    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"> &nbsp;&nbsp;&nbsp;<i class="fa fa-user-circle fa-2x"></i>&nbsp;&nbsp;&nbsp;<?php session_start();echo $_SESSION['namalengkap']; ?>

		    <!-- <a href="../logout.php" class="btn btn-danger square-btn-adjust">Logout<i class="fa fa-user-circle fa-2x"></i></a> -->
		    <span class="caret"></span>
		</button>
		    <ul class="dropdown-menu">
		      <li style="height: 40px;"><a href="#">Profil</a></li>
		      <li style="height: 40px;"><a href="../logout.php">logout</a></li>
		      <!-- <li><a href="#">JavaScript</a></li> -->
		    </ul>
  		</div>	 	
 </div>


        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <!-- <img src="assets/img/find_user.png" class="user-image img-responsive"/> -->
					</li>
				
					
                    <li>
                        <a  href="supir.php"><i class="fa fa-list-alt fa-3x"></i>Daftar Orderan</a>
                    </li>
                    <li>
                        <a class="active-menu" href="riwayat_pemesanan.php"><i class="fa fa-list fa-3x"></i> Riwayat Pemesanan</a>
                    </li>
                    <!--<li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					<li  >
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li>	
                     <li  >
                        <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                    </li>	
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul> -->
               
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
     <div class="container">    
        <div class="row">
            <div class="col-md-10">
                <h3>Daftar Riwayat Pesanan Supir</h3>
                <br>
                <?php 
                        // session_start();
                        $idSupir = $_SESSION['id_user'];

                        $query = "SELECT sum(total_harga) FROM pesan_mobil where id_supir = '$idSupir' AND keterangan_supir = 'Selesai' ";   
                        $pesan1 = mysqli_query($conn,$query);
                        $pesans1 = mysqli_fetch_array($pesan1);
                    ?>
                <h4>Total Pendapatan : Rp. <?php echo number_format($pesans1['sum(total_harga)']) ?></h4>
                <table class="table table-hover">
                    <tr>
                        <th>id</th>
                        <th>Nama pelanggan</th>
                        <th>Tujuan</th>
                        <th>Total Harga</th>
                        <!-- <th>Keterangan</th> -->
                        <th>Status Penumpang</th>
                        <th>Tanggal</th>
                        <!-- <th>Opsi</th> -->
                    </tr>

                    <?php 
                        // session_start();
                        $idSupir = $_SESSION['id_user'];

                        $query = "SELECT * FROM pesan_mobil where id_supir = '$idSupir'";   
                        $pesan = mysqli_query($conn,$query);
                        while($pesans = mysqli_fetch_array($pesan)){
                    ?>


                    <tr>
                        <td><?=$pesans['id_pesan'];?></td>
                        <td><?=$pesans['nama_pelanggan'];?></td>
                        <td><?=$pesans['tujuan'];?></td>
                        <td>Rp. <?=number_format($pesans['total_harga']);?></td>

                        <?php if($pesans['komentar_penumpang'] == "Sangat Buruk" || $pesans['komentar_penumpang'] == "Buruk"){ ?>
                        
                        <td style="color:red;"><i class="fa fa-info-circle"></i> <?=$pesans['komentar_penumpang'];?></td>
                        
                        <?php } else if($pesans['komentar_penumpang'] == "Sangat Baik"){ ?>
                       
                        <td style="color:green;"><i class="fa fa-check"></i> <?=$pesans['komentar_penumpang'];?></td>
                       
                        <?php } else{ ?>
                       
                            <td><?php echo $pesans['komentar_penumpang']; ?></td>
                       
                        <?php } ?>

                        <td><?=$pesans['tanggal'];?></td>
                        <!-- <td>
                        <a href="hapus_pesanan.php?id_pesan=<?=$pesans['id_pesan']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
                        </td> -->
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