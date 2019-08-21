<?php
// $database = new mysqli("localhost", "root", "" ,"tobatrans");

if(isset($_POST['daftar'])){
include('conn.php');
  $nama_supir = $_POST['nama'];
  $punya_kendaraan = $_POST['kendaraan'];
  $pengalaman =  $_POST['pengalamans'];
  $alamat_email = $_POST['alamat'];
  $nomor_telepon = $_POST['notelp'];
  $deskripsi = $_POST['deskripsi'];
  $status_supir = "Di proses";
  $test=mysqli_query($conn,"INSERT INTO lamaran_supir VALUES('', $nama_supir', '$punya_kendaraan', '$pengalaman', '$alamat_email', '$nomor_telepon', '$deskripsi', ".$status_supir.")");

 if($test){
    echo "<script> alert('Lamaran berhasil dimasukkan')</script>";
    header("Location:regis_supir.php");
  }else{
    echo "<script>alert('gagal')<script>";
    header("Location:regis_supir.php");
  }
}

?>