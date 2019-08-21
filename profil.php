<?php 
	require_once("function.php");
 ?>
 <!DOCTYPE html>
<html><head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profil</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
  <link rel="icon" type="image/png" href="image/icon2.png">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="jquery/jquery-3.2.1.min.js">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>

  
<!-- font awesome -->
<link href="fontawesome/css/all.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
<!-- end -->
<!-- benar fontawesome -->
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'/>
  <!--  -->
    <meta name="viewport" content="wiid="slider" dth=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/ajax/libs/jquery/3.2.1/jquery.min.js">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<!--  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
			<?php    
	
	// connect_database();

				require_once("header.php");

	// require_once("slider.php");
			?>
   <br><br><br>
  
     
     
    <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i>  Beranda</a><i class="icon-angle-right"></i></li>
      <li><a href="#" style="color:#000000;">Profil</a></li>
            <!-- <li><a href="#">Ulos</a></li> -->
          </ul>
        </div>
      </div>
    </div>
</section><br><br>      
              <?php
              
    

      //cek dahulu, jika tombol simpan di klik

    //inlcude atau memasukkan file koneksi ke database
    include('conn.php');
    //jika tombol tambah benar di klik maka lanjut prosesnya
    
 
$id = $_SESSION['id_user'];

    
    $query="SELECT * FROM user WHERE id_user='$id'";
    $query1=mysqli_query($conn,$query);
    $query2=mysqli_fetch_array($query1);
    $nama=$query2['namalengkap'];
    $alamat=$query2['alamat'];
    $username=$query2['username'];
    $telpon=$query2['nomortelepon'];
    $emails=$query2['email'];
    $jenis_kelamins=$query2['jenis_kelamin'];
    $gambars=$query2['pas_photo'];
    
    
    
    ?>


 
        <div class="container">
            <uL class="breadcrumb">
            <div class="row">
              
              <div class="col-sm-4">
         
          <center>        <img src="<?php
                echo $query2['pas_photo']; ?>" width="160px;" style="border: 50px;border-color: black;padding-top: 59px;" /> 
            </center>
          </div>
   
       <div class="col-sm-7">
             <center>  
    <table border="0" style="size: 35px;padding: 0px;margin: 50px;font-size: 25px;">
 
     
      <tr>
        <td>Nama  
        </td>
        <td>:</td>
        <td>    <?php
                echo $nama;?></td>
  
      </tr>
      <tr>
        <td>Alamat </td>
          <td>:</td>
          <td><?php
            echo $alamat;?></td>
      </tr>
      <tr>
        <td>Telephone </td>
        <td></td>
        <td><?php
            echo $telpon;?></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><?php
            echo $username;?></td>
    </tr>
       <tr>
        <td>Emails</td>
        <td>:</td>
      <td><?php
            echo $emails;?></td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
      <td><?php
            echo $jenis_kelamins;?></td>
      </tr>
      
    </table>

<form method="post" action="update_profil.php">
                      <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-hand-up"></span> Update Profil</button>
                       </form>
</ul>
  </center>
</div>

</div>
</div>
            

    
  </body>
</html>
<br><br><br><br><br>
<br><br><br><br><br><br>    
<?php
require_once("footer2.php");
?>