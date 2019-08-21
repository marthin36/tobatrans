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
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Konfirmasi Transaksi</h3>
                            <br>
                            <table class="table table-hover">
                                <?php 
                                $idToba = $_GET['id_toba'];
                                 $query2 = "SELECT * FROM toba_wisata where id_toba_wisata=$idToba";
                                 $tobawis = mysqli_query($conn, $query2);
                                 while($tobawisa = mysqli_fetch_array($tobawis)){ 
                                     ?> 
                                <tr>
                                    <th>Nama</th>
                                    <td><?=$tobawisa['nama']?></td>
                                </tr>
                                <tr>
                                    <th>Tujuan</th>
                                    <td><?=$tobawisa['tujuan']?></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Penumpang</th>
                                    <td><?=$tobawisa['jumlah_pengunjung']?> orang</td>
                                </tr>
                                <tr>
                                    <th>Total Harga</th>
                                    <td>Rp. <?=number_format($tobawisa['total_harga'])?></td>
                                </tr>
                                <tr>
                                    <th>Keterangan Pengunjung</th>
                                    <td><?=$tobawisa['keterangan_pengunjung']?></td>
                                </tr>
                                <tr>
                                    <th>Metode Pembayaran</th>
                                    <td><?=$tobawisa['metode_bayar']?></td>
                                </tr>
                                <?php if($tobawisa['metode_bayar'] == "Transfer ATM"){ ?>
                                <tr>
                                    <th>Bukti Bayar</th>
                                    <td><img src="../image/bukti_bayar/<?=$tobawisa['bukti_bayar']?>" style="width: 300px; height: 300px;"></td>
                                </tr>
                                <?php }?>
                                    
                            <form action="beri_konfirmasi_transaksi_process.php?id_toba=<?=$idToba?>" method="post">
                                <tr>
                                    <th>Status Transaksi</th>
                                    <td>
                                        <select name="statusPemesanan" class="form-control">
                                            <option value="<?=$tobawisa['status_transaksi']?>">---<?=$tobawisa['status_transaksi']?>----</option>
                                            <option>Di terima</option>
                                            <option>Lunas</option>
                                        </select>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                            <button name="beriKonfirmasi" style="float: right" class="btn btn-primary">Kirim Status</button>
                            </form>
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
