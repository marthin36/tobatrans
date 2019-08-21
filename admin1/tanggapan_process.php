<?php
  if(isset($_POST['edit']))
  {
    include('../conn.php');

    $id = $_GET['id_komentar'];
	$tanggapan = $_POST['tanggapan'];
    
	$hasil = mysqli_query($conn, "UPDATE komentar SET tanggapan='$tanggapan' WHERE id_komentar='$id'");
	
    if($hasil)
    {
	  echo"<script>alert('Saran Telah Ditanggapi!');</script>";
      header("Refresh:0 url=data_komentar.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
