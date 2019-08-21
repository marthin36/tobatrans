<?php
session_start();
// require_once("conn.php");
$namalengkaps = $_POST['namalengkap'];
$tanggallahirs = $_POST['tanggallahir'];
$jenis_kelamins = $_POST['jenis_kelamin'];
$alamats = $_POST['alamat'];
$nomortelepons = $_POST['nomortelepon'];
$emails = $_POST['email'];
$usernames = $_POST['username'];
$passwords= $_POST['password'];
$role = 3;

if($_FILES['pas_photo']['name']){
      move_uploaded_file($_FILES['pas_photo']['tmp_name'], '../image/supir/'.$namalengkaps.'.jpg');
      //proses menyimpan gambar ke dalam direktori
      $gambar = $namalengkaps.'.jpg'; //membuat variabel $profile untuk d
}

  global $conn;
  require_once('../commons/function.php');

  function execQ($strQ){
    global $conn;
    $res = mysqli_query($conn, $strQ);

    return $res;
  }

  $query = "INSERT INTO user VALUES(NULL,'$namalengkaps' , '$tanggallahirs', '$jenis_kelamins', '$alamats', '$nomortelepons', '$emails','$gambar','$usernames','$passwords','$role')";

  if(execQ($query)){
    $SIGN['is_sign_in'] = TRUE;
    header("location:data_supir.php");
  }else{
    echo "gagal";
  }




// $q = mysqli_query($conn,"select * from `user` where `username`='".$username."' and `password`='".$password."'");
   
//    if(mysqli_num_rows($q) > 0) {
//      echo "<div align='center'>Data Informasi Customer Sudah Terdaftar  <a href='register.php'>Back</a>";
//    } else {
//      if(!$username || !$password) {
//        echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Back</a>";
    

//      } else {$query = "INSERT INTO user VALUES ('$namalengkaps','$tanggallahirs','$jenis_kelamins','$alamats','$nomortelepons','$emails','$usernames','$passwords',2)";
//    $simpan = mysqli_query($conn,$query);
 
//        if($simpan) {
//          echo '<script language="javascript">
//          alert("Registrasi Berhasil Di Lakukan");
//          window.location="index.php";
//          </script>';
//          exit();
//        } else {
//          echo "<div align='center'>Proses Gagal!</div>";
//        }
//      }
//    }
// 
?>