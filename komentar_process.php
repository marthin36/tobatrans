<?php
  session_start();
  if(isset($_SESSION['is_logged_in']))
  {
    require_once(dirname(__FILE__).'/conn.php');

    $id = NULL;
    $subjek = $_POST['subjek'];
    $isi = $_POST['isi'];
    $nama = $_SESSION['namalengkap'];
	$tanggapan = NULL;
    $quer = "INSERT INTO komentar VALUES('$id','$nama','$subjek','$isi', '$tanggapan')";
    $hasil = mysqli_query($conn,$quer);

    if($hasil)
    {
	  echo"<script>alert('Terimakasih Atas Sarannya!');</script>";
      header("Refresh:0 url=daftar_komentar.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
