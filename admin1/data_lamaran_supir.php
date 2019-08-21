<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Pengguna | Admin Toba Trans</title>
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
                        <a class="active-menu" href="data_lamaran_supir.php"><i class="fa fa-folder-open fa-3x"></i> Lamaran Supir</a>
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
                <h3>Daftar Lamaran Supir</h3>
                <br>
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <th>id</th>
                        <th>Nama Calon Supir</th>
                        <th>Punya kendaraan</th>
                        <th>Pengalaman Jadi Supir</th>
                        <th>Alamat Email</th>
                        <th>Status Persetujuan</th>
                        <th>Opsi</th>
                    </tr>

                    <?php 
                        $query = "SELECT * FROM lamaran_supir";   
                        $item = mysqli_query($conn,$query);
                        while($items = mysqli_fetch_array($item)){
                    ?>


                    <tr>
                        <td><?=$items['id_lamaran'];?></td>
                        <td><?=$items['nama_supir'];?></td>
                        <td><?=$items['punya_kendaraan'];?></td>
                        <td><?=$items['pengalaman'];?> tahun</td>
                        <td><?=$items['alamat_email'];?></td>
                        <?php if($items['status_supir'] == "Di tolak"){ ?>
                        <td style="color:red;"><i class="fa fa-info-circle"></i> <?=$items['status_supir'];?></td>
                        <?php } else if($items['status_supir'] == "Di terima"){ ?>
                        <td style="color:green;"><i class="fa fa-check"></i> <?=$items['status_supir'];?></td>
                        <?php }else{ ?>
                            <td><?=$items['status_supir'];?></td>
                        <?php } ?> 
                        <td><a href="detail_lamaran_supir.php?id_lamaran=<?=$items['id_lamaran'];?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span></button></a>
                        <!-- <a href=""><button class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></button></a> -->
                        <a href="hapus_lamaran_supir.php?id_supir=<?=$items['id_lamaran']?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></a>
                        </td>
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