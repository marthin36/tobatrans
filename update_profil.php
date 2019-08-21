<?php 
	require_once("conn.php");
 ?>
 <!DOCTYPE html>
<html><head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Beranda</title>
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
      <center><h1>Update Profil anda</h1></center>
     
             
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="profil">
            
              
                         <?php
              
    

    
       //inlcude atau memasukkan file koneksi ke database
    include('conn.php');
    //jika tombol tambah benar di klik maka lanjut prosesnya
    
 
$id = $_SESSION['id_user'];

    
    $query="SELECT * FROM user WHERE id_user ='$id'";
    $query1=mysqli_query($conn,$query);
    $query2=mysqli_fetch_array($query1);
    
    $nama=$query2['namalengkap'];
    $date=$query2['tanggallahir'];
    $alamat=$query2['alamat'];
    $username=$query2['username'];
    $telpon=$query2['nomortelepon'];
    $emails=$query2['email'];
    $pass=$query2['password'];
    $gambars=$query2['pas_photo'];
    
    
    
    ?>   <div class="login1">
              <form action="update_profil_process.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <p>Nama User</p>
                  <input type="text" name ="namalengkap" value="<?php echo $query2['namalengkap'] ?>" class="form-control" required />
                </div>
                <div class="form-group">
                  <p>Tanggal Lahir</p>
                  <input type="date" name ="tanggallahir" value="<?php echo $query2['tanggallahir'] ?>" class="form-control" required />
                </div>
                <div class="container" style="text-align: left;color: grey;">Jenis Kelamin</p>

                <input type="radio" name="jenis_kelamin" value="L"  required>Laki-laki
                <input type="radio" name="jenis_kelamin" value="P"  required>Perempuan
              </div>
              <div class="form-group">
                  <p>Alamat</p>
                  <input type="text" name ="alamat" value="<?php echo $query2['alamat'] ?>" class="form-control" required />
                </div>
              <div class="form-group">
                  <p>Nomor Telephone</p>
                  <input type="text" name ="nomortelepon" value="<?php echo $query2['nomortelepon'] ?>" class="form-control" required />
                </div>
              <div class="form-group">
                  <p>Email</p>
                  <input type="text" name ="email" value="<?php echo $query2['email'] ?>" class="form-control" required />
                </div>
                <div class="form-group">
                  <p>Username</p>
                  <input type="text" name ="username" value="<?php echo $query2['username'] ?>" class="form-control" required />
                </div>
                <div class="form-group">
                  <p>Password</p>
                  <input type="password" name ="password" value="<?php echo $query2['[password]'] ?>" class="form-control" required />
                </div>





                <!-- 
                <div class="form-group">
                  <p>Tanggal Lahir</p>
                  <input type="text" name="tanggallahir" value="Rp <?php echo number_format($data['tanggallahir']) ?>.00" class="form-control" required />
                </div>
                <div class="form-group">
                  <p>Jenis Kelamin</p>
                  <input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'] ?>" class="form-control" required />
                </div>
                <div class="form-group">
                  <p>Alamat</p>
                  <textarea name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control"rows="5" required></textarea>
                </div>
                 <div class="form-group">
                  <p>Nomor Telephone</p>
                  <input type="text" name="notelp" value="<?php echo $data['nomortelepon'] ?>" class="form-control" required />
                </div>
                 <div class="form-group">
                  <p>Email</p>
                  <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control" required />
                </div>
                               
                
                <div class="form-group">
                  <p>Gambar</p>
                  <input type="file" name="gambar" accept="img/*"class="btn btn-primary"/>
                </div> -->
<br><br><br>                
              <div class="text-center">
                <button name="edit" type="submit" class="btn btn-primary"> Update Profil</button>
                
                <button class="btn btn-danger"><a href="profil.php">Batal</a></button></div>
                
              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
         
     
           
           
              
  </body>
</html>
<br><br><br><br><br>
<br><br><br>

<?php
require_once("footer2.php");
?>